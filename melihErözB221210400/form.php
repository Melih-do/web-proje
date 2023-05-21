<?php

echo "

<table>
 <tr>
    <td> Ad </td>
    <td> : </td>
    <td> " . $_POST["ad"] . " </td>
 </tr>
 <tr>
    <td> SoyAd </td>
    <td> : </td>
    <td> " . $_POST["soyad"] . " </td>
 </tr>
 <tr>   
    <td> E-mail </td>
    <td> : </td>
    <td> " . $_POST["email"] . " </td>
 </tr>
 <tr>
    <td> Şehir </td>
    <td> : </td>
    <td>  " . $_POST["sehir"] . "   </td>
 </tr>
 <tr>
    <td> Mesajınız </td>
    <td> : </td>
    <td> " . $_POST["mesaj"] . " </td>
 </tr>
</table>

";

?>