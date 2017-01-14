<?php



$ornab = new Theme_E\Person ('Ornab Ahmed');

$staff = new Theme_E\Staff([$ornab]);

$theme = new Theme_E\Buisiness($staff);

$theme->hire(new Theme_E\Person('asif'));

var_dump($theme->getStaffMembers());