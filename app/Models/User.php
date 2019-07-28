<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property int $user_type_id
 * @property string $social_name
 * @property string $name
 * @property string $species
 * @property string $photo
 * @property string $bio
 * @property string $phone
 * @property int $phone_show
 * @property string $document
 * @property string $document_type
 * @property string $email
 * @property string $password
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property UserType $user_type
 * @property \Illuminate\Database\Eloquent\Collection $guilds
 * @property \Illuminate\Database\Eloquent\Collection $user_contacts
 * @property \Illuminate\Database\Eloquent\Collection $user_quests
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use HasApiTokens, Notifiable, \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'user_type_id' => 'int',
		'phone_show' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'user_type_id',
		'social_name',
		'name',
		'species',
		'photo',
		'bio',
		'phone',
		'phone_show',
		'document',
		'document_type',
		'email',
		'password'
	];

	public function user_type()
	{
		return $this->belongsTo(UserType::class);
	}

	public function guilds()
	{
		return $this->belongsToMany(Guild::class, 'logs_guild_user')
					->withPivot('id');
	}

	public function user_contacts()
	{
		return $this->hasMany(UserContact::class);
	}

	public function user_quests()
	{
		return $this->hasMany(UserQuest::class);
	}
}
