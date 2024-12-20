<?php
namespace App\Imports;

use App\Models\Graduated_student_list;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class AccountImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'=> $row['first_name'],
            'last_name' => $row['last_name'], 
            'grand_father_name'    => $row['grand_father_name'],
            'id_number'    =>('DDU').$row['id_number'], 
            'email'    => $row['email'],
            'mobile_number'    => $row['mobile_number'],
            'account_id' => $row['id_number'],
            'password' => Hash::make('12345678'),
        ]);
    }
}