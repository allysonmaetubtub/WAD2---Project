@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Section</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('sections') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('section_name') ? ' has-error' : '' }}">
                            <label for="section_name" class="col-md-4 control-label">Section Name</label>

                            <div class="col-md-6">
                                <input id="section_name" type="text" class="form-control" name="section_name" value="{{ old('section_name') }}" required autofocus>

                                @if ($errors->has('section_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('section_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('grade_level') ? ' has-error' : '' }}">
                            <label for="grade_level" class="col-md-4 control-label">Grade</label>

                            <div class="col-md-6">
                                <input id="grade_level" type="text" class="form-control" name="grade_level" value="{{ old('grade_level') }}" required autofocus>

                                @if ($errors->has('grade_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade_level') }}</strong>
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
