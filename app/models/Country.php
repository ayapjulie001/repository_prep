<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 9:42 PM
 */

class Country extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'countries';

    public function messages()
    {
        return $this->hasMany('AdminMessage');
    }

} 
