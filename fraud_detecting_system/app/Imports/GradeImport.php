<?php
namespace App\Imports;

use App\Models\Graduated_student_list;
use App\Models\Csstdudent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class GradeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Csstdudent([
            'first_name'=> $row['first_name'],
            'last_name'    => $row['last_name'], 
            'grand_father_name'    => $row['grand_father_name'],
            'id_number'    =>('DDU').$row['id_number'],
            'advanced_database'    => $row['advanced_database'],
            'datastructure_and_algorithms'    => $row['datastructure_and_algorithms'],
            'java_programming'    => $row['java_programming'],
            'internet_programming'    => $row['internet_programming'],
            'software_engineering'    => $row['software_engineering'],
            'python'    => $row['python'],
            'computer_graphics'    => $row['computer_graphics'],
            'mobile_application_development'    => $row['mobile_application_development'],
            'computer_security'    => $row['computer_security'],
            'compiler_design'    =>$row['compiler_design'],
            'multimedia'    =>$row['multimedia'],
            'operating_system'    =>$row['operating_system'],
            'introduction_to_artificial_intelligence'    =>$row['introduction_to_artificial_intelligence'],
            'linear_algebra'    =>$row['linear_algebra'],
            'department_id'    =>$row['id_number'],
           // 'password' => Hash::make($row['password']),
        ]);
    }
}