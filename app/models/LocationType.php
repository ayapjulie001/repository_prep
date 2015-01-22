<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:44 PM
 */

class LocationType extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'location_types';

    public function transportation_and_locations()
    {
        return $this->hasMany('TransportationAndLocation');
    }
} 