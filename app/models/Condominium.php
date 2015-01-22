<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:31 PM
 */

class Condominium extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'condominiums';

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function estate_developer()
    {
        return $this->belongsTo('EstateDeveloper');
    }

    public function condo_status()
    {
        return $this->belongsTo('CondominiumStatus');
    }

    public function property_type()
    {
        return $this->belongsTo('PropertyType');
    }

    public function gallery()
    {
        return $this->hasMany('Gallery');
    }

    public function available_units()
    {
        return $this->hasMany('AvailableUnit');
    }

    public function condo_rating_trails()
    {
        return $this->hasMany('CondominiumRatingTrail');
    }

    public function unit_types()
    {
        return $this->belongsToMany('UnitType', 'pivot_condominium_unit_types', 'condominium_id', 'unit_type_id')->withPivot(['is_deleted']);
    }

}