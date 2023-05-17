<?php
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['kayit']))
{
    $username=$_POST['kadi'];
    $password=$_POST['pw'];
    $busername =$_POST['ad'];
    $busersname =$_POST['soyad'];

    if(!$username && !$password && !$busername && !$busersname )
    {   
        echo "lütfen kullancı adınızı, soyadınzı, şifrenizi ve  E-mail adresinizi    giriniz";

    }
    else if(!$busername)
    {
        echo "lütfen kullancı adınızı giriniz";

    }
    else if(!$busersname)
    {
     echo "lütfen kullancı  soyadınızı giriniz";

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
        $sorgu = $db->prepare('INSERT INTO uyeler SET uye_adi = ?, sifre = ?, email = ? ');
        $ekle = $sorgu->execute([
            $busername, $password, $username
        ]);
        if($ekle)
        {
           echo "Kayıt başarıyla gerçekleşti, yönlendiriliyorsunuz";
           header ('Refresh:2; OturumAc.php');
        }
        else
        {
            echo "Bir hata oluştu, Tekrar kontrol ediniz";
            header ('Refresh:2; OturumAc.php');
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
                 $kullanici_sor = $db-> prepare ('SELECT * FROM uyeler WHERE  email = ? && sifre = ? ') ;
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