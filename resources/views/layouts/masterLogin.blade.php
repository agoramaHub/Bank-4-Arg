<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">

        <title>WORDCOINs Bank of Arguments</title>

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		    <link rel="stylesheet" href="{{ URL::asset('css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
      <!-- Top content -->
      <div class="top-content">

          <div class="inner-bg">
              <div class="container">

                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 text">
                          <h1><strong>WORDCOIN's Bank of Arguments</strong></h1>
                          <div class="description">
                            <p>
                              This is a free responsive <strong>"login and register forms"</strong> template made with Bootstrap.
                              Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>,
                              customize and use it as you like!
                            </p>
                          </div>
                      </div>
                  </div>

        @yield('content')
        @yield('logout')

        @include ('layouts.partsLogin.footer')


    </body>

</html>
