<?php
namespace App\Models;

use CodeIgniter\Model;

class SalasModel extends Model
{
    // Nome da tabela no banco
    protected $table = 'SALAS';

    // Chave primária
    protected $primaryKey = 'ID';

    // Campos permitidos para inserção/atualização
    protected $allowedFields = [
        'nome',
        'capacidade',
        'bloco'
    ];
}

