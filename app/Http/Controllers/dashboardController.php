<?php

namespace App\Http\Controllers;

use App\Models\UserWork;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    public function second()
    {
        return view('second');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'education' => 'required',
            'laptop' => 'required',
            'mobile' => 'required',
            'age' => 'required'
        ]);

        $user = new UserWork();
        $user->name = $validated['name'];
        $user->education = $validated['education'];
        $user->laptop = $validated['laptop'];
        $user->mobile = $validated['mobile'];
        $user->age = $validated['age'];
        $user->save();
        return redirect()->route('User.Second.Step');
    }
}
