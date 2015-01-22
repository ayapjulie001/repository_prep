<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:39 PM
 */

class City extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'cities';

    public function province()
    {
        return $this->belongsTo('Province');
    }

} 