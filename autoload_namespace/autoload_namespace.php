<?php







$ornab = new Person ('Ornab Ahmed');

$staff = new Staff([$ornab]);

$theme = new Buisiness($staff);

$theme->hire(new Person('asif'));

var_dump($theme->getStaffMembers());