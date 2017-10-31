@extends ('layouts.masterUser')

@section ('landscape1')
<h2>WORDCOIN Argument Landscape 1</h2>

@foreach ($selections as $selection)
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Argument identification number: {{ $selection->id }} | Created by: {{ $selection->creator_id }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Subject: </b><a href="/trade_post/arg/{{ $selection->id }}">{{ $selection->subject }}</a></td>
      </tr>
      <tr>
        <td><b>Owned by:</b> {{ $selection->user->username }}</td>
      </tr>
      <tr>
        <td><b>Key Points: </b>{!! $selection->key_points !!}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><b>No. in Circulation: </b>Φ{{ $selection->value }} | <b>No. of Exchanges:</b> {{ $selection->exchanges }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach

@endsection
