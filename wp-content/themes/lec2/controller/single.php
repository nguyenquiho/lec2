<?php
$singlePage                     = new \App\Services\Post\Single();
$data                           = $singlePage->execute();
$data['custom_data']['video']   = apply_filters("modify_post_type", $data['custom_data']['video']);

return [
    'view' => 'pages/news-detail/news-detail.twig',
    'data' => $data
];