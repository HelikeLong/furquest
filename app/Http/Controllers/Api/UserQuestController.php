<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserQuestController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Gets a quest or a collection of quests assign to the current user
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasMany[]
     */
    public function get($id = 0)
    {
        if ($id) {
            return $this->current->user_quests()
                ->with(['quest_route', 'quest_route.quest'])
                ->findOrFail($id);
        } else {
            return $this->current->user_quests()
                ->with(['quest_route', 'quest_route.quest'])
                ->get();
        }
    }

    public function current()
    {
      return $this->current->user_quests()
          ->with(['quest_route', 'quest_route.quest'])
          ->orderByDesc('id')
          ->first();
    }
}
