<?php
	namespace App\Http\Controllers;
	
	
	class PageController extends Controller {
		public function getHome() {
			$test = 'testt';
			return view('pages.home')->with('test', $test);
		}
	}