<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdatePatient;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Profile;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected $repository, $profile;
    public function __construct(Patient $patient, Profile $profile)
    {
        $this->repository = $patient;
        $this->profile = $profile;
    }

    public function index($idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        //$patients = $profile->patients();
        $patients = $profile->patients()->paginate();

        return view('admin.pages.profiles.patients.index', [
            'profile' => $profile,
            'patients' => $patients,
        ]);
    }

    public function create($idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.patients.create', [
            'profile' => $profile,
        ]);
    }

    public function store(StoreUpdatePatient $request, $idProfile){
        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        $profile->patients()->create($request->all());
        return redirect()->route('patients.profile.index', $profile->id);
    }

    public function edit($idProfile, $idPatient){
        $profile = $this->profile->where('id',$idProfile)->first();
        $patient = $this->repository->find($idPatient);

        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.patients.edit', [
            'profile' => $profile,
            'patient' => $patient,
        ]);
    }

    public function update(StoreUpdatePatient $request, $idProfile, $idPatient){
        $profile = $this->profile->where('id',$idProfile)->first();
        $patient = $this->repository->find($idPatient);

        if(!$profile || !$patient){
            return redirect()->back();
        }

        //dd($request->all());
        $patient->update($request->all());
        return redirect()->route('patients.profile.index', $profile->id);
    }

    public function show($idProfile, $idPatient){
        $profile = $this->profile->where('id',$idProfile)->first();
        $patient = $this->repository->find($idPatient);

        if(!$profile = $this->profile->where('id', $idProfile)->first()){
            return redirect()->back();
        }

        return view('admin.pages.profiles.patients.show', [
            'profile' => $profile,
            'patient' => $patient,
        ]);
    }

    public function destroy($idProfile, $idPatient){
        $profile = $this->profile->where('id',$idProfile)->first();
        $patient = $this->repository->find($idPatient);

        if(!$profile || !$patient){
            return redirect()->back();
        }

        //dd($request->all());
        $patient->delete();
        return redirect()->route('patients.profile.index', $profile->id)->with('message', 'Registro deletado com sucesso');
    }
}
