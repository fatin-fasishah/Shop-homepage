@extends('layouts.master')

@section('content')
<div class="container px-4 px-lg-5">
    <h2 class="fw-bolder">My Dashboard</h2>
    <p>Hello, {{ auth()->user()->name }}. This page is protected by the <code>auth</code> middleware.</p>
    <p class="text-muted">Email: {{ auth()->user()->email }}</p>
</div>
@endsection