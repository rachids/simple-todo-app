<form method="POST" action="{{ @route("tasks.update", $task) }}">
    @csrf
    @method('put')
    <label for="description">Tâche: </label>
    <input type="text" name="description" id="description" value="{{ $task->description }}"/>

    <button type="submit">Modifier la tâche</button>
</form>
