<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      @if (Auth::user()->admin)
        <a class="nav-link active" href="/account">All Accounts Overview <span class="sr-only">(current)</span></a>
      @else
        <a class="nav-link active" href="/account">Account Overview <span class="sr-only">(current)</span></a>
      @endif
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/trade_post/1">Argument Landscape 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/trade_post/2">Argument Landscape 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/account/deposit">Deposit Argument</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/notices">Notices</a>
    </li>
  </ul>

  @if (Auth::user()->admin)
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link" href="/account/personal">Personal Holdings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/account/pending">Pending Deposits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/notices/create">Broadcast Notices</a>
      </li>
    </ul>
  @endif

</nav>
