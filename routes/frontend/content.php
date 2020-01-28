<?php
Route::prefix('frontend')->group(function () {
  Route::resource('content','Frontend\ContentController');
});
