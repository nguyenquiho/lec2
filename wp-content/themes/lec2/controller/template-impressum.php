<?php
/**
 * Template Name: Impressum Page Template
 */

$singlePage = new \App\Services\Page\Single();

$data = $singlePage->execute();

return [
    'view' => 'pages/impressum/impressum.twig',
    'data' =>  $data
];