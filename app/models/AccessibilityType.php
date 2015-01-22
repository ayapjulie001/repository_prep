<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:04 AM
 */

class AccessibilityType extends Eloquent implements IModel
{

    protected $guarded = ['id'];
    protected $table = 'accessibility_types';

    public function condo_rating_accessibility()
    {
        return $this->hasMany('CondominiumRatingTrail', 'accessibility_type_id');
    }

    public function condo_rating_transportation()
    {
        return $this->hasMany('CondominiumRatingTrail', 'transportation_type_id');
    }

}