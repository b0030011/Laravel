@extends('layouts.app')

@section('content')

<div class="container">
	<form class="form-horizontal" action="{{route('tsk.store')}}" method="post">

		@include('form')

		<input type="hidden" name="created_by" value="{{Auth::id()}}">

 		{{ csrf_field() }}

	</form>

</div>

@endsection