<div>
    @if (session('success'))
        {{ session('success') }}

    @endif
    <a href="{{ route('agent.create')}}">Créer agent</a>
    @foreach ($agents as $agent )

     {{ $agent->name}} <br>
     <hr>
     {{ $agent->firstname}} <br>
     {{ $agent->birthday}} <br>

    @endforeach

</div>
