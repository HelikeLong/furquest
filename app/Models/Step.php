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
 * @property string $resolution
 * @property int $resolution_count
 * @property string $content
 * @property string $lat
 * @property string $long
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property Quest $quest
 * @property \Illuminate\Database\Eloquent\Collection $quest_routes_step_dest
 * @property \Illuminate\Database\Eloquent\Collection $quest_routes_step_origin
 * @property \Illuminate\Database\Eloquent\Collection $step_rewards
 * @property \Illuminate\Database\Eloquent\Collection $tips
 * @property \Illuminate\Database\Eloquent\Collection $user_quest_step
 *
 * @package App\Models
 */
class Step extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'quest_id' => 'int',
        'resolution_count' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'quest_id',
		'name',
		'resolution',
        'resolution_count',
		'content',
		'lat',
		'long',
		'status'
	];

	public function quest()
	{
		return $this->belongsTo(Quest::class);
	}

	public function quest_routes_step_dest()
	{
		return $this->belongsToMany(QuestRoutesStep::class, 'quest_routes_steps', 'step_dest_id');
	}

	public function quest_routes_step_origin()
	{
        return $this->belongsToMany(QuestRoutesStep::class, 'quest_routes_steps', 'step_origin_id');
	}

	public function step_rewards()
	{
		return $this->hasMany(StepReward::class);
	}

	public function tips()
	{
		return $this->hasMany(Tip::class);
	}

	public function user_quest_step()
	{
		return $this->belongsToMany(UserQuestStep::class);
	}
}
