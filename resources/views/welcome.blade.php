@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.

                {!! Form::model($skills, ['method' => 'GET','route' => ['results.index']]) !!}
                        <div class="form-group">
                        <div class="cols-sm-10">
                        <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('skill', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>
                        </br>
                        </br>
                        <a href="/articleC" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </div>


                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
