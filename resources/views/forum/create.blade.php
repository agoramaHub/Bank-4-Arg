@extends ('layouts.masterUser')

@section ('create')
<div class="container forum-main input">
  <h2>Submit Thread Post</h2>
  <hr>
  <div class="card">
    <div class="card-bloack">


      <form method="POST" action="/notices" name="broadcast" novalidate>
        {{ csrf_field() }}
        <div class="container">

          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
          </div>

            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" placeholder="Create Post Here." class="form-control" required></textarea>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </div>
      </form>


    </div>
  </div>
</div>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection
