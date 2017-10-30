@extends ('layouts.masterUser')

@section ('singleArg')

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Argument identification number: {{ $arg->id }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Subject: {{ $arg->subject }}</b></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><b>Key Points: </b></td>
      </tr>
      <tr>
        <td> {!! $arg->key_points !!} </td>
      </tr>
      <tr>
        <td><b>Argument: </b></td>
      </tr>
      <tr>
        <td> {!! $arg->argument !!}</td>
      </tr>
      <tr>
        <td><b>Trade Value:</b> Φ{{ $arg->value }}</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
