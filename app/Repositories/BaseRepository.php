<?php

namespace App\Repositories;
use App\Models\Base;
use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(
        Model $model
    )
    {
        $this->model = $model;
    }

    public function create(array $payLoad = []){
        $model = $this->model->create($payLoad);
        return $model->fresh();
    }

    public function all(){
        return $this->model->all();
     }

     public function findById(
        int $modelId,
        array $column = ['*'],
        array $relation = []
        )
     {
        return $this->model->select($column)->with($relation)->findOrFail($modelId);
     }
}
