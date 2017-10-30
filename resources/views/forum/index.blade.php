@extends ('layouts.masterUser')

@section ('index')

<div class="container forum-main">
<h2>Notices</h2>
  @foreach ($notices as $notice)
<div class="table-responsive">
  <table class="table table-striped">
      <!--Header row-->
    <thead>

      <tr>
        <th><a href="/notices/{{ $notice->id }}" class"">{{ $notice->subject }}</a></th>
      </tr>
    </thead>
      <!--content rows-->
    <tbody>
      <tr>
        <td>{!! $notice->content !!}</td>
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

@endsection
