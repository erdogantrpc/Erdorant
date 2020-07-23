<?php

session_start();

if(!isset($_SESSION["kontrol"])){
    header("Location: index.html");
}

include("mysqlbaglan.php");

$sql = "SELECT * FROM siparis WHERE siparis_no=".$_GET['id'];

$cevap = mysqli_query($baglanti,$sql);

if(!$cevap ){
    echo '<br>Hata:' . mysqli_error($baglanti);
}

$gelen=mysqli_fetch_array($cevap);
?>



<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title>Erdorant</title>
  <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        />
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="css/home.css" rel="stylesheet">

</head>
<body>
<nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2 d-none d-md-inline-block" href="siparislistele.php">Siparişlerim</a>
      <a class="py-2 d-none d-md-inline-block" href="home.php">ERDORANT</a>
      <a class="py-2 d-none d-md-inline-block" href="cikis.php">Çıkış</a>
    </div>
  </nav>
  <hr>
  
<section class = "container" id="book-table2">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-2 col-sm-12">
              <div class="left-image">
              </div>
          </div>
          <div class="col-md-4 col-sm-12">
              <div class="right-info2">
                  <h4>Sipariş</h4>
                  <form id="form-submit" action="guncelkaydet.php?id=<?php echo $_GET['id'] ?>" method="POST">
                      <div class="row">
                          <div class="col-md-6">
                              <fieldset>
                                  <select required name='menu' value="<?php echo $gelen['menu']?>">
                                      <option value="">Menü Seçiniz</option>
                                      <option value="AnneEvi">Anne Evi</option>
                                      <option value="FitKöfte">FitKöfte</option>
                                      <option value="Fastfood">UltraMegaFastFood</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <select required name='aci' value="<?php echo $gelen['aci'] ?>">
                                      <option value="">Acı İster misiniz?</option>
                                      <option value="Evet">Evet, Olsun</option>
                                      <option value="Hayır">Hayır, Olmasın</option>
                                      <option value="bol">BOOOOOOOL Acılı olsun</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <input name="isim" type="isim" class="form-control" id="isim" value="<?php echo $gelen['isim'] ?>" placeholder="İsminiz" required>
                              </fieldset> 
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <input name="telefon" type="phone" class="form-control" id="telefon" value="<?php echo $gelen['telefon'] ?>" placeholder="0(5XX) XXX XX XX" required>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                            <textarea name="adres" type="adres" class="form-control" id="adres" value="<?php echo $gelen['adres'] ?>" placeholder="Adresiniz" required></textarea>
                          </div>   
                          <div class="col-md-6">
                            <fieldset>
                                <select required name='bicim' value="<?php echo $gelen['bicim'] ?>" >
                                    <option value="">Ödeme Biçimi</option>
                                    <option value="kapıdakart">Kapıda kart ile ödeme</option>
                                    <option value="Nakit">Nakit</option>
                                </select>
                            </fieldset>
                        </div>
                          <div class="container">
                              <fieldset>
                              <input class="btn btn btn-outline-secondary btn-xl rounded-pill active" type="submit" value="Yolla">
                              </fieldset>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>
<footer class="py-5 bg-black">
    <div class="text-center">
      <p style="color: bisque;">&copy;Erdoğan TURPCU &nbsp;    <a href="https://www.linkedin.com/in/erdogan-turpcu/">@LinkedIn</a>.</p>
    </div>
  </footer>
</body>

</html>