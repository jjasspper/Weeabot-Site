/**
 * Created by Jasper van Hienen
 * For: Weeabot-Site
 * Date: September 26 2018
 * Time: 23:14
 */

requirejs.config({
   urlArgs: 'cache=' + (new Date()).getTime(),
   paths: {
       //Application files
       "loader" : "src/loader",

       //Library files
       "jquery" : "lib/jquery",
   }
});

requirejs(["jquery", "loader"], function($, loader) {
    $(document).on('ready', function () {
        console.log('ready');
        loader.init();
    });
});
