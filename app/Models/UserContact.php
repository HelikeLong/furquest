<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserContact
 * 
 * @property int $id
 * @property int $user_id
 * @property int $contacts_types_id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property ContactsType $contacts_type
 * @property User $user
 *
 * @package App\Models
 */
class UserContact extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'user_id' => 'int',
		'contacts_types_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'contacts_types_id',
		'value'
	];

	public function contacts_type()
	{
		return $this->belongsTo(ContactsType::class, 'contacts_types_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
