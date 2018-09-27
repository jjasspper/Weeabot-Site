<?php
	namespace App\Http\Controllers;
	
	
	class PageController extends Controller {
		public function getHome() {
			$test = 'Dit is een test';
			return view('pages.home')->with('test', $test);
		}
	}