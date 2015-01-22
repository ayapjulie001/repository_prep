<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


namespace TopHomes\Common\Repositories;

use IModel;

interface BaseRepositoryInterface
{
    public function update(IModel $model);

    public function save(IModel $model);

    public function findByAttributes(array $attributes);

    public function findListByAttributes(array $attributes);

    public function findById($id);
}