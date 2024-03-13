@extends('foundry::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('foundry.name') !!}</p>
@endsection
