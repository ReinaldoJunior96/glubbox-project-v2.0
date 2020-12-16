<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Ordem extends Authenticatable
{
    use HasFactory, Notifiable;


    public $primaryKey = 'id_ordem';
    protected $guarded = [];
    protected $hidden = [];
    protected $table = 'tbl_ordem_compra';

    /**
     * @var mixed
     */
    public $nome_f;
    public $data_c;
    public $id_fk_nf;
}
