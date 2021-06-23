<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //protected $table = 'nama_tabel'; untuk nama tabel yg beda dengan model
    //protected $primaryKey = 'nama_primarykey'; untuk primerykey yg beda 

	/*public timestampa = false;*/

    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function Category()
    {
    	return $this->belongsTO(Category::class);
    	//kalau beda foeign key nya
    	//return $this->belongsTO(Category::class, 'category_id');

    }

}
