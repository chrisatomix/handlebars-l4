<?php

return array(

	// The class prefix for compiled templates.
	//'template_class_prefix' => '__Handlebars_',

	// A cache directory for compiled templates. Handlebars will not cache templates unless this is set.
    //'cache' => storage_path() . '/cache/views/handlebars',

    // A cache directory for compiled templates. Handlebars will not cache templates unless this is set.
    //'loader' => App::make('ChrisAtomix\HandlebarsL4\FilesystemLoader'),

    // Override default permissions for cache files. Defaults to using the system-defined umask.
    // It is strongly recommended that you configure your umask properly rather than overriding permissions here.
    // 'cache_file_mode' => 0666,

    // A Handlebars loader instance for partials. If none is specified, defaults to an ArrayLoader for the supplied
    // partials option, if present, and falls back to the specified template loader.
    //'partials_loader' => App::make('ChrisAtomix\HandlebarsL4\FilesystemLoader', array('prefix'=>'_')),

    // An array of Handlebars partials. Useful for quick-and-dirty string template loading,
    // but not as efficient or lazy as a Filesystem (or database) loader.
    // 'partials' => array(),

    // An array of 'helpers'. Helpers can be global variables or objects, closures (e.g. for higher order sections),
    // or any other valid Handlebars context value. They will be prepended to the context stack,
    // so they will be available in any template loaded by this Handlebars instance.
    // 'helpers' => array(),

    // An 'escape' callback, responsible for escaping double-handlebars variables. Defaults to htmlspecialchars.
    // 'escape' => function($value) {
    //     return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    // },

    // Character set for htmlspecialchars. Defaults to UTF-8.
    // 'charset' => 'ISO-8859-1',

    // A Handlebars logger instance. No logging will occur unless this is set. Using a PSR-3 compatible logging
    // library—such as Monolog—is highly recommended. A simple stream logger implementation is available as well.
    // 'logger' => new Handlebars_Logger_StreamLogger('php://stderr'),

    // Only treat Closure instances and invokable classes as callable. If true, values like
    // array('ClassName', 'methodName') and array($classInstance, 'methodName'), which are
    // traditionally "callable" in PHP, are not called to resolve variables for interpolation
    // or section contexts. This helps protect against arbitrary code execution when user input
    // is passed directly into the template.
    // 'strict_callables' => true,
);