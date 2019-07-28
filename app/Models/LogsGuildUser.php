<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class LogsGuildUser
 * 
 * @property int $id
 * @property int $guild_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * 
 * @property Guild $guild
 * @property User $user
 *
 * @package App\Models
 */
class LogsGuildUser extends Eloquent
{
	protected $table = 'logs_guild_user';
	public $timestamps = false;

	protected $casts = [
		'guild_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'guild_id',
		'user_id'
	];

	public function guild()
	{
		return $this->belongsTo(Guild::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
