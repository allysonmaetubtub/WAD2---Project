@extends('layouts.master')

@section('content')

    <div class="cont">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <spans>Profile</span>
                        <form style="float:right;" action="{{ route('profile.edit', ['id' => auth()->user()->id]) }}" style="display:inline;">
                            <button type="submit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i></button>
                        </form>
                    </div>
                    <div class="panel-body">
                        <table btn-xs>
                            <tr>
                                <td>Name:</td>
                                <td style="padding-left:10px;">{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td style="padding-left:10px;">{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Advisory Class:</td>
                                <td style="padding-left:10px;">Grade {{$user->section->grade_level}} - {{$user->section->name}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection
