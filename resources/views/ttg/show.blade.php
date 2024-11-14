<h1>Profile</h1>

<h2>Your game id: {{$ttg->id}}</h2>

<div>
    <p>
        {{$ttg->title}}
    </p>
    <p>
        {{$ttg->nop}}
    </p>
    <p>
        {{$ttg->description}}
    </p>
    <p>
        @if($ttg->updated_at > $ttg->created_at)
            {{$ttg->updated_at}}
        @else
            {{$ttg->created_at}}
        @endif
    </p>
    <a href="{{route('ttg.index')}}"><button >Back:</button></a>
</div>

