@extends('layouts.app')

@section('content')
    <div class="jumbroton jumbroton-fluid">
        <div class="container">
            <h1 class="display-4">Halaman rumah</h1>
            <p class="lead">INI Halaman Rumahku WOII</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection