<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateDoctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateAgenda;
use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Profile;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    protected $repository, $employee;
    public function __construct(Agenda $agenda, Doctor $doctor, Employee $employee, Profile $profile)
    {
        $this->repository = $agenda;
        $this->doctor = $doctor;
        $this->employee = $employee;
        $this->profile = $profile;
    }

    public function index($idDoctor){
        if(!$doctor = $this->doctor->where('id', $idDoctor)->first()){
            return redirect()->back();
        }
        $profile = $this->profile;
        $employee = $this->employee;

        $agendas = $doctor->agendas()->paginate();

        return view('admin.pages.profiles.employees.doctors.agendas.index', [
            'profile' => $profile,
            'employee' => $employee,
            'doctor' => $doctor,
            'agendas' => $agendas
        ]);
    }

    public function create($idDoctor){
        if(!$doctor = $this->doctor->where('id', $idDoctor)->first()){
            return redirect()->back();
        }
        $employee = $this->employee;
        $profile = $this->profile;
        return view('admin.pages.profiles.employees.doctors.agendas.create', [
            'profile' => $profile,
            'employee' => $employee,
            'doctor' => $doctor,
        ]);
    }

    public function store(StoreUpdateAgenda $request, $idDoctor){
        if(!$doctor = $this->doctor->where('id', $idDoctor)->first()){
            return redirect()->back();
        }

        $doctor->agendas()->create($request->all());
        return redirect()->route('agendas.doctor.employee.profile.index', $doctor->id);
    }

    public function edit($idDoctor, $idAgenda){
        $doctor = $this->doctor->where('id',$idAgenda)->first();
        $agenda = $this->repository->find($idAgenda);
        
        $employee = $this->employee;
        $profile = $this->profile;

        if(!$doctor = $this->doctor->where('id', $idDoctor)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.doctors.agendas.edit', [
            'profile' => $profile,
            'employee' => $employee,
            'doctor' => $doctor,
            'agenda' => $agenda,
        ]);
    }

    public function update(StoreUpdateAgenda $request, $idDoctor, $idAgenda){
        $doctor = $this->doctor->where('id',$idDoctor)->first();
        $agenda = $this->repository->find($idAgenda);

        if(!$doctor || !$agenda){
            return redirect()->back();
        }

        //dd($request->all());
        $agenda->update($request->all());
        return redirect()->route('agendas.doctor.employee.profile.index', $doctor->id);
    }

    public function show($idDoctor, $idAgenda){
        $doctor = $this->doctor->where('id',$idDoctor)->first();
        $agenda = $this->repository->find($idAgenda);

        if(!$doctor = $this->doctor->where('id', $idDoctor)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.doctors.agendas.show', [
            'doctor' => $doctor,
            'agenda' => $agenda,
        ]);
    }

    public function destroy($idDoctor, $idAgenda){
        $doctor = $this->doctor->where('id',$idDoctor)->first();
        $agenda = $this->repository->find($idAgenda);

        if(!$doctor || !$agenda){
            return redirect()->back();
        }

        //dd($request->all());
        $agenda->delete();
        return redirect()->route('agendas.doctor.employee.profile.index', $doctor->id)->with('message', 'Registro deletado com sucesso');
    }
}