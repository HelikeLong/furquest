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

    public function get($id = 0)
    {
        if ($id) {
            return $this->current->user_quests()
                ->with(['quest_route', 'quest_route.quest'])
                ->findOrFail($id);
        } else {
            return $this->current->user_quests()->get();
        }
    }
}
