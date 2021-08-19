<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PlanController,
    DetailPlanController,
    ACL\ProfileController,
    ACL\EmployeeController,
    ACL\EmployeeProfileController
};

Route::prefix('admin')->group(function(){

    //routes employee x profile
    Route::get('profiles/{id}/employees', [EmployeeProfileController::class, 'employees'])->name('profiles.employees');

    //routes employees
    Route::post('employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::get('employees', [EmployeeController::class, 'index'])->name('employees.index');
    
    //routes profiles
    Route::post('profiles', [ProfileController::class, 'store'])->name('profiles.store');
    Route::get('profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
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