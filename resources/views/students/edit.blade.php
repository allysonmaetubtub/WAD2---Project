@extends('layouts.master')

@section('content')
<div class="cont">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Student</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('students.update', ['id'=>$student->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $student->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label for="student_id" class="col-md-4 control-label">Student ID</label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control" name="student_id" value="{{ $student->student_id }}" required autofocus>

                                @if ($errors->has('student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('english') ? ' has-error' : '' }}">
                            <label for="english" class="col-md-4 control-label">English</label>

                            <div class="col-md-6">
                                <input id="english" type="text" class="form-control" name="english" value="{{ $student->english }}" required autofocus>

                                @if ($errors->has('english'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('english') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('math') ? ' has-error' : '' }}">
                            <label for="math" class="col-md-4 control-label">Math</label>

                            <div class="col-md-6">
                                <input id="math" type="text" class="form-control" name="math" value="{{ $student->math }}" required autofocus>

                                @if ($errors->has('math'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('math') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('filipino') ? ' has-error' : '' }}">
                            <label for="filipino" class="col-md-4 control-label">Filipino</label>

                            <div class="col-md-6">
                                <input id="filipino" type="text" class="form-control" name="filipino" value="{{ $student->filipino }}" required autofocus>

                                @if ($errors->has('filipino'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filipino') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('science') ? ' has-error' : '' }}">
                            <label for="science" class="col-md-4 control-label">Science</label>

                            <div class="col-md-6">
                                <input id="science" type="text" class="form-control" name="science" value="{{ $student->science }}" required autofocus>

                                @if ($errors->has('science'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('science') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mapeh') ? ' has-error' : '' }}">
                            <label for="mapeh" class="col-md-4 control-label">MAPEH</label>

                            <div class="col-md-6">
                                <input id="mapeh" type="text" class="form-control" name="mapeh" value="{{ $student->mapeh }}" required autofocus>

                                @if ($errors->has('mapeh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mapeh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('epp') ? ' has-error' : '' }}">
                            <label for="epp" class="col-md-4 control-label">EPP</label>

                            <div class="col-md-6">
                                <input id="epp" type="text" class="form-control" name="epp" value="{{ $student->epp }}" required autofocus>

                                @if ($errors->has('epp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('epp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cl') ? ' has-error' : '' }}">
                            <label for="cl" class="col-md-4 control-label">CL</label>

                            <div class="col-md-6">
                                <input id="cl" type="text" class="form-control" name="cl" value="{{ $student->cl }}" required autofocus>

                                @if ($errors->has('cl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
