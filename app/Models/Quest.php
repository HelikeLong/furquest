<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Quest
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $quest_routes
 * @property \Illuminate\Database\Eloquent\Collection $steps
 * @property \Illuminate\Database\Eloquent\Collection $tips
 *
 * @package App\Models
 */
class Quest extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'name',
		'image'
	];

	public function quest_routes()
	{
		return $this->hasMany(QuestRoute::class);
	}

	public function steps()
	{
		return $this->hasMany(Step::class);
	}

	public function tips()
	{
		return $this->hasMany(Tip::class);
	}
}
