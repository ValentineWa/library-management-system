<?php
Route::get("dashboard", "Admin\DashboardController@index");
Route::get("dashboard/lyrics", "Admin\LyricsController@index");
Route::get("dashboard/artists", "Admin\ArtistsController@index")->name('dashboard.artists');
//Route::get("dashboard/posts", "Admin\PostsController@index")->name('dashboard.posts');
Route::get("dashboard/genres", "Admin\GenresController@index");
Route::get("dashboard/posts", "Admin\PostsController@index");
Route::get("dashboard/albums", "Admin\AlbumsController@index");
Route::get("dashboard/addalbum", "Admin\AddAlbumController@index");
Route::get("dashboard/addpage", "Admin\AddPageController@index");