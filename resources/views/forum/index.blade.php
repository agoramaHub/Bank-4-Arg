@extends ('layouts.masterUser')

@section ('index')

<div class="container forum-main">
<h2>Forum Notices</h2>
  @foreach ($notices as $notice)
<div class="table-responsive">
  <table class="table table-striped">
      <!--Header row-->
    <thead>

      <tr>
        <th><a href="/forum/{{ $notice->id }}" class"">{{ $notice->subject }}</a></th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>{{ $notice->content }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Posted by {{ $notice->user->username }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
  @endforeach
</div>

<div class="container forum-main">
<h2>Most Commented</h2>
<div class="table-responsive">
  <table class="table table-striped">
      <!--Header row-->
    <thead>
      <tr>
        <th>#</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
      </tr>
      <tr>
        <td>1,002</td>
        <td>amet</td>
        <td>consectetur</td>
        <td>adipiscing</td>
        <td>elit</td>
      </tr>

    </tbody>
  </table>
</div>
</div>

<div class="container forum-main">
<h2>Recent Threads</h2>
  @foreach ($forums as $forum)
<div class="table-responsive">
  <table class="table table-striped">
      <!--Header row-->
    <thead>
      <tr>
        <th><a href="/forum/{{ $forum->id }}" class="">{{ $forum->subject}}</a></th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>{{ $forum->content }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Posted by {{ $forum->user->username }}</td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
  @endforeach
</div>
@endsection
