@extends('layouts.app')

@section('content')
    <h2>Task Details</h2>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <a href="{{ route('tasks.edit', $task) }}">Edit</a>
    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
@endsection
