@extends ('layouts.masterUser')

@section ('singleTrade')

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Argument identification number: {{ $arg->id }} | Created by: {{ $arg->creator_id }}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><b>Subject: {{ $arg->subject }}</b></td>
      </tr>
      <tr>
        <td><b>Owned by:</b> {{ $arg->user->username }}</td>
      </tr>
      <tr>
        <td><b>Key Points: </b></td>
      </tr>
      <tr>
        <td> {!! $arg->key_points !!} </td>
      </tr>
      <tr>
        <td><b>Argument: </b>Please make a trade to view the full content of this argument. Thank you!</td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><b>No. in Circulation:</b> Φ{{ $arg->value }}| <b>No. of Exchanges:</b> {{ $arg->exchanges }}</td>
      </tr>
      <tr>
        <td>

                <div class="form-group">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Trade For</button>
                </div>

                <!--- Hidden Modal --->
                <div class="modal fade bd-example-modal-lg" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content container accounts">
                        <!--- Beginning of own accounts --->

                        <h2>WORDCOIN Holdings</h2>
                        @foreach ($accounts as $account)
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th><b>Argument identification number: </b>{{ $account->id }}</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><b>Subject: </b>{{ $account->subject }}</td>
                              </tr>
                              <tr>
                                <td><b>Created by:</b> {{ $account->creator_id }}</td>
                              </tr>
                              <tr>
                                <td><b>Key Points: </b>{!! $account->key_points !!}</td>
                              </tr>
                              <tr>
                                <td><b>No. of Exchanges:</b> {{ $account->exchanges }}</td>
                              </tr>
                              <tr>
                                <td>

                                    <form method="POST" action="/trade_post" >
                                      {{ csrf_field() }}
                                          <div class="form-group">
                                            <input type="hidden" name="for_id" value="{{ $arg->id }}" />
                                            <input type="hidden" name="with_id" value="{{ $account->id }}" />
                                            <button type="submit" class="btn btn-primary">Trade With</button>
                                          </div>
                                    </form>

                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        @endforeach

                        <!--- /End of own accounts --->
                      </div>
                  </div>
               </div>
               <!--- /Hidden Modal --->
        </td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
