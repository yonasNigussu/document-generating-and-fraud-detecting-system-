<?php
namespace App\Imports;

use App\Models\Graduated_student_list;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class StudentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Graduated_student_list([
            'first_name'=> $row['first_name'],
            'last_name'    => $row['last_name'], 
            'grand_father_name'    => $row['grand_father_name'],
            'id_number'    =>('DDU').$row['id_number'],
            'gender'    => $row['gender'],
            'email'    => $row['email'],
            'mobile_number'    => $row['mobile_number'],
            'year_of_graduation'    => $row['year_of_graduation'],
            'admission_type'    => $row['admission_type'],
            'degree_type'    => $row['degree_type'],
            'college'    => $row['college'],
            'department'    => $row['department'],
            'gpa'    => $row['gpa'],
            'account_id'    =>$row['id_number'],
           // 'password' => Hash::make($row['password']),
        ]);
    }
}