<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users table name
        $users = User::get();
        return view('table.datatables.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.datatables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $validated = $request->validate([
            'name' => 'required',
            'progress' => 'required',
            'members' => 'required|unique:users|max:1255',
            'date' => 'required',

        ]);
        $users = new User;

        $users->name = $request->name;
        $users->progress = $request->progress;

        // this code is only for image
        if ($request->hasfile('members')) {
            $file = $request->file('members');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            // file path in public folder/uploads/categories
            $file->move('uploads/images/', $filename);
            $users->members = $filename;
        }
        $users->date = $request->date;

        $users->save();
        return redirect('newtable')->withSuccess('New Record Submit successfully..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('table.datatables.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('table.datatables.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $users = User::where('id', $id)->first();

        $users->name = $request->name;
        $users->progress = $request->progress;

        if ($request->hasfile('members')) {

            $destination = 'uploads/images/' . $users->members;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('members');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            // file path in public folder/uploads/categories
            $file->move('uploads/images/', $filename);
            $users->members = $filename;
        }
        $users->date = $request->date;

        $users->save();
        return redirect('newtable')->withSuccess('Record Update successfully..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect('newtable')->withSuccess('Record Delete successfully..');
    }
}
