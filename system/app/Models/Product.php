<?php  

namespace App\Models;

use App\models\Traits\Attributes\ProdukAttributes;
use App\models\Traits\Relations\ProdukRelationship;
use Illuminate\Support\Str;

class Product extends  Model {

  use ProdukAttributes, ProdukRelationship;

  protected $table = "product";
  protected $primaryKey = 'uuid';
  public $incrementing = false;

  protected $casts = [
    'created_at' => 'datetime',
    'berat' => 'decimal:2',
  ];

  protected static function boot()
  {
    parent::boot();

    static::creating(function($item){
      $item->uuid = (string) Str::uuid();
    });
  }

}