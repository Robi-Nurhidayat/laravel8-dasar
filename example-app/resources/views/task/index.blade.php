
    <h1>Task</h1>


        <ol>
            @foreach ($tasks as $task)
            <li>{{ $task->list }}</li>
            @endforeach
        </ol>


