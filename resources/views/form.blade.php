<label for="">Название задачи</label>
<input type="text" class="form-control" name="title" placeholder="Название задачи" value="{{$task->title or ""}}" required>

<input type="hidden" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$task->slug or ""}}" readonly="">

<label for="">Описание задачи</label>
<input type="text" class="form-control" name="description" placeholder="Название задачи" value="{{$task->description or ""}}" required>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">
