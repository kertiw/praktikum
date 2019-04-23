<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'tb_datadiri';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama','alamat'];

}