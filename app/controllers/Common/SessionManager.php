<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */

class SessionManager {

    /**
     * @param $applicant
     */
    public function loginToSession($applicant)
    {
        Session::clear();
        Auth::login($applicant);
    }
} 