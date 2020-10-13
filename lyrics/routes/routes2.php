<?php

Route::get("dashboard", "Admin\DashboardController@index");
Route::get("dashboard/lyrics", "Admin\LyricsController@index");
Route::get("dashboard/posts", "Admin\PostsController@index");
Route::get("dashboard/pages", "Admin\PagesController@index");


Route::get("dashboard/addartist", "Admin\ArtistsController@create");

//genre
Route::get("dashboard/genres", "Admin\GenresController@index")->name('dashboard.genres');//genreview
Route::get("dashboard/addgenre", "Admin\GenresController@create");//addgenre
Route::post("dashboard/savegenre", "Admin\GenresController@store")->name('dashboard.savegenre');//savegenre
Route::get("dashboard/editgenre/{slug}", "Admin\GenresController@edit")->name('dashboard.editgenre');//genresedit
Route::post("dashboard/updategenre/{slug}", "Admin\GenresController@update")->name('dashboard.updategenre');//genresupdate

//posts
Route::get("dashboard/posts", "Admin\PostsController@index")->name('dashboard.posts');//postsview
Route::get("dashboard/addpost", "Admin\PostsController@create");//addpost
Route::get("dashboard/editpost/{slug}", "Admin\PostsController@edit")->name('dashboard.editpost');//postsedit
Route::post("dashboard/updatepost/{slug}", "Admin\PostsController@update")->name('dashboard.updatepost');//postsupdate
Route::post("dashboard/savepost", "Admin\PostsController@store")->name('dashboard.savepost');//postssave
//--posts
Route::post("dashboard/saveartist", "Admin\ArtistsController@store")->name('dashboard.saveartist');

//pages
Route::get("dashboard/pages", "Admin\PagesController@index")->name('dashboard.pages');//pagesview
Route::get("dashboard/addpage", "Admin\PagesController@create");//addpost
Route::get("dashboard/editpage/{slug}", "Admin\PagesController@edit")->name('dashboard.editpage');//pagesedit
Route::post("dashboard/updatepage/{slug}", "Admin\PagesController@update")->name('dashboard.updatepage');//pagesupdate
Route::post("dashboard/savepage", "Admin\PagesController@store")->name('dashboard.savepage');//pagessave
//--pages
Route::post("dashboard/saveartist", "Admin\ArtistsController@store")->name('dashboard.saveartist');



