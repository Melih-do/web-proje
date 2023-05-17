<?php

require 'baglan.php';

?>



<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- Custom CSS -->
<link rel="stylesheet" href="styl.css">
    <title> OĞUZHAN KOCA</title>
</head>

<body>
    <header id="header" class="bg- mb-3">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-nav">
            <div class="container ">
              <a class="navbar-brand" href="#"> <img src="logo.jpeg" alt="" class="logo-boy" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html""><h5>Ana Sayfa</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Özgeçmiş.html"><h5>Özgeçmiş</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="şehrim.html"><h5>Şehrim</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mirasımız.html"><h5>Mirasımız</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="İlgiAlanlarım.html"><h5>İlgi alanlarım</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="iletişim.html"><h5>İletişim</h5></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="OturumAc.php"><h5>Oturum Aç</h5></a>
                  </li>
                  
                  
                  
                </ul>
            
              </div>
            </div>
          </nav>

    </header>
    <!--oturum açma alanı-->
    <div class="container-fluid">
    <h2 class="display-5 text-upparcase mb-5 text-center"> Oturum Aç</h2>
        <div class="row">
            
            <div class="col ">
                <div class="d-grid bg-primary  mb-5 py-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary  py-5" data-bs-toggle="modal" data-bs-target="#exampleModal-1">
                     <h2  class="text-light " >Giriş </h2>                                         
                </div>

       
             
                                 
                </div>
                <div class="row">
              
                    <div class="col ">
                        <div class="d-grid bg-info  mb-5 py-5">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info  py-5" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                             <h2  class="text-light " >Kayıt ol </h2>                                         
                        </div>
                    </div>
        
               
                     
                                         
                        </div>
           
                <!-- modal 1-->
                <div class="modal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                      <div class="modal-content">
                       
                       
                        <button type="button" class="btn-close ml-4" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <form action="islem.php" method="POST">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Kullanıcı Adınız</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kadi">
                                  
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Şifre</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="pw">
                                </div>
                                <footer>
                                    <button href="OturumAç.php" name="giris" type="submit" class="btn btn-primary">Giriş</button>
                                    
                                </footer>                                
                                
                              </form>
                            
                        </div> 
                       
                    </div>
                    
                        </div>
                      </div>
                      <!-- modal 2-->
                <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered ">
                      <div class="modal-content">
                       
                       
                        <button type="button" class="btn-close ml-4" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <form action="islem.php" method="POST">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label"> Adınız</label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ad">
                                  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Soyadınız</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="soyad" >
                                    
                                  </div>                                
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> E MAİL </label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kadi">
                                    
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Şifre</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="pw">
                                </div>
                                <footer>
                                    <button href="kayit.php" name="kayit" type="submit" class="btn btn-info">Kayıt ol</button>
                                    
                                </footer>                                
                                
                              </form>
                            
                        </div> 
                       
                    </div>
                    
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            

<!--footer-->
<footer>
  <div class="container-fluid bg-nav text-center py-4 lead text-light">
    NO &copy; 2021 OĞUZHAN YAZILIM
  </div>
</footer>

 

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>

   
</body>

</html>
