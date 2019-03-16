<?php
Route::get('/{any}', function(){
    return view('top');
})->where('any','.*');
