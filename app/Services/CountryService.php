<?php

namespace App\Services;

use App\Models\Country;

class CountryService {
    public function showAll(){

        return $countries = Country::all();
    }
}
