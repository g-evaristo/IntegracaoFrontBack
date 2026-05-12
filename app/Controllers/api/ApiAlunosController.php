<?php
namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

/**
 * Controller API
 * Retorna JSON ao invés de HTML
 */
class AlunosController extends ResourceController
{
    protected $modelName = 'App\\Models\\AlunosModel';
    protected $format = 'json';

    public function index()
    {
        // Busca todos os alunos
        $dados = $this->model->findAll();

        /**
         * 🧠 respond():
         * Converte automaticamente para JSON
         */
        return $this->respond($dados);
    }

    public function show($id = null)
    {
        // Busca um registro específico
        $dados = $this->model->find($id);

        return $this->respond($dados);
    }
}
