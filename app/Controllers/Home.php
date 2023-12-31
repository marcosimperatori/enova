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
        $data['ultimas_noticias'] = $this->noticias->getUltimasNoticias(6);

        foreach ($data['ultimas_noticias'] as &$noticia) {
            $noticia->resumo = substr($noticia->descricao, 0, 150) . '...';
            $noticia->codigo = encrypt($noticia->id);
        }

        return view("home/index", $data);
    }

    public function getPublicacao($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('/');
        }

        $publicacao = $this->noticias->select('assunto,descricao,criado_em,atualizado_em')
            ->where('id', $id)->first();

        $data = [
            'publicacao' => $publicacao
        ];

        return view('home/ler', $data);
    }
}
