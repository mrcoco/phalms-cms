<?php 
namespace Modules\Cms\Plugin;
/**
 * 
 *
 * plugin Db create and Drop table
 *
 * @package phalms-cms
 * @author  Dwi Agus
 * @link    http://cempakaweb.com
 * @date:   2017-06-15
 * @time:   09:06:59
 * @license BSD-3-Clause
 */

class Publish extends extends \Phalcon\Mvc\User\Component
{
	
	function __construct($table)
	{
		$di = \Phalcon\DI::getDefault();
		$this->table = $table;
		$this->config = $di->get("config");
	}

	public function up()
	{

	}

	public function down()
	{

	}

	public function index()
	{
		echo $this->config->modules->core;
	}
}