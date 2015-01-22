<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:06 PM
 */

class ParkingType extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'parking_types';

    public function condo_ratings()
    {
        return $this->hasMany('CondominiumRatingTrail');
    }

} 