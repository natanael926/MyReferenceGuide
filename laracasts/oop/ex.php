<?php

require 'src/Person.php';
require 'src/Business.php';
require 'src/Staff.php';

use App\Person;
use App\Staff;
use App\Business;

$natanael = new Person('Natanael Acosta');

$staff = new Staff([$natanael]);

$doctorpad = new Business($staff);

$doctorpad->hire(new Person('Miguel'));

var_dump($doctorpad->getStaffMembers());