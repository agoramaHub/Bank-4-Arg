@extends ('layouts.masterLogin')

@section ('content')


            <div class="row">
                <div class="col-sm-5">

                  <div class="form-box">
                    <div class="form-top">
                      <div class="form-top-left">
                        <h3>Login into WORDCOIN Account</h3>
                          <p>Enter username and password to log on:</p>
                      </div>
                      <div class="form-top-right">
                        <i class="fa fa-key"></i>
                      </div>
                      </div>
                      <div class="form-bottom">


                    <form role="form" action="/login" method="POST" class="login-form">
                      {{ csrf_field() }}
                      <div class="form-group">

                        <label class="sr-only" for="email">Email</label>
                          <input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username" required>
                        </div>

                        <div class="form-group">
                          <label class="sr-only" for="password">Password</label>
                          <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                        </div>
                        <button type="submit" class="btn">Sign in!</button>
                    </form>


                  </div>
                </div>



                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                  <div class="form-box">
                    <div class="form-top">
                      <div class="form-top-left">
                        <h3>Sign up for a new WORDCOIN Account</h3>
                          <p>Fill in the form below to get instant access:</p>
                      </div>
                      <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                      </div>
                      </div>
                      <div class="form-bottom">


                    <form role="form" method="POST" action="/register" class="registration-form">
                      {{ csrf_field() }}

                      <div class="form-group">
                        <label class="sr-only" for="username">Username</label>
                          <input type="text" name="username" placeholder="Username..." class="form-first-name form-control" id="form-first-name" required>
                        </div>

                        <div class="form-group">
                          <label class="sr-only" for="email">Email</label>
                          <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input id="password" type="password" placeholder="Password..." class="form-email form-control" name="password" required>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="confirm password">Confirm Password</label>
                            <input id="password_confirmation" type="password" placeholder="Confirm Password..." class="form-email form-control" name="password_confirmation" required>

                        </div>

                        <button type="submit" class="btn">Sign me up!</button>

                        <div class="form-groups">

                        @include ('layouts.errors')

                        </div>

                    </form>
                  </div>
                  </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection
