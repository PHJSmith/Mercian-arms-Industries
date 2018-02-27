@extends('layouts.app')

@section('main')
<h1>Warbirds</h1>
<br>
<h2>From the darting Falcon fighter to the devastating Osprey strike bomber, MAI warbirds offer cutting edge technology combined with a reliability pilots can trust. </h2>
<br>
<h3>Many types of warbirds are produced by Mercian Arms.</h3>
<br>

<div class="buttonleft"><a href="{{route('strikebombers.index')}}">Strike Bombers</a></div>
<div class="buttonright"><a href="{{route('strikebombers.index')}}">Supremacy Fighters</a></div>
<div class="buttonleft"><a href="{{route('strikebombers.index')}}">Heavy Bombers</a></div>
<div class="buttonright"><a href="{{route('strikebombers.index')}}">Transports</a></div>
<div class="buttonleft"><a href="{{route('strikebombers.index')}}">Gunships</a></div>
<div class="buttonright"><a href="{{route('strikebombers.index')}}">Cargo birds</a></div>
<br>
<br>
<div class="smallprint">Mercian Arms Industries, Kota-II, Kota System, Sector 4, Primary Sector 6</div>
@endsection
