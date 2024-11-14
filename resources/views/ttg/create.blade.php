
<h3>Create game:</h3>
<form method="post" action="{{ route('ttg.store') }}">
    @csrf
    {{--    Cross site scripting--}}

    <label for="title">title:</label>
    <input type="text" id="title" name="title">
    <label for="nop">number of players</label>
    <input type="text" id="nop" name="nop">
    <label for="description">description:</label>
    <input type="text" id="save" name="description">
    <button type="submit">Save</button>
</form>

