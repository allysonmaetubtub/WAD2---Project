@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            A++
        </div>
        <p>A better way to record their grades.</p>
        <div class="links">
            <a href="{{ url('students') }}">My Students</a>
            <!-- <a href="{{ url('sections')  }}">Sections</a> -->
        </div>
    </div>
@endsection
