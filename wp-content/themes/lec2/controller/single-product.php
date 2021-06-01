<?php
$singlePage = new \App\Services\Product\Single();
$data = $singlePage->execute();
$data['custom_data']["checkout_url"] = "/wp-admin/admin-ajax.php?action=add_to_cart";

return [
    'view' => 'pages/trainings-overview-listing-detail/trainings-overview-listing-detail.twig',
    'data' => $data
];

?>

