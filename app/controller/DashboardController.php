<?php

namespace app\controller;

use app\middleware\Admin;

class DashboardController extends Admin
{
    public string $TITTLE = 'AdminLTE | Dashboard';
    public string $MODULO = 'dashboard';
}