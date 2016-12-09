@extends('layouts.app2')

@section('content')
    <h1>Página de contactos</h1>

    @if(count($people))
        <ul>
            @foreach($people as $person)

                <li>{{$person}}</li>

            @endforeach

        </ul>
    @endif
@endsection;

@section('footer')

    <h3>Footer</h3>

@endsection