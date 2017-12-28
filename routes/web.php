<?php

# Listagem de produtos
Route::get('/produtos', 'ProdutoController@lista');

# Detalhes do produto
Route::get(
    '/produtos/mostra/{id}',
    'ProdutoController@mostra'
)->where('id', '[0-9]+');

# Formulário de adição
Route::get('/produtos/novo', 'ProdutoController@novo');

# Post do formulário de adição
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

# Lista de produtos em json
Route::get('/produtos/json', 'ProdutoController@listaJson');

# Hello World
Route::get('/', function () {
    return '<h1>Primeira lógica com Laravel</h1>';
});

Route::get('/outra', function () {
    return '<h1>Outra lógica com Laravel</h1>';
});
