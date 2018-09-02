@extends('layouts.app')

@section('content')


		
<div class="container">
	<span clas="text-center">Просмотр информации о задаче </span>
	<div class="jumbotron">
		

	
		<label>Название задачи:   {{$task->title}}</label>
		<hr>
		<label>Описание:    {{$task->description}}	</label>	
		<hr>
		<label>slug:   {{$task->slug}}</label>
		<hr>


		<label>Кем создана:   {{$task->created_by}}</label>
		<hr>
		<label>Кем модифицировалась:    {{$task->modified_by}}</label>
		<hr>
		<labe>Когда создана:    {{$task->created_at}}</label>
		<hr>
		<label>Когда модифицирована:    {{$task->updated_at}}</label>

 		{{ csrf_field() }}
	</div>

</div>

@endsection