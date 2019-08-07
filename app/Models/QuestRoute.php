<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestRoute
 * 
 * @property int $id
 * @property int $quest_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property Quest $quest
 * @property \Illuminate\Database\Eloquent\Collection $quest_routes_steps
 * @property \Illuminate\Database\Eloquent\Collection $user_quests
 *
 * @package App\Models
 */
class QuestRoute extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'quest_id' => 'int'
	];

	protected $fillable = [
		'quest_id'
	];

	public function quest()
	{
		return $this->belongsTo(Quest::class);
	}

	public function quest_routes_steps()
	{
		return $this->hasMany(QuestRoutesStep::class);
	}

	public function user_quests()
	{
		return $this->hasMany(UserQuest::class);
	}
}
