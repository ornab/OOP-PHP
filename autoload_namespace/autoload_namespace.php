<?php

use Theme_E\Users\Person;
use Theme_E\Buisiness;
use Theme_E\Staff;


$ornab = new Person ('Ornab Ahmed');

$staff = new Staff([$ornab]);

$theme = new Buisiness($staff);

$theme->hire(new Person('asif'));

var_dump($theme->getStaffMembers());