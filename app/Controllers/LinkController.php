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

    public function criar()
    {
        $noticia = new  \App\Entities\NoticiaEntity();
        $data = [
            'link' => $noticia
        ];
        return view('links/criar', $data);
    }

    public function cadastrar()
    {
        //garatindo que este método seja chamado apenas via ajax
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        //atualiza o token do formulário
        $retorno['token'] = csrf_hash();

        //recuperando os dados que vieram na requisiçao
        $post = $this->request->getPost();

        //Criando um novo objeto da entidade usuário
        $noticia = new \App\Entities\NoticiaEntity($post);
        $noticia->usuario = session()->get('user')->id;


        if ($this->linkModel->protect(false)->save($noticia)) {

            //captura o id do cliente que acabou de ser inserido no banco de dados
            $retorno['id'] = $this->linkModel->getInsertID();
            $NovoLink = $this->buscaLinkOu404($retorno['id']);
            session()->setFlashdata('sucesso', "O link ($NovoLink->nome_exibicao) foi incluída no sistema");
            $retorno['redirect_url'] = base_url('noticias');

            return $this->response->setJSON($retorno);
        }

        //se chegou até aqui, é porque tem erros de validação
        $retorno['erro'] = "Verifique os aviso de erro e tente novamente";
        $retorno['erros_model'] = $this->linkModel->errors();

        return $this->response->setJSON($retorno);
    }

    public function edit($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('home');
        }

        $noticia = $this->buscaLinkOu404($id);

        $data = [
            'titulo' => "Editando a notícia",
            'noticia' => $noticia,
        ];
        return view('links/editar', $data);
    }

    public function atualizar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $retorno['token'] = csrf_hash();
        $post = $this->request->getPost();
        $noticia = $this->buscaLinkOu404($post['id']);
        $noticia->fill($post);

        if ($noticia->hasChanged() == false) {
            $retorno['info'] = "Não houve alteração na notícia!";
            return $this->response->setJSON($retorno);
        }

        if ($this->linkModel->protect(false)->save($noticia)) {
            session()->setFlashdata('sucesso', "A notícia: $noticia->assunto foi atualizada");
            $retorno['redirect_url'] = base_url('noticias');
            return $this->response->setJSON($retorno);
        }

        //se chegou até aqui, é porque tem erros de validação
        $retorno['erro'] = "Verifique os aviso de erro e tente novamente";
        $retorno['erros_model'] = $this->linkModel->errors();

        return $this->response->setJSON($retorno);
    }

    public function deletar($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('home');
        }

        $link = $this->buscaLinkOu404($id);
        $data = [
            'link' => $link
        ];
        return view('links/deletar', $data);
    }

    public function confirma_exclusao($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('links');
        }

        //faz a rotina de exclusão e redireciona para a lista de escritórios
        if (!$this->linkModel->delete($id)) {
            session()->setFlashdata('warning', "Não foi possível excluir a notícia");
        }
        return redirect()->to('noticias');
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

    private function buscaLinkOu404(int $id = null)
    {
        if (!$id || !$noticia = $this->linkModel->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Link não encontrado com o ID: $id");
        }

        return $noticia;
    }
}
