<?php

Route::get('/produtos', 'ProdutoController@lista');
Route::get(
    '/produtos/mostra/{id}',
    'ProdutoController@mostra'
)->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1>';
});
Route::get('/outra', function () {
    return '<h1>Outra lógica com Laravel</h1>';
});
