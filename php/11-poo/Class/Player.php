<?php

Class Player {
	
	public $health;
	public $attack;
	public $name;

	public function __construct($pName, $pAttack = 10) {
		$this->health = 100;
		$this->attack = $pAttack;
		$this->name = $pName;
	}

	public function getName() {
		return $this->name;
	}

	protected function _clampLifeMin() {
		if ($this->health < 0) {
			$this->health = 0;
		}
	}

	protected function _clampLifeMax() {
		if ($this->health > 100) {
			$this->health = 100;
		}
	}

	public function attacking($pTarget) {
		$pTarget->_hit($this->attack);
	}

	protected function _hit($pDamage = 10) {
		$this->health -= $pDamage;
		$this->_clampLifeMin();
	}

}