<?php
/**
 * Created JulieAnnAyap
 * Date: 1/15/2015
 * Time: 2:07 AM
 */

class ComposureType extends Eloquent implements IModel
{

    protected $guarded = ['id'];
    protected $table = 'composure_types';

    public function condo_rating_environment()
    {
        return $this->hasMany('CondominiumRatingTrail', 'environment_composure_id');
    }

    public function condo_rating_noise_iso()
    {
        return $this->hasMany('CondominiumRatingTrail', 'noise_isolation_id');
    }

}