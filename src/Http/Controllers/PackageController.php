<?php

namespace {PackageNamespace}\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PackageController
{

    public function index(Request $request)
    {
        return view('{slug}::app.home');
    }

}
