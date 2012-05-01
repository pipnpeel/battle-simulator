<?php

require_once('tests/Combatants/CombatantTest.php');
require_once('lib/Combatants/Grappler.php');
require_once('lib/Randomisation/BooleanGenerator.php');

class GrapplerTest extends CombatantTest {
    protected $attributes = array(
        'health'   => ['lower' => 60,  'upper' => 100],
        'strength' => ['lower' => 75,  'upper' => 80],
        'defence'  => ['lower' => 35,  'upper' => 40],
        'speed'    => ['lower' => 60,  'upper' => 80],
        'luck'     => ['lower' => 0.3, 'upper' => 0.4]
    );


    protected function createCombatant($randomiser = null) {
        return new Grappler($randomiser);
    }
}

