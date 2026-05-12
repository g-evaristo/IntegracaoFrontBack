<?php
namespace App\Controllers;

use App\Models\SalasModel;
use App\Controllers\BaseController;

class SalasController extends BaseController
{
    // LISTAR SALAS
    public function index()
    {
        // Cria instância do model
        $model = new SalasModel();

        // Busca TODOS os registros da tabela
        $dados['salas'] = $model->findAll();

        // Envia os dados para a view
        return view('sistema/salas/index', $dados);
    }

    // ABRIR FORMULÁRIO
    public function novo()
    {
        // Apenas carrega a view
        return view('sistema/salas/nova_sala');
    }

    // INSERIR NO BANCO
    public function inserir()
    {
        $model = new SalasModel();

        // Captura dados do formulário (POST)
        $dados = [
            'nome' => $this->request->getPost('nome'),
            'capacidade' => $this->request->getPost('capacidade'),
            'bloco' => $this->request->getPost('bloco')
        ];

        // Insere no banco
        $model->insert($dados);

        // Redireciona para listagem
        return redirect()->to('/salas');
    }

    // CARREGAR DADOS PARA EDIÇÃO
    public function editar($id)
    {
        $model = new SalasModel();

        // Busca uma sala específica
        $dados['sala'] = $model->find($id);

        return view('sistema/salas/editar_salas', $dados);
    }

    // ATUALIZAR DADOS
    public function atualizar($id)
    {
        $model = new SalasModel();

        $dados = [
            'nome' => $this->request->getPost('nome'),
            'capacidade' => $this->request->getPost('capacidade'),
            'bloco' => $this->request->getPost('bloco')
        ];

        // Atualiza baseado no ID
        $model->update($id, $dados);

        return redirect()->to('/salas');
    }

    // EXCLUIR
    public function excluir($id)
    {
        $model = new SalasModel();

        // Remove registro
        $model->delete($id);

        return redirect()->to('/salas');
    }
}

