<?php

namespace App\Models\Organisation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'department_location',
        'organisation_id',
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }


    public function scopeSearch($query, $val){
        $query->where('department_name', 'like', '%'.$val.'%');

    }
}
