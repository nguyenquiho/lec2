<?php
/**
 * Template Name: News Page Template
 */

$singlePage     = new \App\Services\Page\Single();
$data           = $singlePage->execute();

return [
    'view' => 'pages/news/news.twig',
    'data' =>  $data
];