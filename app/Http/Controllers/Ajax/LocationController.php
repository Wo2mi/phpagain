<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistrictRepository;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
// use App\Repositories\Interfaces\BaseRepositoryInterface as BaseRepository;



use function Laravel\Prompts\error;

class LocationController extends Controller
{
    protected $districtRepository;
    protected $provinceRepository;
    // protected $baseRepository;



    public function __construct(
        DistrictRepository $districtRepository,
        ProvinceRepository $provinceRepository,
        // BaseRepository $baseRepository


    )
    {
        $this->districtRepository = $districtRepository;
        $this->provinceRepository = $provinceRepository;
        // $this->baseRepository = $baseRepository;


    }

    public function getLocation(Request $request){
        $get = $request->input();

        $html ='';
        if($get['target'] == 'districts'){
            $province = $this->provinceRepository->findById($get['data']['location_id'], ['code','name'],['districts']);
            $html = $this->renderHtml($province->districts);

        }elseif($get['target'] == 'wards'){
            $district = $this->districtRepository->findById($get['data']['location_id'], ['code','name'],['wards']);
            $html = $this->renderHtml($district->wards, '[Chọn Phường/Xã]');

        }

        $response = [
            'html' => $html
        ];
        return response()->json($response);
    }

    public function renderHtml($districts, $root = '[Chọn Quận/Huyện]'){
        $html = '<option value="0">'.$root.'</option>';
        foreach($districts as $district){
        $html .= '<option value="'.$district->code.'">'.$district->name.'</option>';
    }
    return $html;
}

}
