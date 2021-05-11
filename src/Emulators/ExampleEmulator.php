<?php

namespace ManagerLib\Emulators;

/**
 * Example emulator implementation
 */

class ExampleEmulator
{

	/**
	 * Support encryptation
     * 
     * srp6 = For SRP6 Encryptation
     * hex = For hex
	 */
	protected $hasEncrypt = 'srp6';

    /**
	 * Array of expansion ids and their corresponding names
	 */
	private $expansions = [
		3 => "Cataclysm",
		2 => "WotLK",
		1 => "TBC",
		0 => "None"
	];

    /**
	 * Array of table names
	 */
	private $tables = [
		"account" => "accounts",
		"account_access" => "accounts",
		"account_banned" => "accounts",
		"characters" => "characters",
		"item_template" => "items",
		"character_stats" => "characters",
		"guild_member" => "guild_data",
		"guild" => "guilds",
		"gm_tickets" => "gm_tickets"
	];

    /**
	 * Array of table names
	 */
	private $columns = [
		"account" => [
			"id" => "acct",
			"username" => "login",
			"password" => "password",
			"email" => "email",
			"joindate" => "lastlogin",
			"last_ip" => "lastip",
			"last_login" => "lastlogin",
			"expansion" => "flags"
		]
	];

    /**
	 * Get the name of a table
	 * @param String $name
	 * @return String
	 */
	public function getTable($name)
	{
		if(array_key_exists($name, $this->tables))
		{
			return $this->tables[$name];
		}
	}

	/**
	 * Get the name of a column
	 * @param String $table
	 * @param String $name
	 * @return String
	 */
	public function getColumn($table, $name)
	{
		if(array_key_exists($table, $this->columns) && array_key_exists($name, $this->columns[$table]))
		{
			return $this->columns[$table][$name];
		}
	}


	/**
	 * @param mixed $hasEncrypt
	 * 
	 * @return [type]
	 */
	public function getEncrypt($hasEncrypt)
	{
        return $hasEncrypt;
	}


    /**
	 * Get the name of an expansion by the id
	 * @param Int $id
	 * @return String
	*/
	public function getExpansionName($id)
	{
		if(array_key_exists($id, $this->expansions))
		{
			return $this->expansions[$id];
		}
	}


}