<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:40 PM
 */

class Province  extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'provinces';

    public function cities()
    {
        return $this->hasMany('City');
    }

} 