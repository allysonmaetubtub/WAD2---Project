@extends('layouts.master')

@section('content')
        <h1>Students</h1>
        <form action="{{ route('students.create') }}" style="display:inline;float:right; margin:auto 5px 5px 5px;">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button>
        </form>
        <table class="table table-striped">
            @if(count($students)<1) 
                <p>No Data</p>
            @else
                <th>Student</th>
                <th>Section</th>
                <th>Final Grade</th>
                <th>Action</th>
                @foreach($students as $student)
                    <tr>
                       <td>{{$student->name}}</td>
                       <td>{{$student->section_name}}</td>
                       <td>{{ round(($student->english + $student->math + $student->filipino + $student->science + $student->mapeh + $student->epp + $student->cl)/7, 2)}} %</td>
                       <td>
                            <form action="{{ route('students.show', ['id' => $student->id]) }}" style="display:inline;">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></button>
                            </form>
                            <form action="{{ route('students.edit', ['id' => $student->id]) }}" style="display:inline;">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
                            </form>
                            <form method="post" action="{{ route('students.destroy', ['id' => $student->id]) }}" style="display:inline;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                    </tr>
                @endforeach
            @endif
        </table>
@endsection
