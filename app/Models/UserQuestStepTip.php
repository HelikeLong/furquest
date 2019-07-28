<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class UserQuestStepTip
 * 
 * @property int $id
 * @property int $user_quest_step_id
 * @property int $user_quest_id
 * @property int $tip_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Tip $tip
 * @property UserQuest $user_quest
 * @property UserQuestStep $user_quest_step
 *
 * @package App\Models
 */
class UserQuestStepTip extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	protected $table = 'user_quest_step_tip';

	protected $casts = [
		'user_quest_step_id' => 'int',
		'user_quest_id' => 'int',
		'tip_id' => 'int'
	];

	protected $fillable = [
		'user_quest_step_id',
		'user_quest_id',
		'tip_id'
	];

	public function tip()
	{
		return $this->belongsTo(Tip::class);
	}

	public function user_quest()
	{
		return $this->belongsTo(UserQuest::class);
	}

	public function user_quest_step()
	{
		return $this->belongsTo(UserQuestStep::class);
	}
}
