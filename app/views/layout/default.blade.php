<!doctype html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic' rel='stylesheet' type='text/css'>
      {{ HTML::style('//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.2/jquery.mobile.min.css') }}
      {{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css') }}
      {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
      {{ HTML::script('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js') }}
      {{ HTML::style('less/bootstrap.less', array('rel' => 'stylesheet/less')) }}
      {{ HTML::script('js/bootstrap.js') }}
      {{ HTML::script('js/custom.js') }}
      {{ HTML::script('js/less.js') }}

    <head>
    <body>
      <div class="wrapper">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Finance Manager</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <li>{{ HTML::link('/planner/create/', 'Overview') }}</li>
                <li><a href="#">Income</a></li>
                <li><a href="#">Savings</a></li>
                <li><a href="#">Deductions</a></li>
                <li><a href="#">Expenditures</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Information</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid">
              @yield('content')
        </div>
        <footer class="mainfooter">
          @yield('footer')
        </footer>
      </div><!--/end .wrapper-->
    </body>
  </html>
