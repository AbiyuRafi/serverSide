@extends('layouts.apps')

@section('content')


<form action="{{ route('store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="submit" value="Submit">
</form>