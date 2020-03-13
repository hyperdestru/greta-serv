<?php

Class Wizard extends Player {

	public $heal = 20;

	public function healing($pTarget) {
		$pTarget->health += $this->heal;
		$pTarget->_clampLifeMax();
	}

	// Inheritance/overcharge of the method hit() of the parent class
	// but Wizards can only take 2 times less damage than regular Player
	protected function _hit($pDamage = 10) {
		parent::_hit($pDamage/2);
	}

}