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
        {{$ttg->created_at}}
    </p>
    <a href="{{route('ttg.index')}}"><button >Back:</button></a>
</div>

