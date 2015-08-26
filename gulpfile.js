var elixir = require('laravel-elixir');

var paths = {
	'adminlte': '../../vendor/adminlte',
	'ionic': '../../vendor/ionic'
};

elixir(function(mix) {
    mix
        // Copy webfont files from /vendor directories to /public directory.
        .copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts')
        .copy('vendor/twbs/bootstrap-sass/assets/fonts/bootstrap', 'public/build/fonts/bootstrap')
        .copy('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor')

        .sass([ // Process front-end stylesheets
                'frontend/main.scss'
            ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
                'frontend/main.css'
            ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
                'plugins.js',
                'frontend/main.js'
            ], 'public/js/frontend.js')
/////////////////////////////////////////////////////////////////////////
        .sass([ // Process back-end stylesheets
            'backend/main.scss'
        ], 'resources/assets/css/backend/main.css')
        .styles([ // Combine pre-processed CSS files
                'backend/main.css',
                //paths.ionic + '/css/ionic.css',
		paths.adminlte + '/plugins/select2/select2.min.css',
		paths.adminlte + '/plugins/datepicker/datepicker3.css',
		paths.adminlte + '/plugins/datatables/dataTables.bootstrap.css',
		paths.adminlte + '/dist/css/AdminLTE.css',
		paths.adminlte + '/dist/css/skins/skin-blue.css',
            ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
	        paths.adminlte + '/plugins/fastclick/fastclick.min.js',
		paths.adminlte + '/dist/js/app.min.js',
		paths.adminlte + '/plugins/select2/select2.full.min.js',
		paths.adminlte + '/plugins/input-mask/jquery.inputmask.js',
		paths.adminlte + '/plugins/input-mask/jquery.inputmask.date.extensions.js',
		paths.adminlte + '/plugins/input-mask/jquery.inputmask.extensions.js',
		paths.adminlte + '/plugins/datepicker/bootstrap-datepicker.js',
		paths.adminlte + '/plugins/sparkline/jquery.sparkline.min.js',
		paths.adminlte + '/plugins/datatables/jquery.dataTables.min.js',
		paths.adminlte + '/plugins/datatables/dataTables.bootstrap.min.js',
		paths.adminlte + '/plugins/slimScroll/jquery.slimscroll.min.js',
		paths.adminlte + '/plugins/chartjs/Chart.min.js',
                'plugins.js',
                'backend/main.js'
            ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});

/**
 * Uncomment for LESS version
 */
/*elixir(function(mix) {
    mix
        // Copy webfont files from /vendor directories to /public directory.
        .copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/fonts', 'public/fonts')
        .copy('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor')

        .less([ // Process front-end stylesheets
            'frontend/main.less'
        ], 'resources/assets/css/frontend/main.css')
        .styles([  // Combine pre-processed CSS files
            'frontend/main.css'
        ], 'public/css/frontend.css')
        .scripts([ // Combine front-end scripts
            'plugins.js',
            'frontend/main.js'
        ], 'public/js/frontend.js')

        .less([ // Process back-end stylesheets
            'backend/AdminLTE.less',
        ], 'resources/assets/css/backend/AdminLTE.less')
        .styles([ // Combine pre-processed CSS files
            'bootstrap.css',
            'font-awesome.css',
            'backend/main.css',
            'backend/skin.css'
        ], 'public/css/backend.css')
        .scripts([ // Combine back-end scripts
            'plugins.js',
            'backend/main.js'
        ], 'public/js/backend.js')

        // Apply version control
        .version(["public/css/frontend.css", "public/js/frontend.js", "public/css/backend.css", "public/js/backend.js"]);
});*/
