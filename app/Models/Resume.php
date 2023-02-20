<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resumes';

    public static function getResume() {
        $records = DB::table('resumes')->select('position', 'first_name', 'last_name', 'email', 'phone', 'date_of_birth', 'gender', 'maritial_status', 'nationality', 'religion', 'address', 'objective', 'level_of_education', 'degree_title', 'major', 'institute', 'result', 'year_of_passing', 'company_name', 'company_business', 'designation', 'department', 'responsibilities', 'company_location', 'employment_year', 'employment_month')->get()->toArray();
        return $records;
    }
}
