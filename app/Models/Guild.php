<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Guild
 * 
 * @property int $id
 * @property string $name
 * @property string $flag
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Guild extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name',
		'flag'
	];

	public function users()
	{
		return $this->belongsToMany(User::class, 'logs_guild_user')
					->withPivot('id');
	}
}
