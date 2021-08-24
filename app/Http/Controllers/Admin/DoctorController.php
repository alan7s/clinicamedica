<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateDoctor;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Employee;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    protected $repository, $employee;
    public function __construct(Doctor $doctor, Employee $employee)
    {
        $this->repository = $doctor;
        $this->employee = $employee;
    }

    public function index($idEmployee){
        if(!$employee = $this->employee->where('id', $idEmployee)->first()){
            return redirect()->back();
        }

        //$doctors = $employee->doctors();
        $doctors = $employee->doctors()->paginate();

        return view('admin.pages.profiles.employees.doctors.index', [
            'employee' => $employee,
            'doctors' => $doctors,
        ]);
    }

    public function create($idEmployee){
        if(!$employee = $this->employee->where('id', $idEmployee)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.doctors.create', [
            'employee' => $employee,
        ]);
    }

    public function store(StoreUpdateDoctor $request, $idEmployee){
        if(!$employee = $this->employee->where('id', $idEmployee)->first()){
            return redirect()->back();
        }

        $employee->doctors()->create($request->all());
        return redirect()->route('doctors.employee.profile.index', $employee->id);
    }

    public function edit($idEmployee, $idDoctor){
        $employee = $this->employee->where('id',$idEmployee)->first();
        $doctor = $this->repository->find($idDoctor);

        if(!$employee = $this->employee->where('id', $idEmployee)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.doctors.edit', [
            'employee' => $employee,
            'doctor' => $doctor,
        ]);
    }

    public function update(StoreUpdateDoctor $request, $idEmployee, $idDoctor){
        $employee = $this->employee->where('id',$idEmployee)->first();
        $doctor = $this->repository->find($idDoctor);

        if(!$employee || !$doctor){
            return redirect()->back();
        }

        //dd($request->all());
        $doctor->update($request->all());
        return redirect()->route('doctors.employee.profile.index', $employee->id);
    }

    public function show($idEmployee, $idDoctor){
        $employee = $this->employee->where('id',$idEmployee)->first();
        $doctor = $this->repository->find($idDoctor);

        if(!$employee = $this->employee->where('id', $idEmployee)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.doctors.show', [
            'employee' => $employee,
            'doctor' => $doctor,
        ]);
    }

    public function destroy($idEmployee, $idDoctor){
        $employee = $this->employee->where('id',$idEmployee)->first();
        $doctor = $this->repository->find($idDoctor);

        if(!$employee || !$doctor){
            return redirect()->back();
        }

        //dd($request->all());
        $doctor->delete();
        return redirect()->route('doctors.employee.profile.index', $employee->id)->with('message', 'Registro deletado com sucesso');
    }
}