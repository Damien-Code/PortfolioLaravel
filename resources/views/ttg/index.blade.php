<h1>Welkom bij onze TTG pagina</h1>

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
<div>

    @foreach($games as $game)
        <p>
            {{ $game->title}}
            {{ $game['nop'] }}
            {{ $game['description'] }}
        </p>
        <a href="ttg/{{$game->id}}/edit"><button>Edit:</button></a>
        <form method= "post" action="{{route('ttg.destroy', $game->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete:</button>
        </form>
    @endforeach
</div>
