<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:15 PM
 */

class Inquiry extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'inquiries';

    public function estate_developer()
    {
        return $this->belongsTo('EstateDeveloper');
    }

}