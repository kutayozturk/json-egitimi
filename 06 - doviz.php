<!-- JSON Kullnarak Döviz Bilgilerini Çekmek
https://github.com/truncgil/Finans?tab=readme-ov-file -->

<!-- Google Chrome' eklentisi olarak "JSON Viewer Pro" kullanıyorum.
https://chromewebstore.google.com/detail/json-viewer-pro/eifflpmocdbdmepbjaopkkhbfmdgijcc?hl=tr -->
<style>
    #kitapListesi td {padding: 5px 10px; border: 1px solid gray;}
</style>

<?php
 
 $jsonVeri=file_get_contents("https://finans.truncgil.com/v4/today.json");
 $veri=json_decode($jsonVeri,1);
 
//   Yukarıdaki komutta ",1" eklenme sebebimiz, json_decode komutu veriyi OBJECT olarak çeker. OBJECT olarak gelen veride, Türkçe karakter ve boşluk gibi ifadelerin bulunması sebebi ile, çeviri işlemi hata verir. ",1" ifadesi gelen veriyi OBJECT değil de, ARRAY elemanı olarak tutmasını sağlıyor.

?>

<table id="kitapListesi" cellspacing="0">
    <tr>
        <td><b>Döviz</b></td>
        <td><b>Alış</b></td>
        <td><b>Satış</b></td>
        <td><b>Değişim Oranı (%)</b></td>
    </tr>
    <tr>
        <td>USD</td>
        <td><?=$veri["USD"]["Buying"]?></td>
        <td><?=$veri["USD"]["Selling"]?></td>
        <td><?=$veri["USD"]["Change"]?></td>
    </tr>
    <tr>
        <td>EURO</td>
        <td><?=$veri["EUR"]["Buying"]?></td>
        <td><?=$veri["EUR"]["Selling"]?></td>
        <td><?=$veri["EUR"]["Change"]?></td>
    </tr>
</table>

