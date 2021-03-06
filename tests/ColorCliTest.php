<?php
/**
* Use PHPUnit Extension
*/
use PHPUnit_Framework_TestCase as PHPUnit;
use Application\ColorCli as ColorCli;

/**
* Test of class ColorCli
* @author Natan Augusto <natanaugusto@gmail.com>
*/
class ColorCliTest extends PHPUnit {
	public function setUp() {
		$this->font_colors = array('black',
			'dark_gray',
			'blue',
			'light_blue',
			'green',
			'light_green',
			'cyan',
			'light_cyan',
			'red',
			'light_red',
			'purple',
			'light_purple',
			'brown',
			'yellow',
			'light_gray',
			'white',
			);

		$this->background_colors = array(
			'black',
			'red',
			'green',
			'yellow',
			'blue',
			'magenta',
			'cyan',
			'light_gray',
			);
	}

	public function testColorString()  {
		$this->assertEquals("\033[0;35m\033[43mTesting Colors class\033[0m",
			ColorCli::getString('Testing Colors class', 'purple', 'yellow'),"
			Can't write string with font color purple and background yellow");

		$this->assertEquals("\033[0;35m\033[43mTesting Colors class\033[0m\n",
			ColorCli::getString('Testing Colors class', 'purple', 'yellow', true),"
			Can't write string with font color purple and background yellow with a breakline");
	}

	public function testGetFontColors() {
		$this->assertEquals($this->font_colors, ColorCli::getFontColors(), "Can't load font colors");
	}

	public function testGetBackgroundColors() {
		$this->assertEquals($this->background_colors, ColorCli::getBackgroundColors(), "Can't load background colors");
	}

	public function tearDown() {

	}
}