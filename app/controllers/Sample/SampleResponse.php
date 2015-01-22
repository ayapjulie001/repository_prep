<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

class SampleResponse extends ApiResponse
{

    public function respondSampleList($data){
        return $this->respond($data);
    }

    public function getCustomPagination($paginator) {
        return $this->getPagination($paginator);
    }
} 