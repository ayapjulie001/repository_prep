<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:31 PM
 */

namespace TopHomes\Contact\Repositories;


use AdminMessage;
use TopHomes\Common\Repositories\IBaseRepository;

interface IContactRepository extends IBaseRepository
{
    public function delete(AdminMessage $message);
}
