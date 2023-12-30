<?php

namespace App\Controllers;

use App\Models\NoticiaModel;

class Home extends BaseController
{
    private $noticias;

    public function __construct()
    {
        $this->noticias = new NoticiaModel();
    }

    public function index(): string
    {
        $data['ultimas_noticias'] = $this->noticias->getUltimasNoticias(5);

        return view("home/index", $data);
    }
}
