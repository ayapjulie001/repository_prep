<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:49 PM
 */

class AvailableUnit extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'available_units';

    public function condominium()
    {
        return $this->belongsTo('Condominium');
    }

    public function furnishing_type()
    {
        return $this->belongsTo('FurnishingType');
    }

    public function sales_report()
    {
        return $this->hasMany('SalesReport', 'unit_id');
    }
} 