<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class StepReward
 * 
 * @property int $id
 * @property int $steps_id
 * @property int $reward_type_id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property RewardType $reward_type
 * @property Step $step
 *
 * @package App\Models
 */
class StepReward extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'steps_id' => 'int',
		'reward_type_id' => 'int'
	];

	protected $fillable = [
		'steps_id',
		'reward_type_id',
		'value'
	];

	public function reward_type()
	{
		return $this->belongsTo(RewardType::class);
	}

	public function step()
	{
		return $this->belongsTo(Step::class, 'steps_id');
	}
}
