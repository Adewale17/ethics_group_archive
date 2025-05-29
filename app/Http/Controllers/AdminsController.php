<?php

namespace App\Http\Controllers;

use App\Models\Admin\Admin;
use App\Models\Archive;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class AdminsController extends Controller
{
    public function viewLogin()
    {
        return view('admins.login');
    }
    public function checkLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']

        ]);
        $remember_me = $request->has('remember_me') ? true : false;

        if (
            auth()->guard('admin')->attempt([
                'email' => $validate['email'],
                'password' => $validate['password']
            ], $remember_me)
        ) {
            return redirect()->route('adminDashboard');
        }
        return redirect()->back()->with(['error' => 'Incorrect username or password']);

    }

    public function index()
    {
        $adminCount = Admin::select()->count();
        $archiveCount = Archive::select()->count();
        return view('admins.index', compact('adminCount', 'archiveCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('checkLogin');
    }

    public function allAdmins()
    {
        $admins = Admin::select()->orderBy('id', 'desc')->get();
        return view('admins.all-admins', compact('admins'));
    }

    public function createAdmins()
    {

        return view('admins.create-admins');

    }

    public function storeAdmins(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:admins', 'string'],
            'password' => ['required', 'min:8', 'string'],

        ]);
        $admins = Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),


        ]);
        if ($admins) {
            return redirect()->route('allAdmins')->with(['success' => 'Admin created Successfully']);

        }

    }

    public function allArchives()
    {
        $archives = Archive::orderBy('id', 'desc')->paginate(5);
        return view('admins.all-archives', compact('archives'));
    }

    public function createArchive()
    {

        return view('admins.create-archive');

    }

    public function storeArchive(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'ethic_group' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif'],
            'link' => ['required', 'string'],
        ]);

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $archives = Archive::create([
            "title" => $validated['title'],
            "description" => $validated['description'],
            "content" => $validated['content'],
            "ethic_group" => $validated['ethic_group'],
            "image" => $myimage,
            "link" => $validated['link'],


        ]);
        if ($archives) {
            return redirect()->route('all.archives')->with(['success' => 'Archive created Successfully']);

        }
    }
    public function editArchive($id)
    {
        $archives = Archive::find($id);
        return view('admins.edit-archive', compact('archives'));
    }
    public function updateArchive(Request $request, $id)
    {
        $archive = Archive::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'ethic_group' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,gif'],
            'link' => ['required', 'string'],
        ]);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image
            if (File::exists(public_path('assets/images/' . $archive->image))) {
                File::delete(public_path('assets/images/' . $archive->image));
            }

            // Store the new image
            $destinationPath = 'assets/images/';
            $newImageName = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $newImageName);
            $archive->image = $newImageName;
        }

        // Update the other fields
        $archive->title = $validated['title'];
        $archive->description = $validated['description'];
        $archive->content = $validated['content'];
        $archive->ethic_group = $validated['ethic_group'];
        $archive->link = $validated['link'];

        $archive->save();

        return redirect()->route('all.archives')->with('success', 'Archive updated successfully.');
    }




    public function deleteArchive($id)
    {
        $archive = Archive::find($id);

        if (!$archive) {
            return redirect()->back()->with('error', 'Archive not found.');
        }

        // Delete the image file if it exists
        if (File::exists(public_path('assets/images/' . $archive->image))) {
            File::delete(public_path('assets/images/' . $archive->image));
        }

        // Delete the archive record
        $archive->delete();


        return redirect()->route('all.archives')->with('success', 'Archive deleted successfully.');
    }
    public function deleteAdmin($id)
    {
        $admins = Admin::find($id);

        if (!$admins) {
            return redirect()->back()->with('error', 'admin not found.');
        }

        $admins->delete();


        return redirect('admin/all-admins')->with('success', 'Admin deleted successfully.');
    }
}
