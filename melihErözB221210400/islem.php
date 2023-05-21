<?php
ob_start();
session_start();
require 'baglan.php';
if(isset($_POST['kayit']))
{
    $username=$_POST['kadi'];
    $password=$_POST['pw'];
    

    if(!$username && !$password  )
    {   
        echo "lütfen kullancı şifrenizi ve  E-mail adresinizi    giriniz";

    }
   
    else if (!$username)
    {
         echo "lütfen E-mail adresinizi giriniz";
    }
    else if(!$password)
    {
         echo "lütfen şifrenizi giriniz ";
    }
    else
    {
        //veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO kullanıcı SET kullaniciAd = ?, kullaniciSifre = ? ');
        $ekle = $sorgu->execute([
            $username , $password 
        ]);
        if($ekle)
        {
           echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
           header ('Refresh:2; OturumAc.html');
        }
        else
        {
            echo "Bir hata oluştu, Tekrar kontrol ediniz";
            header ('Refresh:2; OturumAc.html');
        }
    }   
}


   
if (isset ($_POST ['giris']))
{
        $username = $_POST['kadi'];
        $password = $_POST['pw'];

        if(!$username)
        {
           echo "Kullanıcı adınzı giriniz";
        }
        else if(!$password)
        {
            echo "Şirenizi giriniz";
        }
        else
        {
                 $kullanici_sor = $db-> prepare ('SELECT * FROM kullanıcı WHERE  kullaniciAd = ? && kullaniciSifre = ? ') ;
                $kullanici_sor->execute([
            
                     $username, $password 
                ]);
                $say= $kullanici_sor->rowCount();
                if($say==1)
               {
                  $_SESSION['kadi']=$username;
                   echo "Başarıyla giriş yaptınız, yönlendiriliyorsunuz ";
                   header ('Refresh:2; index.html');
                }
                else
              {
                  echo "Bir hata oluştu, Tekrar kontrol ediniz";
                  header ('Refresh:2; OturumAc.php');
              }
       }   
}
  

?>