<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    private $customMessage = [
        'english.numeric'=>'Must enter a number',
        'math.numeric'=>'Must enter a number',
        'filipino.numeric'=>'Must enter a number',
        'science.numeric'=>'Must enter a number',
        'mapeh.numeric'=>'Must enter a number',
        'epp.numeric'=>'Must enter a number',
        'cl.numeric'=>'Must enter a number',
        'english.min'=>'Must be at least 50.',
        'math.min'=>'Must be at least 50.',
        'filipino.min'=>'Must be at least 50.',
        'science.min'=>'Must be at least 50.',
        'mapeh.min'=>'Must be at least 50.',
        'epp.min'=>'Must be at least 50.',
        'cl.min'=>'Must be at least 50.',
        'english.max'=>'Must not be greater than 100.',
        'math.max'=>'Must not be greater than 100.',
        'filipino.max'=>'Must not be greater than 100.',
        'science.max'=>'Must not be greater than 100.',
        'mapeh.max'=>'Must not be greater than 100.',
        'epp.max'=>'Must not be greater than 100.',
        'cl.max'=>'Must not be greater than 100.'

    ];

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
        $students = auth()->user()->students;
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher_id = auth()->user()->id;
        $section = auth()->user()->section; //retrieve user's advisory class

        $this->validate($request, [
            'name' => 'required|string',
            'student_id' => 'required|integer|unique:students',
            'english' => 'numeric|max:100|min:50',
            'math' => 'numeric|max:100|min:50',
            'filipino' => 'numeric|max:100|min:50',
            'science' => 'numeric|max:100|min:50',
            'mapeh' => 'numeric|max:100|min:50',
            'epp' => 'numeric|max:100|min:50',
            'cl' => 'numeric|max:100|min:50',
        ],
        $this->customMessage

        );

        $student = Student::create([
            'name' => $request->name,
            'student_id' => $request->student_id,
            'section_name' => $section->name,
            'grade_level' => $section->grade_level,
            'english' => $request->english,
            'math' => $request->math,
            'filipino' => $request->filipino,
            'science' => $request->science,
            'mapeh' => $request->mapeh,
            'epp' => $request->epp,
            'cl' => $request->cl,
            'teacher_id' => $teacher_id,
        ]);

        session()->flash('flashMessage', 'The student has been registered.');

        return redirect('students');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
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
            'name' => 'required|string',
            'student_id' => 'required|integer|unique:students,student_id,'.$id,
            'english' => 'numeric|max:100',
            'math' => 'numeric|max:100',
            'filipino' => 'numeric|max:100',
            'science' => 'numeric|max:100',
            'mapeh' => 'numeric|max:100',
            'epp' => 'numeric|max:100',
            'cl' => 'numeric|max:100',
        ],
        $this->customMessage
        );

        $student = Student::findOrFail($id)->update([

            'name' => $request->name,
            'student_id' => $request->student_id,
            'english' => $request->english,
            'math' => $request->math,
            'filipino' => $request->filipino,
            'science' => $request->science,
            'mapeh' => $request->mapeh,
            'epp' => $request->epp,
            'cl' => $request->cl,
        ]);

        session()->flash('flashMessage', 'The student\'s record has been updated.');

        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();

        session()->flash('flashWarningMessage', 'The student\'s record has been deleted.');

        return redirect('students');
    }
}
