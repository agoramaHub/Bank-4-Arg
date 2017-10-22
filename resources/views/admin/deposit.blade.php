@extends ('layouts.masterUser')

@section ('index')

<div class="container">
<h2>Pending Deposits</h2>


<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Argument by {{ $deposit->user->username }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $deposit->subject }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>{{ $deposit->argument }}</td>
      </tr>
      <tr>
        <td><form method="POST" action="/account/pending/{{ $deposit->id }}"class="form-inline">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <div class="form-group mx-sm-1">
            <input type="number" step=".01"  name="value" class="form-control" id="inputPassword2" placeholder="Enter Value...">
          </div>
          <button type="submit" class="btn btn-primary">Appraise</button>
        </form></td>
      </tr>
      <tr>
        <td>Current Value: Φ0.00</td>
      </tr>
    </tbody>
  </table>
</div>


</div>

@endsection
