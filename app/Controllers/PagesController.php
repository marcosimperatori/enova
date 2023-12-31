<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PagesController extends BaseController
{
    public function publicacoes()
    {
        return view('pages/publicacoes');
    }

    public function departamentos()
    {
        return view('pages/departamentos');
    }

    public function quemSomos()
    {
        return view('pages/quem-somos');
    }

    public function utilitarios()
    {
        return view('pages/utilitarios');
    }
}
