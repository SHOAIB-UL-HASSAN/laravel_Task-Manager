@extends('layouts.app')

@section('content')
    <h2>Delete Task</h2>
    <p>Are you sure you want to delete this task?</p>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Confirm Delete</button>
    </form>
    <a href="{{ route('tasks.show', $task) }}">Cancel</a>
@endsection
