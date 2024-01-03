<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'links';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = '\Entities\LinksEntity';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome_exibicao', 'link', 'categoria'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'atualizado_em';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nome_exibicao' => 'required',
        'link' => 'required|is_unique[links.link,id,{$id}]'
    ];

    protected $validationMessages   = [
        'nome_exibicao' => [
            'required'   => 'O texto do link é obrigatório',
        ],
        'descricao' => [
            'required'  => 'O link é obrigatório',
            'is_unique'  => 'Este link já foi cadastrado'
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
}
