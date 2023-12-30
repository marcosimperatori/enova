<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NoticiaModel;

class NoticiasController extends BaseController
{
    private $noticiaModel;

    public function __construct()
    {
        $this->noticiaModel = new NoticiaModel();
    }

    public function index()
    {
        return view('noticias/index');
    }

    public function criar()
    {
        $noticia = new  \App\Entities\NoticiaEntity();
        $data = [
            'noticia' => $noticia
        ];
        return view('noticias/criar', $data);
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
        $noticia->usuario = 1;


        if ($this->noticiaModel->protect(false)->save($noticia)) {

            //captura o id do cliente que acabou de ser inserido no banco de dados
            $retorno['id'] = $this->noticiaModel->getInsertID();
            $NovaNoticia = $this->buscaNoticiaOu404($retorno['id']);
            session()->setFlashdata('sucesso', "A notícia ($NovaNoticia->assunto) foi incluída no sistema");
            $retorno['redirect_url'] = base_url('noticias');

            return $this->response->setJSON($retorno);
        }

        //se chegou até aqui, é porque tem erros de validação
        $retorno['erro'] = "Verifique os aviso de erro e tente novamente";
        $retorno['erros_model'] = $this->noticiaModel->errors();

        return $this->response->setJSON($retorno);
    }

    public function edit($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('home');
        }

        $noticia = $this->buscaNoticiaOu404($id);

        $data = [
            'titulo' => "Editando a notícia",
            'noticia' => $noticia,
        ];
        return view('noticias/editar', $data);
    }

    public function atualizar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $retorno['token'] = csrf_hash();
        $post = $this->request->getPost();
        $noticia = $this->buscaNoticiaOu404($post['id']);
        $noticia->fill($post);

        if ($noticia->hasChanged() == false) {
            $retorno['info'] = "Não houve alteração na notícia!";
            return $this->response->setJSON($retorno);
        }

        if ($this->noticiaModel->protect(false)->save($noticia)) {
            session()->setFlashdata('sucesso', "A notícia: $noticia->assunto foi atualizada");
            $retorno['redirect_url'] = base_url('noticias');
            return $this->response->setJSON($retorno);
        }

        //se chegou até aqui, é porque tem erros de validação
        $retorno['erro'] = "Verifique os aviso de erro e tente novamente";
        $retorno['erros_model'] = $this->noticiaModel->errors();

        return $this->response->setJSON($retorno);
    }

    public function deletar($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('home');
        }

        $noticia = $this->buscaNoticiaOu404($id);
        $data = [
            'noticia' => $noticia
        ];
        return view('noticias/deletar', $data);
    }

    public function confirma_exclusao($enc_id)
    {
        $id = decrypt($enc_id);
        if (!$id) {
            return redirect()->to('home');
        }

        //faz a rotina de exclusão e redireciona para a lista de escritórios
        if (!$this->noticiaModel->delete($id)) {
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

        $atributos = ['noticias.id', 'noticias.assunto', 'noticias.atualizado_em'];
        $noticias = $this->noticiaModel->select($atributos)
            ->orderBy('atualizado_em', 'desc')->findAll();

        $data = [];

        foreach ($noticias as $noticia) {
            $id = encrypt($noticia->id);
            $data[] = [
                'assunto'   => $noticia->assunto,
                'alterado' => date('d/m/Y', strtotime($noticia->atualizado_em)),
                'acoes'     => '<a  href="' . base_url("noticias/editar/$id") . '" title="Editar"><i class="fas fa-edit text-success"></i></a> &nbsp; 
                                <a  href="' . base_url("noticias/deletar/$id") . '" title="Excluir"><i class="fas fa-trash-alt text-danger"></i></a>'
            ];
        }

        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }

    private function buscaNoticiaOu404(int $id = null)
    {
        if (!$id || !$noticia = $this->noticiaModel->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Notícia não encontrado com o ID: $id");
        }

        return $noticia;
    }
}
