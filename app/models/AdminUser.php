<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:59 PM
 */

class AdminUser extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'admin_user';

}