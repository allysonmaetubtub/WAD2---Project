<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Section;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'teacher_id'=>'required|numeric',
            'name'=>'required|string',
            'password'=>'required|confirmed',
            'advisory_class'=>'alpha_num'
        ]);
        $teacher = new Teacher;
        $teacher->teacher_id = $request->teacher_id;
        $teacher->name = $request->name;
        $teacher->password = bcrypt($request->password);
        $teacher->advisory_class = $request->advisory_class;
        $teacher->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('profile-edit', compact('user'));
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
        $this->validate($request, [
            'teacher_id'=>'required|numeric|unique:users,teacher_id,'.$id,
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'advisory_class' => 'required|alpha_num',
            'grade_level' => 'required|integer|max:12',
        ]);

        $section = Section::findOrFail(auth()->user()->section_id)->update([
            'name' => $request->advisory_class,
            'grade_level' => $request->grade_level
        ]);

        $user = User::findOrFail(auth()->user()->section_id)->update([
            'teacher_id' => $request->teacher_id,
            'name' => $request->name,
            'email' => $request->email
        ]);

        session()->flash('flashMessage', 'The profile has been updated.');
        return redirect()->route('profile', auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
