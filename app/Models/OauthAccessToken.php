<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OauthAccessToken
 * 
 * @property string $id
 * @property int $user_id
 * @property int $client_id
 * @property string $name
 * @property string $scopes
 * @property bool $revoked
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $expires_at
 *
 * @package App\Models
 */
class OauthAccessToken extends Eloquent
{
	public $incrementing = false;

	protected $casts = [
		'user_id' => 'int',
		'client_id' => 'int',
		'revoked' => 'bool'
	];

	protected $dates = [
		'expires_at'
	];

	protected $fillable = [
		'user_id',
		'client_id',
		'name',
		'scopes',
		'revoked',
		'expires_at'
	];
}
