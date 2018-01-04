<?php

# Listagem de produtos
Route::get('/produtos', 'ProdutoController@lista');

# Detalhes do produto
Route::get(
    '/produtos/mostra/{id}',
    'ProdutoController@mostra'
)->where('id', '[0-9]+');

# Formulário de adição
Route::get('produtos/novo', 'ProdutoController@novo');

# Post do formulário de adição
Route::post('produtos/adiciona', 'ProdutoController@adiciona');

# Remove um produto
Route::get('produtos/remove/{id}', 'ProdutoController@remove')
    ->where('id', '[0-9]+');

# formulário de edição
Route::get('produtos/edicao/{id}', 'ProdutoController@edicao')
    ->where('id', '[0-9]+');

# Post do formulário de edição
Route::post('produtos/edita', 'ProdutoController@edita');

# Lista de produtos em json
Route::get('produtos/json', 'ProdutoController@listaJson');

# Hello World
Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/outra', function () {
    return '<h1>Outra lógica com Laravel</h1>';
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
