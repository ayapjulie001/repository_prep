<?php
/**
 * Created JulieAnnAyap
 * Date: 1/14/2015
 * Time: 9:57 PM
 */

class Article extends Eloquent implements IModel {

    protected $guarded = ['id'];
    protected $table = 'articles';

}