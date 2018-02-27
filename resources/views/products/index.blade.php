@extends('layouts.app')

@section('main')
  <div class="navigation2top">
    <div class="wrap">
      <a href="{{route('smallarms.index')}}">Small Arms</a>
      <a href="{{route('warbirds.index')}}">Warbirds</a>
      <a href="{{route('warships.index')}}">Warships</a>
    </div>
  </div>
  <h1>State of the art technology is at your fingertips.</h1>
  <h2>Reach out and take it.</h2>
  <br>
  <br>
  <p></p>
  <br>
@endsection
