@extends ('layouts.masterUser')

@section ('create')
<div class="container forum-main input">
  <h2>Deposit an Argument</h2>
  <hr>
  <div class="card">
    <div class="card-bloack">


      <form method="POST" action="/account/deposit" name="deposit" novalidate>
        {{ csrf_field() }}
        <div class="container">

            <div class="form-group">
              <label for="subject">Argument Subject</label>
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>

              <div class="form-group">
                <label for="content">Key Points</label>
                <textarea name="key_points" placeholder="Create Post Here." class="form-control" required></textarea>
              </div>

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

<script>tinymce.init({ selector:'textarea' });</script>
@endsection
