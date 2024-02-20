<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function index ($id){

// Read the contents of the JSON file
$filePath = public_path('storage/data/projects.json');
// Check if the file exists
if (!file_exists($filePath)) {
    return 'JSON file not found.';
}

// Read the contents of the JSON file
$jsonContents = file_get_contents($filePath);

//dd($jsonContents);
// Decode the JSON data into an associative array
$projects = json_decode($jsonContents, true);

// Find the project with the specified ID
$project = collect($projects)->firstWhere('id', $id);

// Pass the project data to the view
return view('projects', compact('project'));



    }
}
