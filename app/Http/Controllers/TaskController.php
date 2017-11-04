<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
		$tasks = [
		'Install and Run Laravel Framework',
		'Git',
		'Laravel',
		'Vue.js',
		'Send your work'
	];
	return view('tasks', compact('tasks'));
	}
}
