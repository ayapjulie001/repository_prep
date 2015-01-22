<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:41 PM
 */

class CondominiumStatus extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'condominium_statuses';

    public function condominiums()
    {
        return $this->hasMany('Condominium');
    }

}