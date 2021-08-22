<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateEmployee;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Profile;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $repository, $profile;
    public function __construct(Employee $employee, Profile $profile)
    {
        $this->repository = $employee;
        $this->profile = $profile;
    }

    public function index($idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        //$employees = $profile->employees();
        $employees = $profile->employees()->paginate();

        return view('admin.pages.profiles.employees.index', [
            'profile' => $profile,
            'employees' => $employees,
        ]);
    }

    public function create($idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.create', [
            'profile' => $profile,
        ]);
    }

    public function store(StoreUpdateEmployee $request, $idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        $profile->employees()->create($request->all());
        return redirect()->route('employees.profile.index', $profile->id);
    }

    public function edit($idProfile, $idEmployee){
        $profile = $this->profile->where('id',$idProfile)->first();
        $employee = $this->repository->find($idEmployee);

        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.edit', [
            'profile' => $profile,
            'employee' => $employee,
        ]);
    }

    public function update(StoreUpdateEmployee $request, $idProfile, $idEmployee){
        $profile = $this->profile->where('id',$idProfile)->first();
        $employee = $this->repository->find($idEmployee);

        if(!$profile || !$employee){
            return redirect()->back();
        }

        //dd($request->all());
        $employee->update($request->all());
        return redirect()->route('employees.profile.index', $profile->id);
    }

    public function show($idProfile, $idEmployee){
        $profile = $this->profile->where('id',$idProfile)->first();
        $employee = $this->repository->find($idEmployee);

        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.employees.show', [
            'profile' => $profile,
            'employee' => $employee,
        ]);
    }

    public function destroy($idProfile, $idEmployee){
        $profile = $this->profile->where('id',$idProfile)->first();
        $employee = $this->repository->find($idEmployee);

        if(!$profile || !$employee){
            return redirect()->back();
        }

        //dd($request->all());
        $employee->delete();
        return redirect()->route('employees.profile.index', $profile->id)->with('message', 'Registro deletado com sucesso');
    }
}
