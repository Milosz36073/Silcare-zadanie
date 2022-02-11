<?php 

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://milosz-kita12.fakturownia.pl/invoices.json?include_positions=true&api_token=Hade15npSHeX3FxbcFP');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $invoices = curl_exec($curl);
    $invoices = json_decode($invoices);


    curl_close($curl);
?>