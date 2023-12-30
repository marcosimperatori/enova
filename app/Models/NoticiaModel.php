<?php

namespace App\Models;

use CodeIgniter\Model;

class NoticiaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'noticias';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = '\App\Entities\NoticiaEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['exibir', 'assunto', 'descricao', 'usuario'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'assunto'   => 'required|max_length[250]|is_unique[noticias.assunto,id,{$id}]',
        'descricao' => 'required|is_unique[noticias.descricao,id,{$id}]',
    ];

    protected $validationMessages   = [
        'assunto' => [
            'required'   => 'O assunto da notícia é obrigatório',
            'max_length' => 'O assunto deve ter no máximo 250 caracteres',
            'is_unique'  => 'Este assunto já está sendo usado'
        ],
        'descricao' => [
            'required'  => 'A descrição da notícia é obrigatória',
            'is_unique' => 'Esta descrição já está sendo utilizada'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getUltimasNoticias($limit = 6)
    {
        $this->select('id, assunto,descricao,atualizado_em');

        $this->orderBy('atualizado_em', 'DESC');

        return $this->findAll($limit);
    }
}
