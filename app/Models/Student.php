<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    function getFullNameAttribute()
    {
        return "{$this->last_name} {$this->first_name}";
    }

    function getGenderNameAttribute()
    {
        return $this->gender == '1' ? 'Male' : 'Female';
    }

    function getCountAgeAttribute()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $date = $this->birthday;
        return $now->diffInYears($date);
    }
}
