@extends ('layouts.masterUser')

@section ('index')

<div class="container">
<h2>Pending Deposits</h2>

@foreach ($pendings as $pending)

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Argument by {{ $pending->user->username }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $pending->subject }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>{!! $pending->key_points !!}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Current Value: Φ0.00 | <a href="/account/pending/{{ $pending->id }}" class"">Appriase</a></td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach

</div>

@endsection
