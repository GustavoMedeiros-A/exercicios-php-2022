<?php

namespace Galoa\ExerciciosPhp2022\War\GamePlay\Country;

/**
 * Defines a country, that is also a player.
 */
class BaseCountry implements CountryInterface {

  /**
   * The name of the country.
   *
   * @var string
   */
  protected string $name;
  protected array $neighbors;
  protected int $numberOfTroops = 3;
  protected bool $conquered;
  protected string $conqueredCountries;




  

  /**
   * Builder.
   *
   * @param string $name
   *   The name of the country.
   */
  public function __construct(string $name) {
    $this-> name = $name;
	$this-> conquered = false;
	$this-> neighbors = [];
	$this-> conqueredCountries = 0;

  }

	/**
	 * Gets the name of a country.
	 *
	 * There are no two countries with the same name.
	 *
	 * @return string
	 */
	function getName(): string {
    return $this -> name;

	}
	
	/**
	 * Sets the neighbors of this country.
	 *
	 * This method is run ONLY ONCE on the game creation. You must handle the
	 * addition of additional neighbors in the conquer() method.
	 *
	 * @param array $neighbors
	 */
	function setNeighbors(array $neighbors): void {
		//Foreach
	}
	
	/**
	 * Lists the neighbors of a country.
	 *
	 * When the country is initialized, it receives an array of neighbours by the
	 * game manager. Before any round, this array is exactly what getNeighbors()
	 * should return.
	 *
	 * When a country conquers another, it should add this country neighbors to
	 * its own. You should make sure, however, that you do NOT duplicated
	 * countries in the array, nor return the current country as itself.
	 *
	 * @return array
	 */
	function getNeighbors(): array {
    return $this -> neighbors;
	}
	
	/**
	 * Returns how many troops there currently are in this country.
	 *
	 * @return int
	 */
	function getNumberOfTroops(): int {
    return $this -> numberOfTroops;
	}
	
	/**
	 * Determines whether the player has been conquered.
	 *
	 * When a country is conquered, its object is not destroyed but it will be
	 * flagged as "conquered", so that the game manager knows it will no longer be
	 * playing. Your code should handle this flag and return the information
	 * properly.
	 *
	 * @return bool
	 */
	function isConquered(): bool {
		return $this-> getNumberOfTroops() == 0;
}
	/**
	 * Called when, after a battle, the defending country end up with 0 troops.
	 *
	 * Here, you must register the neighbors of the conquered country as your own.
	 *
	 * @param CountryInterface $conqueredCountry
	 */
	function conquer(CountryInterface $conqueredCountry): void {
    $neighbors = $conqueredCountry;
	// Foreach
    return;
	}
	
	/**
	 * Decreases the number of troops in this country by a given number.
	 *
	 * @param int $killedTroops
	 */
	function killTroops(int $killedTroops): void {
    $this->numberOfTroops -= $killedTroops;
	if($this->numberOfTroops <= 0) {
		$this-> conquered = true;
		$this->numberOfTroops = 0;
	}
	}

	function addTroops() :void {
		$newTroops = 3 + $this->conqueredCountries;
		$this->numberOfTroops += $newTroops;
	}
}