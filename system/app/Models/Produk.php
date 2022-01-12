<?php 

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class produk extends Model{

	use ProdukAttributes, ProdukRelations;

	protected $table = 'produk';

	protected $dates = ['created_at'];

	protected $casts = [
		'created_at' => 'datetime',
		'harga' => 'decimal:2'
	];

}