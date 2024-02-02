<?php

namespace App\Models\Organisation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'organisation_name',
        'organisation_logo',
        'organisation_mission',
        'organisation_vision',
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
