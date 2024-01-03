<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class LinksEntity extends Entity
{
    protected $datamap = [];
    protected $dates   = ['criado_em', 'atualizado_em', 'deleted_at'];
    protected $casts   = [];
}
