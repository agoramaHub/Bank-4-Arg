

@if (Auth::user()->admin)
@foreach ($userAcc as $userAcc)
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Username: {{ $userAcc->username }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Total Argument Holdings: {{ $userAcc->argument }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Total WORDCOIN: ø{{ $userAcc->value }}</td>
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
        <td>{{ $account->argument }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Value: ø{{ $account->value }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endforeach
@endif