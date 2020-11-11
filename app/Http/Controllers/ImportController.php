<?php

namespace App\Http\Controllers;

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
                case 'regencies':
                    Excel::import(new RegencyImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'districts':
                    Excel::import(new DistrictImport, public_path('documents/import/'.$nama_file));
                    break;
                case 'villages':
                    Excel::import(new VillageImport, public_path('documents/import/'.$nama_file));
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
