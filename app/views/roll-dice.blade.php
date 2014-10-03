@extends('layouts.master')

@section('content')
    <p>You guessed: {{{ $guess }}}</p>
    <p>The number was: {{{ $randomNumber }}}</p>
    <p>{{{ $match }}}</p>
@stop