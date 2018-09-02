@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
 

<div class="container">
    <div class="row text-center">
        <div class="col-sm-6">
            <div class="jumbotron">
                 
                 <a href="{{route('admin.task_list')}}" class="btn btn-primary"><i>Список задач</i></a>
                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="jumbotron">
                 
                 <a href="{{route('admin.author_list')}}" class="btn btn-primary"><i>Список авторов</i></a>
            </div>
        </div>
    </div>
</div>






                </div>
            </div>
        </div>
    </div>
</div>
@endsection
