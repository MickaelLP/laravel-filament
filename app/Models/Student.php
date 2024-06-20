<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['lastname', 'firstname', 'email', 'study_id', 'disabled'];

    public function study(){
        return $this->belongsTo(Study::class);
    }
}
