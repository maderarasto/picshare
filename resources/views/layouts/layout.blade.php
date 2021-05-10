@extends('layouts.base')

@section('body')
    <header>
        @include('subs.navigation')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
@endsection
