@extends('layout.default')

@section('content')
  <div class="jumbotron">
    <div class="container">
      <h1>Let's gooooo
         @if(Auth::check())
           {{ Auth::user()->username }}
         @endif

      </h1>
    </div>
  </div> <!--/end .jumbotron-->
  <div class="container-fluid">
    <div class="row bigpic">
      <div class="col-xs-12 col-sm-3 col-lg-3 col-xl-3">
        <h2><span class="glyphicon glyphicon-usd income"></span> {{ HTML::link('/income', 'Income') }}</h2>
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 col-xl-3">
        <h2><span class="glyphicon glyphicon-tree-deciduous savings"></span> Savings</h2>
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 col-xl-3">
        <h2><span class="glyphicon glyphicon-remove deductions"></span> Deductions</h2>
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 col-xl-3">
        <h2><span class="glyphicon glyphicon-shopping-cart expenditures"></span> Expenditures</h2>
      </div>
    </div>
  </div> <!--/end .container-->
@stop
