@extends ('layouts.masterUser')

@section ('create')
<div class="container forum-main input">
  <h2>Deposit an Argument</h2>
  <hr>
  <div class="card">
    <div class="card-bloack">


      <form method="POST" action="/account/deposit">
        {{ csrf_field() }}
        <div class="container">

            <div class="form-group">
              <label for="argument">Argument</label>
              <textarea name="argument" placeholder="Create Argument Here." class="form-control" required></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Deposit</button>
            </div>
        </div>
      </form>


    </div>
  </div>
</div>
@endsection
