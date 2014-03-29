<?php

Route::resource('/', 'HomeController', ['only' => ['index']]);

Route::resource('portfolio', 'PortfolioController', ['only' => ['index']]);

Route::resource('contact', 'ContactController', ['only' => ['index', 'store']]);
Route::get('contact/thanks', ['as' => 'contact.thanks', 'uses' => 'ContactController@thanks']);