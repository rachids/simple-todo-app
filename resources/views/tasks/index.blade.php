<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>

    <div>
        <ul>
            @foreach($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <ul>
            @foreach($tasks as $task)
                <li>
                    {{ $task->description }}
                    <a href="{{ route("tasks.edit", $task) }}">✏️</a>
                    <form method="POST" action="{{ route("tasks.destroy", $task) }}">
                        @csrf
                        @method("DELETE")
                        <button type="submit">🗑️</button>
                    </form>
                </li>
            @endforeach
        </ul>

        @include("tasks.create")
    </div>

</body>
</html>
