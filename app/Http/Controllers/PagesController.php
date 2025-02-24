<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dash()
    {
        return view('installation.home');
    }

    public function timezoneStore()
    {
        return view('tobeconfig.appconfig');
    }

    public function environmentStore()
    {
        return view('tobeconfig.envconfig');
    }

    public function redirectStore()
    {
        return view('tobeconfig.redirectconfig');
    }

    public function bladefrontendStore()
    {
        return view('frontend.designpages');
    }

    public function backendcontrolStore()
    {
        return view('backend.controlcode');
    }

    public function routecontrolStore()
    {
        return view('backend.routecode');
    }

    public function migrationStore()
    {
        return view('backend.migrationcode');
    }

    public function modelsStore()
    {
        return view('backend.modelscode');
    }
}
