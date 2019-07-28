<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserType
 * 
 * @property int $id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class UserType extends Eloquent
{
    const ADMIN = 1;
    const DEFAULT = 2;
    const ADVENTURER = 3;
    const SUPERADVENTURER = 4;

	protected $fillable = [
		'type'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
