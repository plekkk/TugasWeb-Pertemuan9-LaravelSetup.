<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $student = [
            'name' => 'Rafli',
            'program' => 'Pemrograman Web',
            'university' => 'Universitas Negeri Medan',
        ];

        $courses = ['HTML', 'CSS', 'PHP', 'Laravel'];

        return view('pages.home', compact('student', 'courses'));
    }

    public function about(): View
    {
        $profile = [
            'title' => 'Tentang Website',
            'description' => 'Website ini dibuat untuk memenuhi Tugas Rutin 9 Pemrograman Web.',
        ];

        return view('pages.about', compact('profile'));
    }

    public function contact(): View
    {
        $contact = [
            'email' => 'rafli@example.com',
            'course' => 'Pemrograman Web',
        ];

        return view('pages.contact', compact('contact'));
    }
}
