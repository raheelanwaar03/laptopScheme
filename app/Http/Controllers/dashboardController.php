<?php

namespace App\Http\Controllers;

use App\Models\finalWork;
use App\Models\User;
use App\Models\UserWork;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function second()
    {
        return view('second');
    }

    public function adminSide()
    {
        $users = User::paginate(10);
        return view('admin',compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'education' => 'required',
            'age' => 'required'
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->education = $validated['education'];
        $user->laptop = $request->laptop;
        $user->mobile = $request->mobile;
        $user->age = $validated['age'];
        $user->save();
        return redirect()->route('User.Second.Step');
    }

    public function final()
    {
        return view('final');
    }

    public function finalStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'tid' => 'required',
        ]);

        return auth()->user()->id;

        $final = new finalWork();
        $final->user_id = auth()->user()->id;
        $final->name = $validated['name'];
        $final->tid = $validated['tid'];
        $final->save();
        return redirect()->back()->with('massage','ہم آپ کو ایک تصدیقی پیغام بھیجیں گے۔');

    }

}
