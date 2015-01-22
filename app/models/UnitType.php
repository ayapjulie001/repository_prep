<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:48 PM
 */

class UnitType extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'unit_types';

    public function condominiums()
    {
        return $this->belongsToMany('Condominium', 'pivot_condominium_unit_types', 'unit_type_id', 'condominium_id')->withPivot(['is_deleted']);
    }

} 