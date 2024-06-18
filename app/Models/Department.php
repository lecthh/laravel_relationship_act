<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $primaryKey = 'deptid';
    public $incrementing = false;

    public function college()
    {
        return $this->belongsTo(College::class, 'deptcollid');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'progcolldeptid');
    }
}
