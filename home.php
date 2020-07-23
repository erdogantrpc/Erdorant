<?php

session_start();

if(!isset($_SESSION["kontrol"])){
  header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Erdorant</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active h-90">
        <img class="d-block w-100 " src="img/caro.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h3 style="color: #BB9FA6 "> En önemli ilkelerimizden biri size dumanı üzerinde yemekler ulaştırabilmek. </h3>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/caros1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
        <h3 style="color: #F2E713" > Sağlığınız Bizim için çok önemli. Yemeklerimizin ana ve ara malzemelerinden soslarımızıda kullandığımız meyvelere kadar her şeyi kedni bahçelerimizde üretmekte ve kullanmaktayız.   </h3>
        
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/caros2.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
        <h3 style="color: #ffffff "> Bitki çaylarımız karadenizin engin dağlarından toplanmış bitkilerden olmakla, eşşiz manzaramızda sizi ekstra dinlendirecek. </h3>
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow">
      <h2 class="mb-4">
        Şeflerimiz sizler için burada
      </h2>
      <p class="mb-4">
        Batı Karadenizin en batısından birbirinden özel lezzetler sunan Erdorant, muhteşem deniz manzarası ve büyüleyici ambiyansı ile misafirlerine eşsiz bir yemek keyfi yaşatıyor.
      </p>
      <p class="mb-4">
        ----------------------------------------------------------------------------------------------------------------------------------------------
      </p>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/anne.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="featurette-heading">Erdorant Special: <span class="text-muted">Anne Evi</span></h2><br>
            <h5>Eğer annenizin yemeklerini özlediyseniz bu menü tam size göre. Dalından toplanan taptaze yapraklarla sarılan zeytinyağlı yaprak sarma, 
               mükemmel lezzeti ile kaç tane yediğinizi bilemeyeceğiniz içli köfte, 
               meşhur Çaycuma manda yoğurdu ile lezzetlenmiş soslu yoğurtlu mantı 
               ve bahçemizden topladığımız yeşilliklerle hazırladığımız kısır.
               Yanında da 1 porsiyon ev yapımı baklava!  
               Fiyatı: 30₺
              </h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="featurette-divider">
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/fitköfte.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="featurette-heading">Doyarken Fit Kalın: <span class="text-muted">FitKöfte</span></h2><br>
            <h5> Hem doyurucu hem de kalorisi olmayan bir yemek mi arıyorsunuz? Şeflerimizin sizler için hazırladığı FitKöfte menü 
                 sadece 500 kalori! Mevsimlik sebzelerle oluşturduğumuz köfte, bulgur pilavı, Çaycuma ayran ve irmik tatlısından oluşan bu menüyü kesinlikle denemelisiniz.
                Fiyatı: 20₺
          </h5>
           </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="featurette-divider">
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/fast.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="featurette-heading">Kaçamak:  <span class="text-muted">UltraMega Fast Food</span></h2><br>
            <h5>
                Gerçekten aç mı hissediyorsunuz? Biraz şekerli şeyler yemeyi dert etmiyor musunuz? O zaman hiç düşünmeyin ve 
                UltraMegaFastFood menüyü sipariş verin! Endişelenmenize gerek yok, içinde kullanılan et %100 dana eti, bulundurduğu şeker ise 
                şeker pancarından elde edilmiş rafine edilmeyen şekerdir. Çift etli büyük boy hamburger, 8'li terbiyeli tavuk kanadı, 6'lı but, 
                4'lü soğan halkası ve büyük boy koladan oluşan bu menü ile DOYASIYA DOYACAKSINIZ!
                Fiyat: 18₺
            </h5>
            </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="featurette-divider">

  <div class="container ">
    <div class="jumbotron text-white jumbotron2-image2 shadow">
      <h2>
        İçinde bulunduğumuz pandemi sürecince devletin almış olduğu karar ile sadece online sipariş hizmeti verebilmekteyiz. Pandemi süreci bittiğinde 
      eşsiz karadeniz manzarasında; uçan kuşlara, uzaklara giden gemilere karşı yemek yiyerek doyasıya bir keyif yaşamanız için 
      rezervasyon sistemimiz de açılacaktır :). Güzel günlerde buluşmak dileği ile... ERDORANT
      </h2>
    </div>
  </div>
  
  <hr class="featurette-divider">

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
                  <form id="form-submit" action="siparis.php" method="POST">
                      <div class="row">
                          <div class="col-md-6">
                              <fieldset>
                                  <select required name='menu' onchange='this.form.()'>
                                      <option value="">Menü Seçiniz</option>
                                      <option value="AnneEvi">Anne Evi</option>
                                      <option value="FitKöfte">FitKöfte</option>
                                      <option value="Fastfood">UltraMegaFastFood</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <select required name='aci' onchange='this.form.()'>
                                      <option value="">Acı İster misiniz?</option>
                                      <option value="Evet">Evet, Olsun</option>
                                      <option value="Hayır">Hayır, Olmasın</option>
                                      <option value="bol">BOOOOOOOL Acılı olsun</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <input name="name" type="name" class="form-control" id="name" placeholder="İsminiz" required>
                              </fieldset> 
                          </div>
                          <div class="col-md-6">
                              <fieldset>
                                  <input name="phone" type="phone" class="form-control" id="phone" placeholder="0(5XX) XXX XX XX" required>
                              </fieldset>
                          </div>
                          <div class="col-md-6">
                            <textarea name="adres" type="adres" class="form-control" id="adres" placeholder="Adresiniz" required></textarea>
                          </div>   
                          <div class="col-md-6">
                            <fieldset>
                                <select required name='bicim' onchange='this.form.()'>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>
