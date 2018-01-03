@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>



                <div class="panel-body">
                    <a href="/skills">Add Skills</a>
                </div>

                Current Skills <br>

                {{Auth::user()->skills}}
            </div>
        </div>
    </div>
</div>
@endsection
 