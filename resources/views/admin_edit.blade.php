@extends('layouts.app')

@section('content')

<div class="container">
	<form class="form-horizontal" action="{{route('task.update', $task)}}" method="post">

		<input type="hidden" name="_method" value="put">

		@include('form')

		<input type="hidden" name="created_by" value="{{Auth::id()}}">

 		{{ csrf_field() }}

	</form>

</div>

@endsection