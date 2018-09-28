<?php
	namespace App\Http\Controllers;
	
	
	class PageController extends Controller {
		public function getHome() {
			$cacheHash = date('h:i:s');
			$cacheHash = hash('crc32', $cacheHash, '');
			return view('pages.home')->with('test', $cacheHash);
		}
	}