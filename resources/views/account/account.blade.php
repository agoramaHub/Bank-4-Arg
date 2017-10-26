@extends ('layouts.masterUser')

@section ('accOverview')

@if (Auth::check())
<h1>{{Auth::user()->username}}'s Dashboard</h1>
@endif

@include ('layouts.header')

<div class="container">


@include ('layouts.accBody')

</div>
@endsection
