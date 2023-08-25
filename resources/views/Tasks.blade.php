<h1>Pending tasks</h1>
<ul class="list-group">
@foreach($todos as $todo)
    <li class="list-group-item">{{ $todo->task }}</li>
@endforeach
</ul>

<h2>Add new task</h2>
<form action="{{ url('/todos') }}" method="POST">
    @csrf
    <input type="text" class="form-control" name="task" placeholder="Add new task">
    <button class="btn btn-primary" type="submit">Store</button>
</form>