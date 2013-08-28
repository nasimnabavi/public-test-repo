<?php

namespace CG;

class Version
{
	const VERSION = '1.1.0-DEV';
	
	public static function getVersion()
	{
		return self::VERSION;	
	}
}
