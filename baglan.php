<?php



/**
 * 
 *  Veritabanı bağlantısı için
 * gerekli bağlantı bilgilerinin bulunduğu ayar dosyası.
 * 
 */
try
{
    $db = new PDO("mysql:host=localhost; dbname=girisuygulamasi; cahrset=utf8 ," , 'root', '');
    //echo "Veri tabanı bağlantısı başarılı";
} 
catch(Exeption $e)
{
    echo $e->getMessage();
} 