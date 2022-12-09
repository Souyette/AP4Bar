<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BOISSON
 * 
 * @property int $ID_PRODUIT
 * @property bool|null $ESTALCOOLISE
 * @property int|null $DEGREALCOOL
 * @property int|null $VOLUME
 * 
 * @property PRODUIT $p_r_o_d_u_i_t
 *
 * @package App\Models
 */
class BOISSON extends Model
{
	protected $table = 'BOISSON';
	protected $primaryKey = 'ID_PRODUIT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRODUIT' => 'int',
		'ESTALCOOLISE' => 'bool',
		'DEGREALCOOL' => 'int',
		'VOLUME' => 'int'
	];

	protected $fillable = [
		'ESTALCOOLISE',
		'DEGREALCOOL',
		'VOLUME'
	];

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'ID_PRODUIT');
	}
}
