<h1>Welkom bij onze TTG pagina</h1>

<h3>Create game:</h3>
<form method="post" action="{{ route('ttg.update', $ttg->id) }}">
    @csrf
    @method('PUT')
    {{--    Cross site scripting--}}
    <label for="title">title:</label>
    <input type="text" id="title" name="title" value="{{$ttg->title}}">
    <label for="nop">number of players</label>
    <input type="text" id="nop" name="nop" value="{{$ttg->nop}}">
    <label for="description">description:</label>
    <input type="text" id="save" name="description" value="{{$ttg->description}}">
    <button type="submit">Update</button>
</form>

