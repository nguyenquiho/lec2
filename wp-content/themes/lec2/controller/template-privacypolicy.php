<?php
/**
 * Template Name: Privacy Policy Page Template
 */

$singlePage = new \App\Services\Page\Single();

$data = $singlePage->execute();

return [
    'view' => 'pages/datenschutz/datenschutz.twig',
    'data' =>  $data
];

