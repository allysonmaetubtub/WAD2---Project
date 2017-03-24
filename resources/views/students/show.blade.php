@extends('layouts.master')

@section('content')
<style>
            .cont{
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
</style>
    <div class="cont">
        <h1>{{ $student->name}}</h1>

        <table class="table table-striped">
            <th>Student</th>
            <th>Section</th>
            <th>English</th>
            <th>Math</th>
            <th>Filipino</th>
            <th>Science</th>
            <th>MAPEH</th>
            <th>EPP</th>
            <th>CL</th>
            <th>Final Grade</th>
            <th>Action</th>
            <tr>
               <td>{{$student->name}}</td>
               <td>{{$student->section_name}}</td>
               <td>{{$student->english}}</td>
               <td>{{$student->math}}</td>
               <td>{{$student->filipino}}</td>
               <td>{{$student->science}}</td>
               <td>{{$student->mapeh}}</td>
               <td>{{$student->epp}}</td>
               <td>{{$student->cl}}</td>
               <td>{{ round(($student->english + $student->math + $student->filipino + $student->science + $student->mapeh + $student->epp + $student->cl)/7, 2)}} %</td>
               <td>
                    <form action="{{ route('students.edit', ['id' => $student->id]) }}" style="display:inline;">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
                    </form>
                    <form method="post" action="{{ route('students.destroy', ['id' => $student->id]) }}" style="display:inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
@endsection
