<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:42 PM
 */

namespace TopHomes\Contact\Services;


use AdminMessage;
use TopHomes\Common\Repositories\IBaseRepository;

interface IContactService {

    public function save(AdminMessage $message);

    public function update(AdminMessage $message);

    public function delete(AdminMessage $message);

    public function findById($id);

    public function findByAttributes(array $attribute);

    public function findListByAttributes(array $attribute, $pagination = 'all');

    public function findPaginatedList(array $attributes, $pagination = IBaseRepository::PAGINATION, $sort_column = 'id', $sort_by = 'asc');
} 
