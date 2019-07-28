<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class RewardType
 * 
 * @property int $id
 * @property string $type
 * 
 * @property \Illuminate\Database\Eloquent\Collection $step_rewards
 *
 * @package App\Models
 */
class RewardType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'type'
	];

	public function step_rewards()
	{
		return $this->hasMany(StepReward::class);
	}
}
