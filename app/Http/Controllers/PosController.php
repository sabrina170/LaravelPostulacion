<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function listar()
    {
         $departamentos = Departamento::orderByDesc('id')->get();
        return view('secret', compact('departamentos'));
    }

    public function buscarprovincia(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option value="0">Seleccione una provincia</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('provincias')
                    ->where('department_id', $id)
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="'.$dt->id .'">'.$dt->name .'</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($data);
             }
        }

    public function buscardistrito(Request $request)
    {
        if ($request->ajax()) {
            $output = '<option value="0">Seleccione un distrito</option>';
            $id = $request->get('id');
            if ($id != '') {
                $data = DB::table('distritos')
                    ->where('province_id', $id)
                    ->get();
            }

            //dd($data);
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $dt) {
                    $output .= '<option value="'.$dt->id .'">'.$dt->name .'</option>';
                }
            }
            $data = array(
                'table_data'  => $output,
                // 'total_data'  => $total_row
            );
            echo json_encode($data);
             }
        }
    }

