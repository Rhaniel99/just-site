<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalModel extends Model
{
    protected $table = 'postal';
      /**

     * Write code on Method

     *

     * @return response()

     */

     protected $fillable = [

        'titulo', 'conteudo'

    ];
}
