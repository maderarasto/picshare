@extends('layouts.base')

@section('body')
    <header>
        @include('subs.navigation')
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>

    </footer>
@endsection
