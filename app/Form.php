<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'capital_crit';

   protected $primaryKey = 'id';
   
   protected $fillable = ['modalidad','categoria'];

  public function modalidades()
   {
       return $this->belongsTo('App\Modalidad','modalidad');
   }

   public function categorias()
   {
       return $this->belongsTo('App\Categoria','categoria');
   }
}


