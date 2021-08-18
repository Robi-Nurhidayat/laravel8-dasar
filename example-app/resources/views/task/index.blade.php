
    <h1>Task</h1>

    <form action="tasks" method="POST">
        @csrf
        <input type="text" name="list" placeholder="add new task">
        <button type="submit">Add</button>
    </form>


        <div>
            @foreach ($tasks as $task)
            <p>{{ $task->id }} {{ $task->list }} - <a href="tasks/{{ $task->id }}/edit">Edit</a>  -

                <form action="/task/{{ $task->id }}/delete" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </p>
            @endforeach
        </div>






