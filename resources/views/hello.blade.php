
@extends('layouts.main')

@section('content')
<h1>Hello {{ $name }}</h1>

<p>Sedang belajar laravel: </p>

<ol>
    @foreach ($listName as $name)
        <li>{{ $name }}</li>
    @endforeach
</ol>

@if ($status == 'success')
    Berjaya
@else
    Gagal
@endif

@endsection
