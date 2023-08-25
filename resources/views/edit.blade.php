@extends('layouts.app')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $task->description }}</textarea>
        <button type="submit">Update Task</button>
    </form>
@endsection
