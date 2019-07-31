<?php
        
namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository
{
    /**
     * @var Model
     */
	protected $model;

    /**
     * @param $id
     * @return mixed
     */
	public function find($id)
	{
		return $this->model->find($id);
	}

    /**
     * @param $data
     * @return mixed
     */
	public function create($data)
	{		
		return $this->model->create($data);
	}

    /**
     * @param $data
     * @return mixed
     */
	public function delete($data)
	{
		return $this->model->find($data)->delete();
	}

    /**
     * @return mixed
     */
	public function all()
	{
		return $this->model->all();
	}

    /**
     * @return Model|Builder
     */
	public function model()
	{
		return $this->model;
	}
}