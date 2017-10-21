@if (Auth::user()->admin)

<section class="row text-center placeholders">
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Global Circulation</h4>
    <div class="text-muted">ø{{ $allAccounts->sum('value') }}</div>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Global Holdings</h4>
    <span class="text-muted">{{ $allAccounts->count() }} Arguments</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
</section>

@else

<section class="row text-center placeholders">
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>WORDCOIN Total</h4>
    <div class="text-muted">ø{{ $accounts->sum('value') }}</div>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Number of Holdings</h4>
    <span class="text-muted">{{ $accounts->count() }} Arguments</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <div class="col-6 col-sm-3 placeholder">
    <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
</section>
@endif