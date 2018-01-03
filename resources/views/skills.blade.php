@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
	            <div class='form-group'>
	          
	            	{{Form::model(Auth::user(), ['method' => 'PATCH', 'route' =>['profile.update', Auth::user()->id]])}}
				   
				   	@foreach($skills as $skill)
				    
				    {{ Form::checkbox('skills[]', '$skill->title', 'old($skill->title)') }}
				    {{ Form::label($skill->title) }}
				    <br>
				    @endforeach

				    <br>
				   

					<button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
				    {{Form::close()}}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
