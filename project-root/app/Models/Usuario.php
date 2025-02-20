<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario extends Model
{
    
    protected $table            = 'usuarios';
    protected $primaryKey       = 'usuario_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre','email','usuario_pass'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ["beforeInsert"];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ["beforeUpdate"];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function beforeInsert(array $params) {
        $params = $this->passwordHash($params);
        return $params;
    }

    protected function beforeUpdate(array $params) {
        $params = $this->passwordHash($params);
        return $params;
    }

    protected function passwordHash(array $params) {
        if (isset($params['data']['usuario_pass'])) {
        $params['data']['usuario_pass'] = password_hash($params['data']['usuario_pass'], PASSWORD_DEFAULT);
       }
        return $params;
    }
}
