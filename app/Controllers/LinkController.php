<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LinkModel;

class LinkController extends BaseController
{
    private $linkModel;

    public function __construct()
    {
        $this->linkModel = new LinkModel();
    }

    public function index()
    {
        return view('links/index');
    }

    public function getAll()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = ['links.id', 'links.nome_exibicao', 'links.link'];
        $links = $this->linkModel->select($atributos)
            ->orderBy('nome_exibicao', 'asc')->findAll();

        $data = [];

        foreach ($links as $link) {
            $id = encrypt($link->id);
            $data[] = [
                'nome'  => $link->nome_exibicao,
                'link'  => '<a href="' . $link->link . '" target="_blank">' . $link->link . ' </a>',
                'acoes' => '<a  href="' . base_url("links/editar/$id") . '" title="Editar"><i class="fas fa-edit text-success"></i></a> &nbsp; 
                            <a  href="' . base_url("links/deletar/$id") . '" title="Excluir"><i class="fas fa-trash-alt text-danger"></i></a>'
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }
}
