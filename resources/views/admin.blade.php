@extends('layouts.base')

@section('content')
    <h1>Admin panel</h1>
    <a href="{{ route('auth.logout') }}">Logout</a>
@endsection
