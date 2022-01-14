<?php

namespace App\Mixins;

class StrMixin
{
	public function prefix()
	{
		return function ($str) {
			return 'b--' . $str;
		};
	}
}
