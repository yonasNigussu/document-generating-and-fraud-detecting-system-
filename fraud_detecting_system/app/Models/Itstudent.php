<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itstudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',	
        'last_name',	
        'grand_father_name',	
        'id_number',	
        'advanced_database',	
        'datastructure_and_algorithms',	
        'java_programming',	
        'internet_programming',	
        'software_engineering',	
        'python',	
        'computer_graphics',	
        'mobile_application_development',	
        'computer_security',
        'compiler_design',
        'multimedia',
        'operating_system',
        'introduction_to_artificial_intelligence',
        'linear_algebra',
        'department_id',

    ];

    protected $primaryKey = 'department_id';
}
