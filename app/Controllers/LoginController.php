<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/index');
    }

    public function logar()
    {

        $validated = $this->validate(
            [
                'usuario' => 'required',
                'senha' => 'required'
            ],
            [
                'usuario' => [
                    'required' => 'O nome de usuário é obrigatório',
                ],
                'senha' => [
                    'required' => 'A senha é obrigatória'
                ]
            ]
        );

        if (!$validated) {
            return redirect()->to('administrar')->with('erros', $this->validator->getErrors());
        }

        $user = new UserModel();
        $userFound = $user->select('id,nome,senha')->where('nome', $this->request->getPost('usuario'))->first();

        if (!$userFound) {
            return redirect()->to('administrar')->with('error', 'Usuário ou senha incorretos!');
        }

        $senha = $this->request->getPost('senha');

        if (!password_verify($senha, $userFound->senha)) {
            return redirect()->to('administrar')->with('error', 'Usuário ou senha incorretos!');
        }

        unset($userFound->senha);
        session()->set('user', $userFound);
        return redirect()->to('noticias');
    }

    public function logout()
    {
        session()->remove('user');
        return redirect()->to('/');
        //return view('login/logout');
    }

    public function addUsuario()
    {
        $user = new UserModel();

        $usuario = [
            'nome' => 'Elton',
            'email' => 'elton@gmail.com',
            'senha' => 'EA2024site@'
        ];

        if ($user->save($usuario)) {
            echo "Criado um novo usuário";
        } else {
            echo "Falha ao tentar criar novo usuário";
        }
    }
}
