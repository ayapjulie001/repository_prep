<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:55 PM
 */

class SalesReport extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'sales_reports';

    public function available_unit()
    {
        return $this->belongsTo('AvailableUnit', 'unit_id');
    }

} 