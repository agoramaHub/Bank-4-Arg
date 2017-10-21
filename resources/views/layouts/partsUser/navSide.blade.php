<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="/account">Account Overview <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/account/deposit">Deposit</a>
    </li>
      @if (Auth::user()->admin)
    <li class="nav-item">
      <a class="nav-link" href="#">Trade</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/account/pending">Pending Deposits</a>
    </li>
    @endif
  </ul>

  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a class="nav-link" href="/forum">Community Forum</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/forum/create">Create Post</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Messages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Settings</a>
    </li>
  </ul>

</nav>
