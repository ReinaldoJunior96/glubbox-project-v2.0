<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Estoque extends Authenticatable
{
    use HasFactory, Notifiable;
    public $primaryKey = 'id_estoque';
    protected $guarded = [];
    protected $hidden = [];
    protected $table = 'tbl_estoque';
    public $timestamps = false;
    /**
     * @var mixed
     */
    private $produto_e;
    private $quantidade_e;
    private $valor_un_e;
    private $estoque_minimo_e;
    private $apresentacao;
    private $concentracao;
    private $forma_farmaceutica;
    private $principio_ativo;
    private $tipo;



}
