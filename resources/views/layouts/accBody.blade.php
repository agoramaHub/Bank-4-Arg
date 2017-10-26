
@if (Auth::user()->admin)
<h2>WORDCOIN Overview</h2>
@foreach ($usersAcc as $userAcc)
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username: {{ $userAcc->username }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Argument Holdings: {{ $userAcc->cnt }}</d>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Total WORDCOIN: Φ{{ $userAcc->tot_wc * 1.618 }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach
@else
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
        <td><b>Key Points: </b>{{ $account->key_points }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><b>Trade Value: </b>Φ{{ $account->value }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach
@endif
