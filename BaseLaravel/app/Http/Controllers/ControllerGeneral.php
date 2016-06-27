<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}
