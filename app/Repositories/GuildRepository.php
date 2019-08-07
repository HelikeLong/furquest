<?php

namespace App\Repositories;

use App\Models\Guild;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class GuildRepository
 * @package App\Repositories
 */
class GuildRepository extends BaseRepository
{
    /**
     * @var Guild
     */
    public $model;
    
    /**
     * GuildRepository constructor.
     * @param Guild $Guild
     */
    public function __construct(Guild $Guild)
    {
        $this->model = $Guild;
    }

    /**
     * Returns a guild's info
     *
     * @param $id
     * @return Builder|Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]
     */
    public function getInfo($id)
    {
        return $this->model()
            ->with([
                'users' => function ($query) {
                    /** @var $query Builder */
                    $query->select(['name', 'social_name', 'species', 'photo']);
                }
            ])
            ->findOrFail($id);
    }
}