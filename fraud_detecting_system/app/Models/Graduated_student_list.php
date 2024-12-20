<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduated_student_list extends Model
{
    use HasFactory;


    protected $fillable = [
        'first_name',	
        'last_name',	
        'grand_father_name',	
        'id_number',	
        'gender',	
        'email',	
        'mobile_number',	
        'year_of_graduation',	
        'admission_type',	
        'degree_type',	
        'college',	
        'department',	
        'gpa',
        'account_id',

    ];
    
    protected $primaryKey = 'account_id';
    
            public function user()
        {
            return $this->belongsTo('App\Models\User', 'id');
        }

}
