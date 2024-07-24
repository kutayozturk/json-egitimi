<?php 
    $telefon=array(
        "marka" => "Honor",
        "model" => "90",
        "fiyat" => 14990,
        "ram" => 12,
        "renk" => array("Yeşil","Mavi","Siyah"),
        "kamera" => array(
            "on" => "12MP",
            "arka" => "200MP",
            "digitalZoom" => "Evet"
        )
    );

    $jsonVeri=json_encode($telefon);
    $veri=json_decode($jsonVeri);

    echo "Marka: ".$veri->marka."<br>";
    echo $veri->kamera->on;
?>
