<?php  $host="localhost"; $user="root";
  $password="";
  $database="penawaran";
  $koneksi=mysql_connect($host,$user,$password);
  mysql_select_db($database,$koneksi);
  //cek koneksi
  if($koneksi){
    //echo "Berhasil Terhubung";
  }else{
    echo "Gagal Terhubung";
  }
?>
<?php 
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$tipe = $_POST['tipe_paket'];
$luas = $_POST['luasan_area'];
$jenis = $_POST['jenis_mekanikal'];
$zona = $_POST['zona'];
$query=mysqli_query($kon, "INSERT INTO penawaran (nama, email, nohp, alamat, tipe_paket, luasan_area, jenis_mekanikal, zona)
VALUES ('$nama', '$email', '$nohp' ,'$alamat', '$tipe', '$luas', '$jenis', '$zona')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='biodata.php'</script> 
<?php 
} 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Habibi Garden merupakan perusahaan di bidang teknologi pertanian. Kami terus berinovasi untuk bisa mencapai visi kami yaitu membagun peradaban via IOT Agriculture.">
    <meta name="keywords" content="habibi, pertanian digital, smart farming, teknologi pertanian, IoT pertanian, racik pupuk otomatis, pertanian modern">


    <title>Habibi Garden - Bertani dengan cara modern menggunakan teknologi IoT</title>


    <link href="assets/css/page.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- 3D -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">



    <!--  Open Graph Tags -->
    <meta property="og:title" content="Habibi Garden">
    <meta property="og:description" content="Habibi Garden merupakan perusahaan di bidang teknologi pertanian, yang dapat membantu untuk mendigitalisasi lahannya">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158949131-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-158949131-1');
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159371648-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-159371648-1');
    </script>
            

  </head>

  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="fixed">
      <div class="container">

        <!-- Logo -->
        <div class="navbar-left">
          <button class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
          <a class="navbar-brand" href="index.html">
            <img class="logo-dark" style="padding:7px" src="assets/img/Logo-HG.png" alt="logo">
            <img class="logo-light" style="padding:7px" src="assets/img/Logo-HG.png" alt="logo">
          </a>
        </div>

        <!-- Menu -->
        <section class="navbar-mobile">
          <ul class="nav nav-navbar ml-auto">
            
            <li class="nav-item"><a class="nav-link" href="./index.html">Beranda</a></li>
          
            <!-- Mega Menu -->
            <li class="nav-item">
              <a class="nav-link" href="#">Produk <span class="arrow"></span></a>

              <ul class="nav">

                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">HabibiDose</a>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="/habibigrow.html">HabibiGrow</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibicooling.html">HabibiCooling</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">HabibiClimate <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="/habibiclimate.html">HabibiClimate</a>
                    <a class="nav-link" href="/habibiclimate-pro.html">HabibiClimate Pro</a>
                    <a class="nav-link" href="/habibiclimate-station.html">HabibiClimate Station</a>
                  </nav>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibidriptape.html">HabibiDripTape</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibicam.html">HabibiCam</a>
                </li> 
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">HabibiNutrition <span class="arrow"></span></a>
                  <nav class="nav">
                    <a class="nav-link" href="/habibinutrition.html">HabibiNutrition</a>
                    <a class="nav-link" href="/habibinutritionpro.html">HabibiNutrition Pro</a>
                  </nav>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibiwaterquality.html">HabibiWaterQuality</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibidose.html">HabibiDose</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="/habibidriptape.html">HabibiDripTape</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/habibiwaterquality.html">HabibiWaterQuality</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="/habibiirigate.html">HabibiIrigate</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="/habibilink.html">habibiLink</a>
                </li>    
                <li class="nav-item">
                  <a class="nav-link" href="/habibispringkle.html">HabibiSpringkle</a>
                </li>        
                <li class="nav-item">
                  <a class="nav-link" href="/habibivalve.html">HabibiValve</a>
                </li>              -->
              </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="./blog.html">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="./contact.html">Kontak Kami</a></li>
            <li class="nav-item"><a class="nav-link" href="./career.html">Karir</a></li>
            <li class="nav-item"><a class="txtc-green nav-link" href="https://habibigarden.com/dashboard/public/">Login</a></li>
          </ul>
        </section>

      </div>
    </nav>

    <!-- Header -->
    <header class="header bg-gray bb-1">
        <h1 align="center">FORMULIR PENAWARAN</h1>
    </header><!-- /.header -->

    <!-- Main Content -->
    <main class="main-content">

        <div class="bg-gray rounded shadow-7 w-400 mw-100 p-6" >
          <!-- <h5 class="mb-7">Create an account</h5> -->
  
          <form>
            <div class="form-group">
                <td><label for="nama">Nama Lengkap <sup style = "color : red;  font-size: 1em; " >*</sup> </label></td>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <td><label for="email">E-mail  <sup style = "color : red;  font-size: 1em; " >*</sup> </label></td>
              <input type="text" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
              <td><label for="nohp">No HP  <sup style = "color : red;  font-size: 1em; " >*</sup></label></td>
              <input type="number" class="form-control" name="nohp" placeholder="No HP">
            </div>
            <div class="form-group">
                <td><label for="alamat">Alamat  <sup style = "color : red;  font-size: 1em; " >*</sup> </label></td>
                <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"></textarea>
            </div>
  
            <!-- <div class="form-group">
              <button class="btn btn-block btn-primary" type="button" id="kirim" >KIRIM</button>
              
            </div>
            <div class="form-group" style="display: none; visibility: visible;" id="show_penawaran">
              <p> Apakah memerlukan penawaran lebih lanjut?</p>
              <button class="btn btn-block "  id="ya" type="button">YA</button>
              <button class="btn btn-block" id="tidak" type="submit" >Tidak</button>
            </div> -->
            <!-- type="submit" -->
          </form>
        </div>
        
        <div class="bg-gray rounded shadow-7 w-400 mw-100 p-6"  id="form_penawaran">
          <!-- <h5 class="mb-7">Create an account</h5>  style="display: none; visibility: visible;"-->
  
            <div class="form-group">
                <td><label for="tipe">Tipe Paket </label></td>
                <td>
                    <select name="tipe" id="tipe" id="Yes"class="form-control">
                        <option value="">Pilih Tipe</option>
                    </select>
                </td>
            </div>
            <div class="form-group">
                <td><label for="luas">Luasan Area </label></td>
                <td>
                    <select name="luas" id="luas"  disabled=true class="form-control">
                        <option value="" >Pilih luas</option>
                    </select>
                    <!-- disabled="Disabled" -->
                </td>
            </div>
            <div class="form-group">
              <td><label for="jenis">Jenis Mekanikal </label></td>
              <td>
                  <select name="jenis" id="jenis" disabled=true class="form-control">
                      <option value="">Jenis Mekanikal</option>
                  </select>
              </td>
          </div>
            <div class="form-group">
                <td><label for="zona">Pembagian Zona </label></td>
                <td>
                    <select name="zona" id="zona" class="form-control">
                        <option value="">Zona</option>
                        <option value="">1 Zona</option>
                        <option value="">1-2 Zona</option>
                        <option value="">2 Zona</option>
                    </select>
                </td>
            </div>
              
            <div class="form-group">
              <button class="btn btn-block btn-primary" type="submit">Register</button>
            </div>
            <p> <sup style = "color : red;  font-size: 1em; " >*</sup> Wajib Diisi</p>
          </form>
    
        </div>
      </main><!-- /.main-content -->

     <!-- FOOTER -->
     <footer class="footer bg-gray" style="padding-bottom:10px;">
      <div class="container">
        <div class="row py-6">

          <!-- Contact Us -->
          <div class="col-6 col-md-4 col-xl-3">
            <h6 class="mb-6"><strong>Contact Us</strong></h6>
            <div class="nav flex-column">
              <a class="nav-link" href="https://api.whatsapp.com/send/?phone=%2B6281277639698&text&app_absent=0" target="_blank">Ask Product</a>
              <a class="nav-link" href="https://api.whatsapp.com/send/?phone=%2B6282129566512&text&app_absent=0" target="_blank">Ask For Partnership</a>
              <a class="nav-link" href="https://api.whatsapp.com/send/?phone=%2B6281277639698&text&app_absent=0" target="_blank">Ask Problem of Agriculture</a>
              <a class="nav-link" href="javascript:void(Tawk_API.toggle())">Ask Me Anything</a>
            </div>
          </div>

          <!-- Company -->
          <div class="col-6 col-md-4 col-xl-3">
            <h6 class="mb-6"><strong>Company</strong></h6>
            <div class="nav flex-column">
              <a class="nav-link" href="#">About Us</a>
              <a class="nav-link" href="https://www.habibigarden.com/blog.html">Blog</a>
              <a class="nav-link" href="./career.html">Career</a>
              <a class="nav-link" href="#">Press Kit</a>
              <a class="nav-link" href="./faq.html">FAQ</a>
              <a class="nav-link" href="#">Terms and Conditions</a>
            </div>
          </div>

          <!-- Description -->
          <div class="col-xl-6 order-md-first">
            <img style="height:48px;width:250px;margin-bottom:20px;" src="assets/img/Logo-HG.png" alt="logo">
            <h6 class="mb-4"><strong>PT. Habibi Digital Nusantara</strong></h6>
            <p class="w-90">
              Habibi Garden merupakan perusahaan di bidang teknologi pertanian.<br>
              Sejak 2016 habibi garden didirikan, kami terus berinovasi untuk bisa mencapai visi kami yaitu membagun peradaban via IOT Agriculture.
            </p>
            <div class="social social-bg-light">
              <a class="social-instagram" target="_blank" href="https://www.instagram.com/habibi_garden/" rel="noopener"><i class="fa fa-instagram"></i></a>
              <a class="social-youtube" target="_blank" href="https://www.youtube.com/channel/UCG98dF1fY1cZPDKCyAqTsKg" rel="noopener"><i class="fa fa-youtube"></i></a>
            </div>
          </div>

        </div>
        <hr>
        <p class="text-center">© 2020 Habibi Garden. All rights reserved.</p>
      </div>
    </footer><!-- /.footer -->

    <!-- Scripts -->
    <script src="assets/js/page.min.js"></script>
    <script src="assets/js/script.js"></script>

    <!-- Tawk.to -->
    <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5e53ac6aa89cda5a1887a060/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
      })();
    </script> 


    <script>
      $(function() {
        $("#kirim").click(function() {
          $("#show_penawaran").show();
        });
      });
      $(function() {
        $("#ya").click(function() {
          $("#form_penawaran").show();
          $("#tidak").attr("disabled", true);
        });
      });
      $("#tipe").change(function() {
            $("#luas").attr("disabled", false);
        });
        $("#luas").change(function() {
            $("#jenis").attr("disabled", false);
        });
    </script>


  <script>
    $(document).ready(function(){
    
     load_json_data('tipe');
    
     function load_json_data(id, parent_id)
     {
      var html_code = '';
      $.getJSON('tipe_paket.json', function(data){
    
       html_code += '<option value="">Pilih '+id+'</option>';
       $.each(data, function(key, value){
        if(id == 'tipe')
        {
         if(value.parent_id == '0')
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
        else
        {
         if(value.parent_id == parent_id)
         {
          html_code += '<option value="'+value.id+'">'+value.name+'</option>';
         }
        }
       });
       $('#'+id).html(html_code);
      });
    
     }
    
     $(document).on('change', '#tipe', function(){
      var tipe_id = $(this).val();
      if(tipe_id != '')
      {
       load_json_data('luas', tipe_id);
      }
      else
      {
       $('#luas').html('<option value="">Pilih Luas</option>');
       $('#jenis').html('<option value="">Jenis</option>');
      }
     });
     $(document).on('change', '#luas', function(){
        var luas_id = $(this).val();
        if(luas_id != '')
        {
            load_json_data('jenis', luas_id);
        }
        else
        {
            $('#jenis').html('<option value="">Jenis</option>');
            $('#zona').html('<option value="">Zona</option>');
        }
    });
    // $(document).on('change', '#luas', function(){
    //     var luas_id = $(this).val();
    //     if(luas_id != '')
    //     {
    //         load_json_data('zona', luas_id);
    //     }
    //     else
    //     {
    //        // $('#jenis').html('<option value="">Jenis</option>');
    //         $('#zona').html('<option value="">Zona</option>');
    //     }
    // });
    });
    </script>
  </body>
</html>
