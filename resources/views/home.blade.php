@extends('layouts.app')

@section('content')
<h1>TRENI</h1>
    @foreach ($treni as $treno)
    <ul>
        <h4> {{ $treno['id']}} </h4>
        <li> {{ $treno['stazione_di_partenza'] }} </li>
        <li> {{ $treno['stazione_di_arrivo']}} </li>
        <li> {{ $treno['ora_di_partenza'] }} </li>
        <li> {{ $treno['ora_di_arrivo'] }} </li>

    </ul>
    @endforeach
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
@endsection
