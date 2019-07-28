<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserQuest
 * 
 * @property int $id
 * @property int $user_id
 * @property int $quest_route_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property QuestRoute $quest_route
 * @property User $user
 * @property \Illuminate\Database\Eloquent\Collection $steps
 * @property \Illuminate\Database\Eloquent\Collection $tips
 *
 * @package App\Models
 */
class UserQuest extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'user_quest';

	protected $casts = [
		'user_id' => 'int',
		'quest_route_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'quest_route_id'
	];

	public function quest_route()
	{
		return $this->belongsTo(QuestRoute::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function steps()
	{
		return $this->belongsToMany(Step::class, 'user_quest_step')
					->withPivot('id', 'status', 'deleted_at')
					->withTimestamps();
	}

	public function tips()
	{
		return $this->belongsToMany(Tip::class, 'user_quest_step_tip')
					->withPivot('id', 'user_quest_step_id', 'deleted_at')
					->withTimestamps();
	}
}
