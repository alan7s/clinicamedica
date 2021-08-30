<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PlanController,
    DetailPlanController,
    DoctorController,
    ProfileController,
    EmployeeController,
    EnderecoController,
    PatientController,
    AgendaController,
    ListagemController
};

Route::prefix('admin')->group(function(){

    //route listagem
    Route::get('listagem/agendamentos', [ListagemController::class, 'agendamentos'])->name('agendamentos.listagem');
    Route::get('listagem/pacientes', [ListagemController::class, 'pacientes'])->name('pacientes.listagem');
    Route::get('listagem/funcionarios', [ListagemController::class, 'funcionarios'])->name('funcionarios.listagem');

    //routes agendas
    Route::get('doctors/{idDoctor}/agendas/create', [AgendaController::class, 'create'])->name('agendas.doctor.employee.profile.create');
    Route::delete('doctors/{idDoctor}/agendas/{idagenda}', [AgendaController::class, 'destroy'])->name('agendas.doctor.employee.profile.destroy');
    Route::get('doctors/{idDoctor}/agendas/{idagenda}', [AgendaController::class, 'show'])->name('agendas.doctor.employee.profile.show');
    Route::put('doctors/{idDoctor}/agendas/{idagenda}', [AgendaController::class, 'update'])->name('agendas.doctor.employee.profile.update');
    Route::get('doctors/{idDoctor}/agendas/{idagenda}/edit', [AgendaController::class, 'edit'])->name('agendas.doctor.employee.profile.edit');
    Route::post('doctors/{idDoctor}/agendas/', [AgendaController::class, 'store'])->name('agendas.doctor.employee.profile.store');
    Route::get('doctors/{idDoctor}/agendas/', [AgendaController::class, 'index'])->name('agendas.doctor.employee.profile.index');

    //routes enderecos
    Route::get('enderecos/create', [EnderecoController::class, 'create'])->name('enderecos.create');
    Route::put('enderecos/{id}', [EnderecoController::class, 'update'])->name('enderecos.update');
    Route::get('enderecos/{id}/edit', [EnderecoController::class, 'edit'])->name('enderecos.edit');
    Route::any('enderecos/search', [EnderecoController::class, 'search'])->name('enderecos.search');
    Route::delete('enderecos/{id}', [EnderecoController::class, 'destroy'])->name('enderecos.destroy');
    Route::get('enderecos/{id}', [EnderecoController::class, 'show'])->name('enderecos.show');
    Route::post('enderecos', [EnderecoController::class, 'store'])->name('enderecos.store');
    Route::get('enderecos', [EnderecoController::class, 'index'])->name('enderecos.index');

    //routes doctors
    Route::get('employees/{idEmployee}/doctors/create', [DoctorController::class, 'create'])->name('doctors.employee.profile.create');
    Route::delete('employees/{idEmployee}/doctors/{iddoctor}', [DoctorController::class, 'destroy'])->name('doctors.employee.profile.destroy');
    Route::get('employees/{idEmployee}/doctors/{iddoctor}', [DoctorController::class, 'show'])->name('doctors.employee.profile.show');
    Route::put('employees/{idEmployee}/doctors/{iddoctor}', [DoctorController::class, 'update'])->name('doctors.employee.profile.update');
    Route::get('employees/{idEmployee}/doctors/{iddoctor}/edit', [DoctorController::class, 'edit'])->name('doctors.employee.profile.edit');
    Route::post('employees/{idEmployee}/doctors/', [DoctorController::class, 'store'])->name('doctors.employee.profile.store');
    Route::get('employees/{idEmployee}/doctors/', [DoctorController::class, 'index'])->name('doctors.employee.profile.index');    

    //routes patients
    Route::get('profiles/{id}/patients/create', [PatientController::class, 'create'])->name('patients.profile.create');
    Route::delete('profiles/{id}/patients/{idpatient}', [PatientController::class, 'destroy'])->name('patients.profile.destroy');
    Route::get('profiles/{id}/patients/{idpatient}', [PatientController::class, 'show'])->name('patients.profile.show');
    Route::put('profiles/{id}/patients/{idpatient}', [PatientController::class, 'update'])->name('patients.profile.update');
    Route::get('profiles/{id}/patients/{idpatient}/edit', [PatientController::class, 'edit'])->name('patients.profile.edit');
    Route::post('profiles/{id}/patients', [PatientController::class, 'store'])->name('patients.profile.store');
    Route::get('profiles/{id}/patients', [PatientController::class, 'index'])->name('patients.profile.index');

    //routes employees
    Route::get('profiles/{id}/employees/create', [EmployeeController::class, 'create'])->name('employees.profile.create');
    Route::delete('profiles/{id}/employees/{idEmployee}', [EmployeeController::class, 'destroy'])->name('employees.profile.destroy');
    Route::get('profiles/{id}/employees/{idEmployee}', [EmployeeController::class, 'show'])->name('employees.profile.show');
    Route::put('profiles/{id}/employees/{idEmployee}', [EmployeeController::class, 'update'])->name('employees.profile.update');
    Route::get('profiles/{id}/employees/{idEmployee}/edit', [EmployeeController::class, 'edit'])->name('employees.profile.edit');
    Route::post('profiles/{id}/employees', [EmployeeController::class, 'store'])->name('employees.profile.store');
    Route::get('profiles/{id}/employees', [EmployeeController::class, 'index'])->name('employees.profile.index');
    
    //routes profiles
    Route::get('profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
    Route::put('profiles/{id}', [ProfileController::class, 'update'])->name('profiles.update');
    Route::get('profiles/{id}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::any('profiles/search', [ProfileController::class, 'search'])->name('profiles.search');
    Route::delete('profiles/{id}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
    Route::get('profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');
    Route::post('profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('profiles', [ProfileController::class, 'index'])->name('profiles.index');

    //routes details plans
    Route::get('plans/{url}/details/create', [DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::delete('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'destroy'])->name('details.plan.destroy');
    Route::get('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'show'])->name('details.plan.show');
    Route::put('plans/{url}/details/{idDetail}', [DetailPlanController::class, 'update'])->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit', [DetailPlanController::class, 'edit'])->name('details.plan.edit');
    Route::post('plans/{url}/details', [DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('plans/{url}/details', [DetailPlanController::class, 'index'])->name('details.plan.index');

    //routes Plans
    Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}', [PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [PlanController::class, 'search'])->name('plans.search');
    Route::delete('plans/{url}', [PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}', [PlanController::class, 'show'])->name('plans.show');
    Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
    //route home dashboard
    Route::get('/', [PlanController::class, 'index'])->name('admin.index');
});

Route::get('/', function () {
    return view('welcome');
});

//routes auth
Auth::routes();