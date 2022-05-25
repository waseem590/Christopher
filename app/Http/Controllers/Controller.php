<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
  
    public function successMessage($message)
    {
        toastr()->success($message);
    }

    /**
     * @param String
     * @return Toastr Error Notification
     */
    public function dangerMessage($message)
    {
        toastr()->error($message);
    }
}
