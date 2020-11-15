<form method="POST" action="{{ @route("tasks.create") }}">
    @csrf
    <label for="description">Tâche: </label>
    <input type="text" name="description" id="description"/>

    <button type="submit">Ajouter une tâche</button>
</form>
