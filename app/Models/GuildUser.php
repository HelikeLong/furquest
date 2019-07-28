<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class GuildUser
 * 
 * @property int $guild_id
 * @property int $user_id
 * 
 * @property Guild $guild
 * @property User $user
 *
 * @package App\Models
 */
class GuildUser extends Eloquent
{
	protected $table = 'guild_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'guild_id' => 'int',
		'user_id' => 'int'
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
