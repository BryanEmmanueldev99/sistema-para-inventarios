<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarios = new Usuario();
        $listarUsuarios = $usuarios->orderBy('usuario_id', 'DESC')->findAll();
        return view('admin/usuarios/index', compact('listarUsuarios'));
    }

    public function create() {
        return view('/admin/usuarios/create');
    }

    public function store() {
        $usuarioModel = new Usuario();
        $insertData = [
            'nombre' => $this->request->getVar('nombre'),
            'email' => $this->request->getVar('email'),
            'usuario_pass' => $this->request->getVar('usuario_pass'),
        ];

        $usuarioModel->insert($insertData);
        //return $this->response->redirect(site_url('/usuarios'));
        return redirect()->to(site_url('/usuarios'))->with('success', 'El usuario se registro exitosamente.');
    }

    public function edit($id = null) {
        $usuarioModel = new Usuario();
        $usuario = $usuarioModel->where('usuario_id', $id)->first();
        return view('admin/usuarios/edit', compact('usuario'));
    }

    public function update($id = null){
        $usuarioModel = new Usuario();
        $usuarioModel->where('usuario_id', $id);
        $user_pass = $this->request->getVar('usuario_pass');
    
        if($user_pass !== ''):
            $updateData = [
                'nombre' => $this->request->getVar('nombre'),
                'email' => $this->request->getVar('email'),
                'usuario_pass' => $user_pass,
            ];
        else:
            $updateData = [
                'nombre' => $this->request->getVar('nombre'),
                'email' => $this->request->getVar('email'),
            ];
        endif;

        $usuarioModel->update($id, $updateData);
        return redirect()->to(site_url('/usuarios'))->with('success', 'El usuario se actualizo exitosamente.');
    }


    public function destroy($id = null) {
        $usuarioModel = new Usuario();
        $usuarioModel->where('usuario_id', $id)->delete();
        return redirect()->to(site_url('/usuarios'))->with('success', 'Usuario borrado con exito.');
    }


    /**PENDIENTE METODO DELETE */
}
