<?php
namespace App\Utils;

trait CommonTrait{
	public function generateObj($mainFolder = 'Utils', $subFolder = '', $className = 'CommonTrait') {
		if (empty($mainFolder) === false) {
			if (empty($className) === false) {
				$className = ucfirst($className);
				$path = "\\App\\";
				if (empty($subFolder) === false) {
					$subFolder = ucfirst($subFolder);
					$path = $path.$subFolder."\\".$className;
				} else {
					$path = $path."\\".$className;
				}
				\Log::info('path in CommonTrait '.json_encode($path));
				$obj = false;
				if (class_exists($path))
					$obj = app()->make($path);		

				return $obj;
			}	
		}

		return false;
	}
}