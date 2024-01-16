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
        $data['ultimas_noticias'] = $this->noticias->getUltimasNoticias();

        foreach ($data['ultimas_noticias'] as $noticia) {
            $descricao = mb_substr($noticia->descricao, 0, 140);
            $noticia->resumo = $descricao . (mb_strlen($noticia->descricao) > 140 ? '...' : '');
            $noticia->codigo = encrypt($noticia->id);

            $noticia->atualizado = date('d/m/Y H:i:s', strtotime($noticia->atualizado_em)); //->humanize();
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
