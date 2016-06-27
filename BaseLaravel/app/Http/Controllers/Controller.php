<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class ControllerGeneral extends Controller
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}
