<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


namespace TopHomes\Common\Repositories;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use IModel;
use Mockery\CountValidator\Exception;

abstract class BaseEloquent implements IBaseRepository
{
    protected $eloquent;

    public function __construct(Model $eloquent)
    {
        $this->eloquent = $eloquent;


    }

    public function save(IModel $model)
    {
        $model = $this->eloquent->create($model->toArray());

        if ($model == null)
            throw new Exception('Failed to save resource');

        return $model;
    }

    public function update(IModel $model)
    {
        if (!$model->save())
            throw new Exception('Failed to update resource');

        return $model;
    }

    public function hardUpdate(IModel $model)
    {
        $updates = array_except($model->toArray(), ['id']);

        $updated = $this->eloquent
            ->whereId($model->id)
            ->update($updates);

        return $model;
    }

    public function findById($id)
    {
        return $this->eloquent->find($id);
    }

    public function findByAttributes(array $attributes)
    {
        return $this->buildFindByAttributesQuery($attributes)->first();
    }

    public function findListByAttributes(array $attributes, $pagination = 'all', $sortColumn = 'id', $sortBy = 'asc')
    {
        if($pagination != 'all')
            return $this->buildFindByAttributesQuery($attributes)->orderBy($sortColumn, $sortBy)->take($pagination)->get();

        return $this->buildFindByAttributesQuery($attributes)->orderBy($sortColumn, $sortBy)->get();
    }

    public function findPaginatedList(array $attributes, $pagination = IBaseRepository::PAGINATION, $sortColumn = 'id', $sortBy = 'asc')
    {
        return $this->buildFindByAttributesQuery($attributes)->orderBy($sortColumn, $sortBy)->paginate($pagination);
    }

    public function beginTransaction()
    {
        DB::beginTransaction();
    }

    public function commit()
    {
        DB::commit();
    }

    public function rollback()
    {
        DB::rollback();
    }

    /**
     * @param array $attributes
     * @return Model
     */
    protected function buildFindByAttributesQuery(array $attributes)
    {
        foreach ($attributes as $attrib => $value) {
            $this->eloquent = $this->eloquent->where($attrib, '=', $value);
        }

        return $this->eloquent;
    }
} 