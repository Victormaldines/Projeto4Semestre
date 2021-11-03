<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Sessao;

$sessao = Sessao::getSessoes();
include __DIR__ .'/includes/header.php';
include __DIR__ .'/includes/sessoes.php';
include __DIR__ .'/includes/footer.php';
