@extends('layouts.app')

@section('content')
    <h1>All Colleges</h1>
    <ul>
        @foreach($colleges as $college)
            <li>
                <h3>{{ $college->collfullname }}   |  <a href="{{ url('/show/college', $college->collid) }}">Show</a></h3>
                <ul>
                    @foreach($college->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
