<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index() {
        return view('lesson.index', [
            'title_topbar' => 'Lesson Page',
        ]);
    }

    public function detail() {
        return view('lesson.detail', [
            'title_topbar' => 'Detail Lesson',
        ]);
    }

    public function create() {
        return view('lesson.create', [
            'title_topbar' => 'Add New Lesson',
        ]);
    }

    public function edit() {
        return view('lesson.edit', [
            'title_topbar' => 'Edit Lesson',
        ]);
    }
}
