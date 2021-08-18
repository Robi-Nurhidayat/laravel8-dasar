<h1>Halaman edit</h1>

<form action="/tasks/{{ $task->id }}" method="POST">
    @method('put')
    @csrf

    <input type="text" name="list" value="{{ $task->list }}" placeholder="add new task">
    <button type="submit">Update</button>
</form>
