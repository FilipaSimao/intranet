<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Traits\Permissions;
use DB;

class DashboardController extends CrudController
{
    use Permissions;

    public function dashboard()
    {
        $rule = 'BETWEEN 30 AND 33 OR treatment_type_id BETWEEN 6 AND 8';

        $headquarter_sterilizations = DB::table('treatments')
            ->join('appointments', 'treatments.appointment_id', '=', 'appointments.id')
            ->join('processes', 'appointments.process_id', '=', 'processes.id')
            ->join('headquarters', 'processes.headquarter_id', '=', 'headquarters.id')
            ->selectRaw('SUM(affected_animals) as total, headquarters.name')
            ->whereRaw("treatment_type_id $rule")
            ->groupBy('headquarters.id')
            ->orderBy('total', 'DESC')
            ->first();

        $vets_working_hours = DB::table('treatments')
            ->join('treatment_types', 'treatment_type_id', '=', 'treatment_types.id')
            ->selectRaw('SUM(operation_time * affected_animals) as total')
            ->first()->total / 60;

        return view('backpack::dashboard')->with('stats', [
            'treatments' => DB::table('treatments')->selectRaw('SUM(affected_animals) as total')->first()->total,
            'sterilizations' => DB::table('treatments')->selectRaw('SUM(affected_animals) as total')->whereRaw("treatment_type_id $rule")->first()->total,
            'top_headquarter_sterilizations_name' => $headquarter_sterilizations ? $headquarter_sterilizations->name : '...',
            'top_headquarter_sterilizations_value' => $headquarter_sterilizations ? $headquarter_sterilizations->total : '...',
            'appointments' => DB::table('treatments')->selectRaw('COUNT(*) as total')->whereRaw("treatment_type_id $rule")->first()->total,
            'vets' => DB::table('treatments')->selectRaw('COUNT(DISTINCT vet_id) as total')->whereRaw("treatment_type_id $rule")->first()->total,
            'volunteers' => DB::table('user_has_roles')->selectRaw('COUNT(DISTINCT model_id) as total')->where('role_id', 2)->first()->total,
            'vets_working_hours' => $vets_working_hours,
            'godfathers' => DB::table('donations')->selectRaw('COUNT(DISTINCT godfather_id) as total')->first()->total,
            'donations' => DB::table('donations')->selectRaw('SUM(value) as total')->first()->total,
            'godfathers_processes' => DB::table('donations')->selectRaw('COUNT(DISTINCT process_id) as total')->first()->total,
        ]);
    }
}
