<?php

namespace App\Http\Controllers\Admin\ACL;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Profile;
use Illuminate\Http\Request;

class EmployeeProfileController extends Controller
{
    protected $profile, $employee;

    public function __construct(Profile $profile, Employee $employee){
        $this->profile = $profile;
        $this->employee = $employee;
    }

    //listar employee de um profile
    public function employees($idProfile){
        $profile = $this->profile->find($idProfile);
        if(!$profile){
            return redirect()->back();
        }

        $employees = $profile->employees()->paginate();

        return view('admin.pages.profiles.employees.employees', compact('profile', 'employees'));
    }
}
