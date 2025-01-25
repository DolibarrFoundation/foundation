<?php
/* Copyright (C) 2013 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2023 Alexandre Janniaux   <alexandre.janniaux@gmail.com>
 * Copyright (C) 2024		MDW							<mdeweerd@users.noreply.github.com>
 * Copyright (C) 2024       Frédéric France         <frederic.france@free.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 * or see https://www.gnu.org/
 */

/**
 *      \file       test/phpunit/LangTest.php
 *		\ingroup    test
 *      \brief      PHPUnit test
 *		\remarks	To run this script as CLI:  phpunit filename.php
 */

global $conf,$user,$langs,$db;
//define('TEST_DB_FORCE_TYPE','mysql');	// This is to force using mysql driver
//require_once 'PHPUnit/Autoload.php';

if (! defined('NOREQUIREUSER')) {
	define('NOREQUIREUSER', '1');
}
if (! defined('NOREQUIREDB')) {
	define('NOREQUIREDB', '1');
}
if (! defined('NOREQUIRESOC')) {
	define('NOREQUIRESOC', '1');
}
if (! defined('NOREQUIRETRAN')) {
	define('NOREQUIRETRAN', '1');
}
if (! defined('NOCSRFCHECK')) {
	define('NOCSRFCHECK', '1');
}
if (! defined('NOTOKENRENEWAL')) {
	define('NOTOKENRENEWAL', '1');
}
if (! defined('NOREQUIREMENU')) {
	define('NOREQUIREMENU', '1'); // If there is no menu to show
}
if (! defined('NOREQUIREHTML')) {
	define('NOREQUIREHTML', '1'); // If we don't need to load the html.form.class.php
}
if (! defined('NOREQUIREAJAX')) {
	define('NOREQUIREAJAX', '1');
}
if (! defined("NOLOGIN")) {
	define("NOLOGIN", '1');       // If this page is public (can be called outside logged session)
}


use PHPUnit\Framework\TestCase;


/**
 * Class for PHPUnit tests
 *
 * @backupGlobals disabled
 * @backupStaticAttributes enabled
 * @remarks	backupGlobals must be disabled to have db,conf,user and lang not erased.
 */
class LangTest extends TestCase
{
	protected $savconf;
	protected $savuser;
	protected $savlangs;
	protected $savdb;

	/**
	 * Data provider for testLang
	 *
	 * @return array<string,array{0:string}>
	 */
	public function langDataProvider(): array
	{
		print __DIR__;
		$langCodes = [];
		$filesarray = scandir(__DIR__.'/../../langs');
		foreach ($filesarray as $key => $code) {
			if (! preg_match('/^[a-z]+_[A-Z]+$/', $code)) {
				continue;
			}
			if (in_array($code, array('mk_MK'))) {	// We exclude some language not yet ready
				continue;
			}
			$langCodes[$code] = [$code];
		}
		return $langCodes;
	}

	/**
	 * testLang
	 * @dataProvider langDataProvider
	 *
	 * @param 	string	$code 	Language code for which to verify translations
	 * @return 	void
	 */
	public function testLang($code): void
	{
		global $conf,$user,$langs,$db;
		$conf = $this->savconf;
		$user = $this->savuser;
		$langs = $this->savlangs;
		$db = $this->savdb;

		print "Check some syntax rules in the language file".PHP_EOL;
		$filesarray2 = scandir(__DIR__.'/../../langs/'.$code);
		foreach ($filesarray2 as $key => $file) {
			if (! preg_match('/\.lang$/', $file)) {
				continue;
			}

			print 'Check lang file '.$file.PHP_EOL;
			$filecontent = file_get_contents(__DIR__.'/../../langs/'.$code.'/'.$file);

			$result = preg_match('/=--$/m', $filecontent);	// A special % char we don't want. We want the common one.
			$this->assertTrue($result == 0, 'Found a translation KEY=-- in file '.$code.'/'.$file.'. We probably want Key=- instead.');

			$result = strpos($filecontent, '％');	// A special % char we don't want. We want the common one.
			print "Result for checking we don't have bad percent char = ".$result.PHP_EOL;
			$this->assertTrue($result === false, 'Found a bad percent char ％ instead of % in file '.$code.'/'.$file);

			$result = strpos($filecontent, '%,');   // A special % char we don't want. We want the common one.
			//print $prefix."Result for checking we don't have bad percent char = ".$result.PHP_EOL;
			$this->assertTrue($result === false, 'Found a bad percent char % in file '.$code.'/'.$file);

			$result = preg_match('/%n/m', $filecontent);	// A sequence of char we don't want
			$this->assertTrue($result == 0, 'Found a sequence %n in the translation file '.$code.'/'.$file.'. We probably want %s');

			$result = preg_match('/<<<<</m', $filecontent);	// A sequence of char we don't want
			$this->assertTrue($result == 0, 'Found a sequence <<<<< in the translation file '.$code.'/'.$file.'. Probably a bad merge of code were done.');

			$reg = array();
			$result = preg_match('/(.*)\'notranslate\'/im', $filecontent, $reg);	// A sequence of char we don't want
			$this->assertTrue($result == 0, 'Found a sequence tag \'notranslate\' in the translation file '.$code.'/'.$file.' in line '.empty($reg[1]) ? '' : $reg[1]);

			if (!in_array($code, array('ar_SA'))) {
				$reg = array();
				$result = preg_match('/(.*)<([^a-z\/\s,=\(]1)/im', $filecontent, $reg);	// A sequence of char we don't want
				//print $prefix."Result for checking we don't have bad percent char = ".$result.PHP_EOL;
				//$this->assertTrue($result == 0, 'Found a sequence tag <'.(empty($reg[2]) ? '' : $reg[2]).' in the translation file '.$code.'/'.$file.' in line '.empty($reg[1]) ? '' : $reg[1]);
			}
		}
	}
}
