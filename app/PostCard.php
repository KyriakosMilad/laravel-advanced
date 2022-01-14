<?php

namespace App;

class PostCard
{
	public static function __callStatic($method, $arguments)
	{
		return app()['PostCard']->$method(...$arguments);
	}
}
