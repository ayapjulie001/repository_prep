<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 10:30 PM
 */

class Review extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'reviews';

    public function ratings()
    {
        return $this->belongsToMany('CondominiumRatingTrail', 'pivot_review_condominiums', 'review_id', 'condominium_id')->withPivot(['is_deleted']);
    }

} 