<?php

namespace App\Exports;

use App\Models\Resume;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ResumeExport implements FromCollection, WithHeadings
{

	public function headings():array{
		return[
			'position',
			'first_name',
			'last_name',
			'email',
			'phone',
			'date_of_birth',
			'gender',
			'maritial_status',
			'nationality',
			'religion',
			'address',
			'objective',
			'level_of_education',
			'degree_title',
			'major',
			'institute',
			'result',
			'year_of_passing',
			'company_name',
			'company_business',
			'designation',
			'department',
			'responsibilities',
			'company_location',
			'employment_year',
			'employment_month'
		];
	}

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Resume::all();
        return collect(Resume::getResume());
    }
}
