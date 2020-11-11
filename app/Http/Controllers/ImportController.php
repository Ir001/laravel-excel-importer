<?php

namespace App\Http\Controllers;

use App\Imports\BpsdistrictImport;
use App\Imports\BpsprovinceImport;
use App\Imports\BpsregencyImport;
use App\Imports\BpsvillageImport;
use App\Imports\DagriDistrictImport;
use App\Imports\DagriProvinceImport;
use App\Imports\DagriRegencyImport;
use App\Imports\DagriVillageImport;
use App\Imports\DistrictImport;
use App\Imports\ProvinceImport;
use App\Imports\RegencyImport;
use App\Imports\VillageImport;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'table' => 'required',
            'file' => 'required|file|mimes:csv,xls,xlsx',
        ]);
        $file = $request->file('file');

        $nama_file = Str::random(5).$file->getClientOriginalName();

        $file->move('documents/import', $nama_file);
        try{
            switch ($request->table) {
                case 'provinces':
                    Excel::import(new ProvinceImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'bps_provinces':
                    Excel::import(new BpsprovinceImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'dagri_provinces':
                    Excel::import(new DagriProvinceImport, public_path('documents/import/'.$nama_file));
                    break;
                /* Regency */
                case 'regencies':
                    Excel::import(new RegencyImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'bps_regencies':
                    Excel::import(new BpsregencyImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'dagri_regencies':
                    Excel::import(new DagriRegencyImport, public_path('documents/import/'.$nama_file));
                    break;
                /* District */
                case 'districts':
                    Excel::import(new DistrictImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'bps_districts':
                    Excel::import(new BpsdistrictImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'dagri_districts':
                    Excel::import(new DagriDistrictImport, public_path('documents/import/'.$nama_file));
                    break;
                /* Villages */
                case 'villages':
                    Excel::import(new VillageImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'bps_villages':
                    Excel::import(new BpsvillageImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'dagri_villages':
                    Excel::import(new DagriVillageImport, public_path('documents/import/'.$nama_file));
                    break;

                default:
                    # code...
                    break;
            }
            return back()->withSuccess('Sukses import!');
        }catch(Exception $e){
            return back()->withErrors('Error: '.$e->getMessage());
        }

    }
}
