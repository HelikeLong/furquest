<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 28 Jul 2019 16:28:11 -0300.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class QuestRoutesStep
 * 
 * @property int $id
 * @property int $quest_route_id
 * @property int $quest_id
 * @property int $step_origin_id
 * @property int $step_dest_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * 
 * @property Quest $quest
 * @property QuestRoute $quest_route
 * @property Step $step_origin
 * @property Step $step_dest
 *
 * @package App\Models
 */
class QuestRoutesStep extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'quest_route_id' => 'int',
		'quest_id' => 'int',
		'step_origin_id' => 'int',
		'step_dest_id' => 'int'
	];

	protected $fillable = [
		'quest_route_id',
		'quest_id',
		'step_origin_id',
		'step_dest_id'
	];

	public function quest()
	{
		return $this->belongsTo(Quest::class);
	}

	public function quest_route()
	{
		return $this->belongsTo(QuestRoute::class);
	}

    public function step_origin()
    {
        return $this->belongsTo(Step::class, 'step_origin_id');
    }

    public function step_dest()
    {
        return $this->belongsTo(Step::class, 'step_dest_id');
    }
}
