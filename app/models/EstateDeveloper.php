<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:17 PM
 */

class EstateDeveloper extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'estate_developers';

    public function condominiums()
    {
        return $this->hasMany('Condominium');
    }

    public function inquiries()
    {
        return $this->hasMany('Inquiry');
    }

    public function developer_messages()
    {
        return $this->hasMany('DeveloperMessage');
    }

}