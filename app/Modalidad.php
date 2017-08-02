<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Modalidad extends Model

{

  protected $table = 'modalidad';
  protected $primaryKey = 'id_modalidad';
  protected $fillable = ['modalidad'];

    public function forms()
    {

   		return $this->hasMany('App\Form','modalidad');
    }

}
