@extends ('layouts.masterUser')

@section ('personal')


<h1>{{Auth::user()->username}}'s Dashboard</h1>

<section class="row text-center placeholders">
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>No. of Trade Coins</h4>
    <div class="text-muted">{{ $accounts->sum('value') }}</div>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Number of Holdings</h4>
    <span class="text-muted">{{ $accounts->count() }} Arguments</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>WORDCOIN Total</h4>
    <span class="text-muted">Φ{{ $wallet->sum('tot_wc') * 1.618 }}</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Total Exchanges</h4>
    <span class="text-muted">{{ $accounts->sum('exchanges') }}</span>
  </div>
</section>

<div class="container">

  <h2>WORDCOIN Holdings</h2>
  @foreach ($accounts as $account)
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Argument identification number: {{ $account->id }}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><b>Subject: </b><a href="/account/arg/{{ $account->id }}">{{ $account->subject }}</a></td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td><b>Key Points: </b>{!! $account->key_points !!}</td>
        </tr>
        <tr>
          <td></td>
        </tr>
        <tr>
          <td><b>Trade Value: </b>Φ{{ $account->value }} | <b>No. of Exchanges:</b> {{ $account->exchanges }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  @endforeach

</div>

@endsection
