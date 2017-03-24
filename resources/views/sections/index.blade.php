@extends('layouts.master')

@section('content')
        <h1>Sections</h1>
        <form action="{{ route('sections.create') }}" style="display:inline;float:right; margin:auto 5px 5px 5px;">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i></button>
        </form>
        <table class="table table-striped">
            @if(count($sections)<1) 
                <p>No Data</p>
            @else
                <th>Name</th>
                <th>Grade Level</th>
                <th>Action</th>
                @foreach($sections as $section)
                    <tr>
                       <td>{{$section->name}}</td>
                       <td>{{$section->grade_level}}</td>
                       <td>
                            <form action="{{ route('sections.edit', ['id' => $section->id]) }}" style="display:inline;">
                                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
                            </form>
                            <form method="post" action="{{ route('sections.destroy', ['id' => $section->id]) }}" style="display:inline;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                            </form>
                    </tr>
                @endforeach
            @endif
            
        </table>
@endsection
