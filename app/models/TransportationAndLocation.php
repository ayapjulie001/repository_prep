<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:42 PM
 */

class TransportationAndLocation extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'transportation_and_locations';

    public function condo()
    {
        return $this->belongsTo('Condominium');
    }

    public function location_type()
    {
        return $this->belongsTo('LocationType');
    }
} 