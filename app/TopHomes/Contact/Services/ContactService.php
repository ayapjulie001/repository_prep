<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:45 PM
 */

namespace TopHomes\Contact\Services;


use AdminMessage;
use TopHomes\Common\Repositories\IBaseRepository;
use TopHomes\Contact\Repositories\IContactRepository;

class ContactService implements IContactService {

    protected $repository;

    function __construct(IContactRepository $repository)
    {
        $this->repository = $repository;
    }

    public function save(AdminMessage $message)
    {
        return $this->repository->save($message);
    }

    public function update(AdminMessage $message)
    {
        // TODO: Implement update() method.
    }

    public function delete(AdminMessage $message)
    {
        return $this->repository->delete($message);
    }

    public function findById($id)
    {
        return $this->repository->findById($id);
    }

    public function findByAttributes(array $attribute)
    {
        // TODO: Implement findByAttributes() method.
    }

    public function findListByAttributes(array $attribute, $pagination = 'all')
    {
        // TODO: Implement findListByAttributes() method.
    }

    public function findPaginatedList(array $attributes, $pagination = IBaseRepository::PAGINATION, $sort_column = 'id', $sort_by = 'asc')
    {
       return $this->repository->findPaginatedList($attributes, $pagination, $sort_column, $sort_by);
    }
}
