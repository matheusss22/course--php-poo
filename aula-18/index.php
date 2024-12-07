<?php

require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule("Teste", "Testando");
echo $slug->slugify("Teste com acentuação para geração de slug", "-");
