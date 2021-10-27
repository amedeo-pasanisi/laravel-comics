@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <a href="/">Homepage</a>
    <h2>Comics list</h2>
    @dump($comics)
@endsection