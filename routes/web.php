<?php

use App\Models\Servico;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $meuPrimeiroServico = new Servico;
    $meuPrimeiroServico->nome = "Pintura";
    $meuPrimeiroServico->telefone = "(11) 9002-8922";
    $meuPrimeiroServico->origem = "Telefone Pessoal";
    $meuPrimeiroServico->data = "2023-03-14";
    $meuPrimeiroServico->observacao = "Não há nenhuma observação.";
    $meuPrimeiroServico->save();

    return view('index');
});
