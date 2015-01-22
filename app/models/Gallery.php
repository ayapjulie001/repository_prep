<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:44 PM
 */

class Gallery extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'condominium_galleries';

    public function condominium()
    {
        return $this->belongsTo('Condominium');
    }

} 