<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:42 PM
 */

class PropertyType extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'property_types';

    public function condominiums()
    {
        return $this->hasMany('Condominium');
    }

} 