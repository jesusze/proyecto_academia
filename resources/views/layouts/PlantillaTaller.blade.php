@extends('layouts.Plantilla')

@section('content')

<div class="content-juzgado">
    <h1>@yield('title')</h1>
    
    <div class="container-juzgado">
        <div class="text-info-juzgado">
            <p>@yield('text-content')</p>
        </div>
    
        <div class="img-info-juzgado">
            <img src="@yield('img-content')">
        </div>
    </div>
</div>

@endsection