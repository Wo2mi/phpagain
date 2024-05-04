<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ___construct(){

    }

    public function index(){

        $config = $this->config();
        $template = 'backend.dashboard.home.index';
       return view('backend.dashboard.layout', compact  (
        'template',
        'config'
    ));
    }


    private function config(){
        return [
            'js' => [
            '/template/js/plugins/flot/jquery.flot.js',
            '/template/js/plugins/flot/jquery.flot.tooltip.min.js',
            '/template/js/plugins/flot/jquery.flot.spline.js',
            '/template/js/plugins/flot/jquery.flot.resize.js',
            '/template/js/plugins/flot/jquery.flot.pie.js',
            '/template/js/plugins/flot/jquery.flot.symbol.js',
            '/template/js/plugins/flot/jquery.flot.time.js',
            '/template/js/plugins/peity/jquery.peity.min.js',
            '/template/js/demo/peity-demo.js',
            '/template/js/inspinia.js',
            '/template/js/plugins/pace/pace.min.js',
            '/template/js/plugins/jquery-ui/jquery-ui.min.js',
            '/template/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
            '/template/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
            '/template/js/plugins/easypiechart/jquery.easypiechart.js',
            '/template/s/plugins/sparkline/jquery.sparkline.min.js',
            '/template/js/demo/sparkline-demo.js'
            ]
            ];
    }
}
