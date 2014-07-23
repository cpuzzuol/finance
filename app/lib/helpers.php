<?php

/*
|--------------------------------------------------------------------------
| HTML MACROS (by Chris)
|--------------------------------------------------------------------------
|
| You'd like to extend the HTML facade with additional functionality.
| HTML::macro() allows you to extend the HTML facade with your own methods.
|
| First you register a macro, then later you can access the macro as you would any of the HTML methods.
|
*/

HTML::macro('userupdate', function($updateType){
  switch($updateType){
    case "success":
      return '<p class="bg-success">Your information has been updated.</p>';
      break;
    case "errors":
      return '<p class="bg-danger">Please fix the errors before continuing.</p>';
      break;
    default:
      return '<p class="bg-default">Uhhhh what just happened?</p>';
  };
});
