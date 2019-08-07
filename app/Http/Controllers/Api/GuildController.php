<?php

namespace App\Http\Controllers\Api;

use App\Repositories\GuildRepository;
use App\Http\Controllers\Controller;

class GuildController extends Controller
{
    /** @var GuildRepository */
    private $guildRepository;

    public function __construct(GuildRepository $guildRepository)
    {
        parent::__construct();

        $this->guildRepository = $guildRepository;
    }

    /**
     * Gets a guild's infos
     *
     * @param $id
     * @return GuildRepository|GuildRepository[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function get($id)
    {
        return $this->guildRepository->getInfo($id);
    }
}
