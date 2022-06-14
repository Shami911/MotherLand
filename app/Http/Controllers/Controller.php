<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

use App\Models\AdminNavbar;
use App\Models\AdminContact;
use App\Models\AdminServis;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct() {
        $navbar = new AdminNavbar;
        $contact = new AdminNavbar;
        $servis =  new AdminServis;
        View::share('navbar', $navbar->all());
        View::share('contact', $contact->all());
        View::share('servis', $servis->all());

    }
}
