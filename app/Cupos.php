<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Cupos extends Model

{

  protected $table = 'cupos';
  protected $primaryKey = 'id';
  protected $fillable = ['id','id_modalidad','id_categoria','cupos'];

}
