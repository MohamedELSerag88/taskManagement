<?php

namespace App\Models;

use Database\Factories\TasksFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskManagement extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','status' ];

    protected static function newFactory()
    {
        return TasksFactory::new();
    }
}
