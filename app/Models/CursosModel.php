<?php
namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model
{
    protected $table = 'CURSOS';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['nome','descricao','carga_horaria'];
}
