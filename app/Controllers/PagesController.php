<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticiaModel;

class PagesController extends BaseController
{
    private $noticias;

    public function __construct()
    {
        $this->noticias = new NoticiaModel();
    }

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

    public function getAll()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = ['noticias.id', 'noticias.assunto', 'noticias.descricao', 'noticias.atualizado_em'];
        $noticias = $this->noticias->select($atributos)
            ->orderBy('atualizado_em', 'DESC')->findAll();

        $data = [];

        foreach ($noticias as $noticia) {
            $id = encrypt($noticia->id);
            $descricao = mb_substr($noticia->descricao, 0, 140);

            $data[] = [
                'assunto'  => '<a  href="' . base_url("publicacao/$id") . '" title="Ler notícia" style="font: #0077b6;"><i class="fas fa-book-reader"></i>&nbsp;' .  $noticia->assunto . '</a>',
                'descricao' => $descricao . (mb_strlen($noticia->descricao) > 140 ? '...' : '')
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }
}
