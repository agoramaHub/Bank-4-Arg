@extends ('layouts.masterUser')

@section ('thread')
<!---initial Posting--->
<div class="container forum-main">
<h2>Sub: {{ $forum->subject }}</h2>
<div class="table-responsive">
  <table class="table table-striped">
      <!--Header row-->
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>{!! $forum->content !!}</td>
      </tr>
      <tr>
        <th></th>
      </tr>
      <tr>
        <td>Posted by {{ $forum->user->username }}</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<!---/initial Posting--->

<!---Comments Posting--->
<div class="container forum-main comment">
<div class="table-responsive">
  <table class="table table-striped">

    @foreach ( $forum->comments as $comment )
      <!--Header row-->
    <thead>
      <tr>
        <th>RE: {{$forum->subject}}</th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>{!! $comment->body !!}</td>
      </tr>
      <tr>
        <th></th>
      </tr>
      <tr>
        <td>Posted by {{ $comment->user->username }} </td>
      </tr>
    </tbody>
    @endforeach

  </table>
</div>
</div>
<!---/Comments Posting--->

<div class="container forum-main input">
  <div class="card">
    <div class="card-bloack">
      <form method="POST" action="/notices/{{ $forum->id }}/comments" name="comments" novalidate>
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
              <label for="">Comment reply</label>
              <textarea name="body" placeholder="Please comment here." class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>tinymce.init({ selector:'textarea' });</script>
@endsection
