<div>
    @foreach ($agents as $agent )

     {{ $agent->name}} <br>
     <hr>
     {{ $agent->firstname}} <br>
     {{ $agent->birthday}} <br>


    @endforeach
</div>
