<?php

namespace App\Http\Controllers\Api;

use App\Data\TasksData;
use App\Http\Controllers\Controller;
use App\Models\TaskManagement;

class TaskManagementController extends Controller
{

    public function index(){
        $data = TaskManagement::select('id','title','description','status')->get();
        return response()->json(TasksData::collect($data),200);
    }
}
