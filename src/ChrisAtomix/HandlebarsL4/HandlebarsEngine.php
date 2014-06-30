<?php
namespace ChrisAtomix\HandlebarsL4;

use Illuminate\View\Engines\EngineInterface;
use Illuminate\Filesystem\Filesystem;
use Handlebars\Handlebars;

class HandlebarsEngine implements EngineInterface {

  public function __construct(Filesystem $files)
  {
    $this->files = $files;
  }

  public function get($path, array $data = array())
  {
    $path = basename($path);
    $app = app();
    //$config = $app['config']->get('handlebars-l4::config');

    $m = new Handlebars(array(
      'loader'          => new \Handlebars\Loader\FilesystemLoader(
        app_path().'/views/',
        array(
          'extension' => '.hbs.php'
        )
      ),
      'partials_loader' => new \Handlebars\Loader\FilesystemLoader(
        app_path() . '/views/',
        array(
          'extension' => '.hbs.php',
          'prefix' => '_'
        )
      )
    ));

    $data = array_map(function($item){
      return (is_object($item) && method_exists($item, 'toArray')) ? $item->toArray() : $item;
    }, $data);

    return $m->render($path, $data);
  }

}
