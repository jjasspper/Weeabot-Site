/**
 * Created by Jasper van Hienen
 * For: Weeabot-Site
 * Date: September 26 2018
 * Time: 23:14
 */

requirejs.config({
	paths: {
		//Application files
		"loader": "src/loader",

		//Library files
		"jquery": "lib/jquery",
	}
});

requirejs(["jquery", "loader"], function ($, loader) {
	loader.init();
});
