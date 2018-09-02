@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ADMIN Author list</div>

                <div class="card-body">
 
                    <div class="container">
                        
                        <table class="table table-striped">
                            <thead>
                                <th class="text-center">Автор</th>
                                <th class="text-center">Количество задач</th>

                            </thead>
                            <tbody>
                                @forelse($tasks as $task)
                                    <tr>
                                        <td class="text-center">
                     
                                            @if($task->admin_name) 
                                                {{$task->admin_name}}
                                            @else
                                                {{$task->name}}
                                            @endif

                                        </td>
                                        <td class="text-center">{{$task->task_count}}</td>
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
