<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:11 PM
 */

class DeveloperMessage extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'developer_messages';

    public function estate_developer()
    {
        return $this->belongsTo('EstateDeveloper');
    }

}