<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

interface IModel {

    public function toArray();

    public function toJSON();

    public function save();

    public function update();
}

