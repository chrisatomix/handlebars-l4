<?php
namespace ChrisAtomix\HandlebarsL4;

use Illuminate\View\Engines\EngineInterface;
use Illuminate\Filesystem\Filesystem;
use Handlebars_Engine;

class HandlebarsEngine implements EngineInterface {

	public function __construct(Filesystem $files)
	{
		$this->files = $files;
	}

	public function get($path, array $data = array())
	{
		$view = $this->files->get($path);
		$app = app();
		$m = new Handlebars_Engine( $app['config']->get('handlebars-l4::config') );

 		$data = array_map(function($item){
			return (is_object($item) && method_exists($item, 'toArray')) ? $item->toArray() : $item;
		}, $data);

		return $m->render($view, $data);
	}

}
