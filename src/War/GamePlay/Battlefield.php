<?php

namespace Galoa\ExerciciosPhp2022\War\GamePlay;

use Galoa\ExerciciosPhp2022\War\GamePlay\Country\CountryInterface;

/**
 * A manager that will roll the dice and compute the winners of a battle.
 */
class Battlefield implements BattlefieldInterface {
	/**
	 * Rolls the dice for a country.
	 *
	 * @param CountryInterface $country
	 * @param bool $isAtacking
	 *
	 * @return array
	 */
	function rollDice(CountryInterface $country, bool $isAtacking): array {
	}
	
	/**
	 * Computes the winners and losers of a battle.
	 *
	 * @param CountryInterface $attackingCountry
	 * @param array $attackingDice
	 * @param CountryInterface $defendingCountry
	 * @param array $defendingDice
	 */
	function computeBattle(CountryInterface $attackingCountry, array $attackingDice, CountryInterface $defendingCountry, array $defendingDice): void {
	}
}
