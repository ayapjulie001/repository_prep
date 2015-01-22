<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:41 PM
 */

class AmenitiesAndFacilities extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'amenities_and_facilities';

    public function condo()
    {
        return $this->belongsTo('Condominium');
    }

} 