<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\BitwiseOr;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Jonas',
                'status' => 'não',
                'cpf' => '0',
                'telefone' => '(0) 0000-0000'

            ],
            1 => [
                'nome' => 'james',
                'status' => 'sim',
                'cpf' => '0',
                'ddd' => '11',
            ],
            2 => [
                'nome' => 'james',
                'status' => 'sim',
                'cpf' => '0',
                'ddd' => '32',
                'telefone' => '0000-0000'
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
