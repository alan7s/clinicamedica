<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PlanController,
    DetailPlanController,
    ProfileController,
    EmployeeController,
};

Route::prefix('admin')->group(function(){


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