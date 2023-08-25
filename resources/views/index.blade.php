@extends('layouts.app')

@section('content')
    <h2>Add New Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <button type="submit">Add Task</button>
    </form>
@endsection
