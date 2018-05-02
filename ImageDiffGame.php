<?php

declare(strict_types=1);
ini_set('memory_limit', '-1');
set_time_limit(0);

class ImageDiffGame
{
	const SCREEN_IMAGE_NAME = 'screen';
	const SCREEN_IMAGE_EXT = 'png';
	const SCREEN_IMAGE_PATH = 'screen';
	
	public function __construct()
	{
	
	}
	
	public function startUp()
	{
	
	}
	
//	private function getRGB(int $x, int $y): array
//	{
//		$colorIndex = imagecolorat($this->_image, $x, $y);
//		$colorRGB = imagecolorsforindex($this->_image, $colorIndex);
//		return $colorRGB;
//	}
//
	/**
	 * 截图
	 */
	public function screenCap()
	{
		$imageName = static::SCREEN_IMAGE_NAME . '.' . static::SCREEN_IMAGE_EXT;
		$imagePath = static::SCREEN_IMAGE_PATH . '/' . $imageName;
		system("adb shell screencap -p /sdcard/{$imageName}");
		system("adb pull /sdcard/{$imageName} ./{$imagePath}");
	}
	
}

(new ImageDiffGame())->startUp();