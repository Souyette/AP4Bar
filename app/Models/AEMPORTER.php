<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AEMPORTER
 * 
 * @property int $IDCOMMANDE_HER_1
 * @property int $IDCOMMANDE
 * @property int $ID_USER
 * @property Carbon|null $HEURERETRAIT
 * @property int|null $CODERETRAIT
 * 
 * @property CLIENT $c_l_i_e_n_t
 * @property COMMANDE $c_o_m_m_a_n_d_e
 *
 * @package App\Models
 */
class AEMPORTER extends Model
{
	protected $table = 'AEMPORTER';
	protected $primaryKey = 'IDCOMMANDE_HER_1';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDCOMMANDE_HER_1' => 'int',
		'IDCOMMANDE' => 'int',
		'ID_USER' => 'int',
		'CODERETRAIT' => 'int'
	];

	protected $dates = [
		'HEURERETRAIT'
	];

	protected $fillable = [
		'IDCOMMANDE',
		'ID_USER',
		'HEURERETRAIT',
		'CODERETRAIT'
	];

	public function c_l_i_e_n_t()
	{
		return $this->belongsTo(CLIENT::class, 'ID_USER');
	}

	public function c_o_m_m_a_n_d_e()
	{
		return $this->belongsTo(COMMANDE::class, 'IDCOMMANDE_HER_1');
	}
}
