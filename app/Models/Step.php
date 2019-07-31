<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Step
 * 
 * @property int $id
 * @property int $quest_id
 * @property string $name
 * @property string $qrcode
 * @property string $content
 * @property string $lat
 * @property string $long
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property Quest $quest
 * @property \Illuminate\Database\Eloquent\Collection $quests
 * @property \Illuminate\Database\Eloquent\Collection $quest_routes
 * @property \Illuminate\Database\Eloquent\Collection $step_rewards
 * @property \Illuminate\Database\Eloquent\Collection $tips
 * @property \Illuminate\Database\Eloquent\Collection $user_quests
 *
 * @package App\Models
 */
class Step extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'quest_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'quest_id',
		'name',
		'qrcode',
		'content',
		'lat',
		'long',
		'status'
	];

	public function quest()
	{
		return $this->belongsTo(Quest::class);
	}

	public function quests()
	{
		return $this->belongsToMany(Quest::class, 'quest_routes_steps', 'step_dest_id')
					->withPivot('id', 'quest_route_id', 'step_origin_id', 'deleted_at')
					->withTimestamps();
	}

	public function quest_routes()
	{
		return $this->belongsToMany(QuestRoute::class, 'quest_routes_steps', 'step_dest_id')
					->withPivot('id', 'quest_id', 'step_origin_id', 'deleted_at')
					->withTimestamps();
	}

	public function step_rewards()
	{
		return $this->hasMany(StepReward::class, 'steps_id');
	}

	public function tips()
	{
		return $this->hasMany(Tip::class);
	}

	public function user_quests()
	{
		return $this->belongsToMany(UserQuest::class, 'user_quest_step')
					->withPivot('id', 'status', 'deleted_at')
					->withTimestamps();
	}
}
