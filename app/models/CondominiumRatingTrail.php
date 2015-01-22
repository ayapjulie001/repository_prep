<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:00 PM
 */

class CondominiumRatingTrail extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'condominium_rating_trails';

    public function condominium()
    {
        return $this->belongsTo('Condominium');
    }

    public function parking_type()
    {
        return $this->belongsTo('ParkingType');
    }

    public function environment()
    {
        return $this->belongsTo('ComposureType', 'environment_composure_id');
    }

    public function noise_isolation()
    {
        return $this->belongsTo('ComposureType', 'noise_isolation_id');
    }

    public function accessibility()
    {
        return $this->belongsTo('AccessibilityType', 'accessibility_type_id');
    }

    public function transportation()
    {
        return $this->belongsTo('AccessibilityType', 'transportation_type_id');
    }

    public function transportation_and_locations()
    {
        return $this->hasMany('TransportationAndLocation');
    }

    public function amenities_and_facilities()
    {
        return $this->hasMany('AmenitiesAndFacility');
    }

    public function reviews()
    {
        return $this->belongsToMany('Review', 'pivot_review_condominiums', 'condominium_id', 'review_id')->withPivot(['is_deleted']);
    }

} 