<?php
namespace App\Models;

use CodeIgniter\Model;

/**
 * Model = representa a tabela no banco
 */
class AlunosModel extends Model
{
    protected $table = 'ALUNOS'; // nome da tabela
    protected $primaryKey = 'ID'; // chave primária

    /**
     * Campos permitidos para INSERT/UPDATE
     * Segurança contra inserção indevida
     */
    protected $allowedFields = [
    // colunas na tabela ALUNOS do banco
    'nome',
    'email',
    'telefone',
    'cpf',
    'data_nascimento'
    ];
}

