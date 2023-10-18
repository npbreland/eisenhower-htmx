@extends('layouts.app')
@section('content')
  {{-- {{ dd(session()->all()) }} --}}
  @if (auth()->check())
    <a href="/logout">Log out</a>
  @else
    <a href="/login">Log in</a>
    <a href="/register">Register</a>
  @endif
  @include('partials.matrix', compact('tasks'))
@endsection
