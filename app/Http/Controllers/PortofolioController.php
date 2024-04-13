<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index() {
        $aboutMe = AboutMe::first();

        $projects = Project::all();

        $contacts = Contact::all();

        return view('portofolio', compact('aboutMe', 'projects', 'contacts'));
    }
}
