<?php

use Stu\StarsystemGenerator\Config\SystemConfiguration;

$config = new SystemConfiguration(1049);

$config->setAllowedGrowthPercentage(30);

$config->setMinSize(23);

$config->setHasPlanets(true);

$config->setHasMoons(true);

$config->setHasAsteroids(true);

$config->setMaxPlanets(12);

$config->setMaxMoons(35);

$config->setMaxAsteroids(50);



return $config;
