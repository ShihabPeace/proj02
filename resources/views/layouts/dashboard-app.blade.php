@extends('layouts.app')

@section('content')

   @yield('dashboard-content')

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@show