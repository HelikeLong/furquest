<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserQuestStep
 * 
 * @property int $id
 * @property int $user_quest_id
 * @property int $step_id
 * @property int $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Step $step
 * @property UserQuest $user_quest
 * @property \Illuminate\Database\Eloquent\Collection $tips
 *
 * @package App\Models
 */
class UserQuestStep extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'user_quest_step';

	protected $casts = [
		'user_quest_id' => 'int',
		'step_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'user_quest_id',
		'step_id',
		'status'
	];

	public function step()
	{
		return $this->belongsTo(Step::class);
	}

	public function user_quest()
	{
		return $this->belongsTo(UserQuest::class);
	}

	public function tips()
	{
		return $this->belongsToMany(Tip::class, 'user_quest_step_tip')
					->withPivot('id', 'user_quest_id', 'deleted_at')
					->withTimestamps();
	}
}
