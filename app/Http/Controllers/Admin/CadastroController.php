<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Doctor;
use App\Models\Employee;
use App\Models\Endereco;
use App\Models\Patient;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CadastroController extends Controller
{
    protected $employee, $profile;
    
    public function __construct(Employee $employee, Profile $profile, Patient $patient, Agenda $agenda, Doctor $doctor, Endereco $endereco)
    {
        $this->endereco = $endereco;
        $this->doctor = $doctor;
        $this->agenda = $agenda;
        $this->patient = $patient;
        $this->employee = $employee;
        $this->profile = $profile;
    }

    public function funcionarios(){
        $profile = $this->profile;
        $employee =  $this->employee->latest()->paginate(10);
        return view('admin.pages.listagem.funcionarios.index', [
            'profiles' => $profile,
            'employees' => $employee,
        ]);
    }

    public function createFuncionario(){
        $profile = $this->profile;
        $employee =  $this->employee;
        $doctor = $this->doctor;
        $endereco = $this->endereco;

        return view('admin.pages.cadastros.funcionarios.index', [
            'profiles' => $profile,
            'employees' => $employee,
            'doctors' => $doctor,
            'enderecos' => $endereco,
        ]);
    }

    public function storeFuncionario(Request $request){
        //dd($request->all()); //conferir se está pegando dados
        
        $profile = $this->profile;

        $data = $request->all();
        if($data['crm'] != null){
            $profile->create($request->all())->employees()->create($request->all())->doctors()->create($request->all()); //cria perfil -> empregado -> doctor
        }else{
            $profile->create($request->all())->employees()->create($request->all());
        }
        //$data->employees()->create($request->all()); //cria empregado
        //$employee->doctors()->create($request->all());

        return redirect()->route('funcionarios.create')->with('message', 'Registrado com sucesso');
    }

    public function createPaciente(){
        $profile = $this->profile;
        $patient =  $this->patient;
        $endereco = $this->endereco;

        return view('admin.pages.cadastros.pacientes.index', [
            'profiles' => $profile,
            'patients' => $patient,
            'enderecos' => $endereco,
        ]);
    }

    public function storePaciente(Request $request){
        //dd($request->all()); //conferir se está pegando dados
        
        $profile = $this->profile;

        $profile->create($request->all())->patients()->create($request->all()); //cria perfil -> paciente

        return redirect()->route('pacientes.create')->with('message', 'Registrado com sucesso');
    }



}
