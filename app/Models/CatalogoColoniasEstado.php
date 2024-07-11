<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoColoniasEstado extends Model
{
    use HasFactory;

     /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql2';

    /**
     * The name table.
     *
     * @var string[]
     */
    protected $table = 'catalogo_colonias_estado';
  
}
