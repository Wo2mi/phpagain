<?php

namespace App\Repositories\Interfaces;

/**
 * Interface BaseRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface BaseRepositoryInterface
{
    public function all();

    public function findById(int $id);
    public function create(array $payLoad);
    public function update(int $id = 0, array $payLoad = []);
    public function delete(int $id = 0);
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $perpage = 20);
}
