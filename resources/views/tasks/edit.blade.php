@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4 mb-4">Edit Task</h2>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Task Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Task Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $task->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input type="date" name="due_date" class="form-control" value="{{ $task->due_date }}">
                </div>

                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select name="priority" class="form-select">
                        <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
                        <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Task</button>
            </form>
        </div>
    </div>
</div>
@endsection
