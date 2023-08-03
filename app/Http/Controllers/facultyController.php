<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;

class facultyController extends Controller
{
    public function index() {

        $faculties = faculty::all();

        return view('faculty', compact('faculties'));
    }

    public function profileShow(faculty $faculty) {

        $educations = $faculty->education()->orderBy('id', 'DESC')->get();

        $experiences = $faculty->experience()->get();

        $publications = $faculty->publications()->get();

        $awards = $faculty->awards()->get();

        $add_infos = $faculty->additionalInfo()->get();

        return view('professor', compact(
            'faculty',
            'educations',
            'experiences',
            'publications',
            'awards',
            'add_infos'
        ));
    }
}
