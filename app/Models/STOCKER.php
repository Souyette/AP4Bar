<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class STOCKER
 * 
 * @property int $ID_PRODUIT
 * @property int $ID_BAR
 * @property int|null $QUANTITESTOCK
 * @property int|null $PRIX
 * 
 * @property BAR $b_a_r
 * @property PRODUIT $p_r_o_d_u_i_t
 *
 * @package App\Models
 */
class STOCKER extends Model
{
	protected $table = 'STOCKER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRODUIT' => 'int',
		'ID_BAR' => 'int',
		'QUANTITESTOCK' => 'int',
		'PRIX' => 'int'
	];

	protected $fillable = [
		'QUANTITESTOCK',
		'PRIX'
	];

	public function b_a_r()
	{
		return $this->belongsTo(BAR::class, 'ID_BAR');
	}

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'ID_PRODUIT');
	}
}
