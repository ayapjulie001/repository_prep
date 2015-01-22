<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 11:33 PM
 */

namespace TopHomes\Contact\Repositories;


use AdminMessage;
use TopHomes\Common\Repositories\BaseEloquent;

class ContactEloquent extends BaseEloquent implements IContactRepository
{

    public function delete(AdminMessage $message)
    {
        return $message->save();
    }
}
