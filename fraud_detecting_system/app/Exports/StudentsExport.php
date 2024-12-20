<?php
namespace App\Exports;
use App\Models\User;
use App\Models\Graduated_student_list;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Graduated_student_list::select("first_name","last_name","grand_father_name","id_number","gender","email","mobile_number","year_of_graduation","admission_type","degree_type",
                                              "college","department","gpa" )->get();
      // return Graduated_student_list::all()->get();
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["first_name","last_name","grand_father_name","id_number","gender","email","mobile_number","year_of_graduation","admission_type","degree_type",
        "college","department","gpa"];
    }
}