

@if (Auth::user()->admin)
@foreach ($usersAcc as $userAcc)
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username: </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Argument Holdings: {{ $userAcc->count() }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Total WORDCOIN: Φ{{ $userAcc->sum('tot_wc') * 1.618 }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach
@else
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
