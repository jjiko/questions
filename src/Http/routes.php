<?php
Route::get('ask', function() {
  return Redirect::route('ama');
});
Route::get('ama', ['as' => 'ama', 'uses' => 'PageController@ama']);