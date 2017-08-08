<?php
declare(strict_types=1);

/*
 * © AppleDevelops 2017
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author AppleDevelops
 *
*/

namespace avoltex\interfaces;

interface LanguageInterface {

	const LANGUAGES = [
		"English" => [
			"avoltex.command.npc.success" => "Successfully spawned the factions entity!",
			"avoltex.command.npc.usage" => "Invalid entity. Usage: /npc [factions:kitpvp:prisons]",
		],

		"Spanish" => [
			
		]
	];
}