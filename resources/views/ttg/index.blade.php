<h1>Welkom bij onze TTG pagina</h1>

<a href="{{route('ttg.create')}}"><button>Create Game</button></a>
<div class="bg-grey">
    @foreach($games as $game)
        <p>
            {{ $game->title}}
            {{ $game['nop'] }}
            {{ $game['description'] }}
        </p>
        <a href="{{route('ttg.edit', $game->id)}}">
            <button>Edit:</button>
        </a>
        <form method="post" action="{{route('ttg.destroy', $game->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete:</button>
        </form>
        <a href="{{route('ttg.show', $game->id)}}">
            <button>Show:</button>
        </a>
    @endforeach
</div>

