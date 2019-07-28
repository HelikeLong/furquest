<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContactsType
 * 
 * @property int $id
 * @property string $type
 * @property string $icon
 * @property string $mask
 * 
 * @property \Illuminate\Database\Eloquent\Collection $user_contacts
 *
 * @package App\Models
 */
class ContactsType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'type',
		'icon',
		'mask'
	];

	public function user_contacts()
	{
		return $this->hasMany(UserContact::class, 'contacts_types_id');
	}
}
