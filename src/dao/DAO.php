<?php

class DAO {
	private static $dbHost = "ID281945_20182019.db.webhosting.be";
	private static $dbName = "ID281945_20182019";
	private static $dbUser = "ID281945_20182019";
	private static $dbPass = "xto-4NM-XEC-KVw";
	private static $sharedPDO;
	protected $pdo;

  // Constructor
	function __construct() {
		if(empty(self::$sharedPDO)) {
			self::$sharedPDO = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPass);
			self::$sharedPDO->exec("SET CHARACTER SET utf8");
			self::$sharedPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$sharedPDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}
		$this->pdo =& self::$sharedPDO;
	}
}
?>
