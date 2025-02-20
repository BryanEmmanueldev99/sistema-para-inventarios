<?php

/**
 * REST API CONTROLLER para categoria
 * Por Bryan Emmanuel
 */
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categoria;
use CodeIgniter\HTTP\ResponseInterface;

class CategoriaController extends BaseController
{
    public function index() {
        $modelCategoria = new Categoria();
        $data = $modelCategoria->findAll();
        return $this->response->setJSON($data, 200);
    }

    public function store() {
        $modelCategoria = new Categoria();

        $data = [
            'nombre_categoria' => $this->request->getPost('nombre_categoria'),
        ];

        $modelCategoria->insert($data);

        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '¡La categoria se guardo con exito!'
            ]
        ];
         
        return $this->response->setJSON($response);
    }
}
