<?php
namespace App\Controllers;

use App\Models\CursosModel;
use App\Controllers\BaseController;

class CursosController extends BaseController
{
    public function index()
    {
        $model = new CursosModel();
        $dados['cursos'] = $model->findAll();
        return view('sistema/cursos/index', $dados);
    }

    public function novo()
    {
        return view('sistema/cursos/novo_curso');
    }

    public function inserir()
    {
        $model = new CursosModel();

        $dados = [
            'nome' => $this->request->getPost('nome'),
            'descricao' => $this->request->getPost('descricao'),
            'carga_horaria' => $this->request->getPost('carga_horaria')
        ];

        $model->insert($dados);
        return redirect()->to('/cursos');
    }

    public function editar($id)
    {
        $model = new CursosModel();
        $dados['curso'] = $model->find($id);
        return view('sistema/cursos/editar_cursos', $dados);
    }

    public function atualizar($id)
    {
        $model = new CursosModel();

        $dados = [
            'nome' => $this->request->getPost('nome'),
            'descricao' => $this->request->getPost('descricao'),
            'carga_horaria' => $this->request->getPost('carga_horaria')
        ];

        $model->update($id, $dados);
        return redirect()->to('/cursos');
    }

    public function excluir($id)
    {
        $model = new CursosModel();
        $model->delete($id);
        return redirect()->to('/cursos');
    }
}
