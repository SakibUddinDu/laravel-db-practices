<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function show($id) {
    $course = Course::with(['platform', 'topics','series'])->findOrFail($id);
    // $course = Course::findOrFail($id);
    return $course;
    } //
}
