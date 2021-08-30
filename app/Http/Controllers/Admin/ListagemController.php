<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ListagemController extends Controller
{
    protected $employee, $profile;
    
    public function __construct(Employee $employee, Profile $profile, Patient $patient, Agenda $agenda, Doctor $doctor)
    {
        $this->doctor = $doctor;
        $this->agenda = $agenda;
        $this->patient = $patient;
        $this->employee = $employee;
        $this->profile = $profile;
    }

    public function agendamentos(){
        $profile = $this->profile;
        $employee =  $this->employee;
        $doctor = $this->doctor;
        $agendamento =  $this->agenda->latest()->paginate(10);
        return view('admin.pages.listagem.agendamentos.index', [
            'agendamentos' => $agendamento,
            'doctors' => $doctor,
            'profiles' => $profile,
            'employees' => $employee,
        ]);
    }

    public function pacientes(){
        $profile = $this->profile;
        $patient =  $this->patient->latest()->paginate(10);
        return view('admin.pages.listagem.pacientes.index', [
            'profiles' => $profile,
            'patients' => $patient,
        ]);
    }

    public function funcionarios(){
        $profile = $this->profile;
        $employee =  $this->employee->latest()->paginate(10);
        return view('admin.pages.listagem.funcionarios.index', [
            'profiles' => $profile,
            'employees' => $employee,
        ]);
    }

    public function search(Request $request){
        //dd($request->all());
        $filters = $request->except('_token');
        $profiles = $this->repository->search($request->filter);

        return view('admin.pages.profiles.index', [
            'profiles' => $profiles,
            'filters' => $filters,
        ]);
    }
}
