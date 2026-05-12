<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunosModel;

class AlunosController extends BaseController
{
    public function index()
    {
        // Instancia o model
        $model = new AlunosModel();

        // Busca todos os alunos no banco
        $dados['alunos'] = $model->findAll();

        // Carrega a view e envia os dados
        return view('/sistema/alunos/index', $dados);
    }

    public function novo()
    {
        // Apenas carrega o formulário
        return view('/sistema/alunos/novo_aluno');
    }

    public function inserir()
    {
        // Instancia o model
        $model = new AlunosModel();

        // Pega os dados do formulário
        $dados = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'cpf' => $this->request->getPost('cpf'),
            'data_nascimento' => $this->request->getPost('data_nascimento')
        ];

        // Insere no banco
        $model->insert($dados);

        // Redireciona para a listagem
        return redirect()->to('/alunos');
    }

    public function editar($id)
    {
        // Instancia o model
        $model = new AlunosModel();

        // Busca o aluno pelo ID
        $dados['aluno'] = $model->find($id);

        // Carrega o formulário de edição
        return view('sistema/alunos/editar_alunos', $dados);
    }

    public function atualizar($id)
    {
        // Instancia o model
        $model = new AlunosModel();

        // Pega os dados do formulário
        $dados = [
            'nome' => $this->request->getPost('nome'),
            'email' => $this->request->getPost('email'),
            'telefone' => $this->request->getPost('telefone'),
            'cpf' => $this->request->getPost('cpf'),
            'data_nascimento' => $this->request->getPost('data_nascimento')
        ];

        // Atualiza no banco
        $model->update($id, $dados);

        // Redireciona
        return redirect()->to('/alunos');
    }

    public function excluir($id)
    {
        // Instancia o model
        $model = new AlunosModel();

        // Exclui o aluno pelo ID
        $model->delete($id);

        // Redireciona para a listagem
        return redirect()->to('/alunos');
    }

}
