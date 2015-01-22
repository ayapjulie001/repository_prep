<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


namespace TopHomes\Common\Repositories;

use IModel;

interface IBaseRepository
{
    const PAGINATION = 20;

    public function update(IModel $model);

    public function hardUpdate(IModel $model);

    public function save(IModel $model);

    public function findByAttributes(array $attributes);

    public function findListByAttributes(array $attributes, $pagination = 'all', $sortColumn = 'id', $sortBy = 'asc');

    public function findPaginatedList(array $attributes, $pagination = self::PAGINATION, $sortColumn = 'id', $sortBy = 'asc');

    public function findById($id);

    public function beginTransaction();

    public function commit();

    public function rollback();
}