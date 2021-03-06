@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ADMIN Tasks list</div>

                <div class="card-body">
 
                    <div class="container">

                        <a href="{{route('task.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"> Создать задачу</i></a>
                       
                        <table class="table table-striped">
                            <thead>
                                <th class="text-center">Задача</th>
                                <th class="text-center">Описание</th>
                                <th class="text-center">Кем создана</th>
                                <th class="text-center">Дата создания</th> 
                                <th class="text-center">Действие</th>

                            </thead>
                            <tbody>
                                @forelse($tasks as $task)
                                    <tr>
                                        <td>{{$task->title}}</td>
                                        <td>{{$task->description}}</td>
                                        <td class="text-center">

                                        @if($task->admin_name) 
                                            {{$task->admin_name}}
                                        @else
                                            {{$task->name}}
                                        @endif

                                        </td>
                                        <td class="text-center">{{$task->created_at}}</td>
                                        
                                        <td class="text-right">

                                           <form onsubmit="if(confirm('Удалить задачу: {{$task->title }} ?')){ return true} else { return false }" action="{{route('task.destroy', $task)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{ csrf_field() }}
                                           
                                               <a class="btn btn-outline-info" href="{{route('task.show', $task)}}"><i class="fa fa-file-o"></i></a>

                                                <a class="btn btn-outline-info" href="{{route('task.edit', $task)}}"><i class="fa fa-edit"></i></a>

                                                <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-trash-o"></i></button>
                        
                                            </form>

                                       </td>   
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center"><h2>Данные отсутствуют</h2></td>
                                    </tr>
                                @endforelse
                            </tbody>

                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right">
                                            {{$tasks->links()}}
                                        </ul>
                                    </td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
