@extends ('layouts.masterUser')

@section ('accOverview')

@if (Auth::check())
<h1>{{Auth::user()->username}}'s Dashboard</h1>
@endif

@include ('layouts.header')

<div class="container">
<h2>WORDCOIN Holdings</h2>

@include ('layouts.accBody')

</div>
@endsection
