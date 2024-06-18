@extends('layouts.app')
 
@section('content')
    <h1>{{ $student->studfirstname }} {{ $student->studlastname }}</h1>
    @if ($student->program)
        <p>Program: {{ $student->program->progfullname }}</p>
    @else
        <p>Program: Not specified</p>
    @endif
    @if ($student->college)
        <p>College: {{ $student->college->collfullname }}</p>
    @else
        <p>College: Not specified</p>
    @endif
    <p>Year: {{ $student->studyear }}</p>
@endsection
