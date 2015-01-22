<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 9:40 PM
 */


class AdminMessage extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'admin_messages';

    public function country()
    {
        return $this->belongsTo('Country');
    }

}
