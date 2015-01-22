<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:53 PM
 */

class FurnishingType extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'furnishing_types';

    public function available_units()
    {
        return $this->hasMany('AvailableUnit');
    }

} 