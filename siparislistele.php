<?php
session_start();

if(!isset($_SESSION["kontrol"])){
  header("Location: index.html");
}
?>
<html>
<head><meta charset="utf-8">
    <meta charset="utf-8">
    <title>Erdorant</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
      <link href="css/home.css" rel="stylesheet">
  </head>

  <body>
   
    <nav class="site-header sticky-top py-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2 d-none d-md-inline-block" href="home.php">Ana Sayfa</a>
      <a class="py-2 d-none d-md-inline-block" href="home.php">ERDORANT</a>
      <a class="py-2 d-none d-md-inline-block" href="cikis.php">Çıkış</a>
    </div>
    </nav>


  <div class="container py-5">
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url('img/banner-bg.jpg');">
      <h2 class="mb-4">
        Siparişlerinizi Burada Görebilir ve Düzenleyebilirsiniz.
      </h2>
    </div>
  </div>

  <?php
include("mysqlbaglan.php");

$sql = "SELECT * FROM siparis";

$cevap = mysqli_query($baglanti,$sql); 
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}

mysqli_close($baglanti);

$link = mysqli_connect($server, $user, $password, $database);
$result = $link->query("SELECT * FROM siparis") or die($link->error);
?>
        <div class="container">
              <h2>Siparişlerim</h2>
              <p>Yeni ve eski bütün siparişlerinizi görebilir ve yanlış veya eksik sipariş verdiyseniz siparişinizde değişiklikler yapabilirsiniz. Sipariş verildikten 15 dakika sonrasında yapılan düzenlemeler siparişiniz yola çıktığı için dikkate alınamayacaktır.</p>
              <table class="table">
              <thead class="thead-dark">
              
              <tr>
                    <th scope="col">Siparis No</th>
                    <th scope="col">Menü</th>
                    <th scope="col">Acı</th>
                    <th scope="col">İsim</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Adres</th>
                    <th scope="col">Biçim</th>
                    <th scope="col">Düzenle</th>
                    <th scope="col">Sil</th>
                </tr>
              </thead>
              <tbody>
              <?php
                while($row = $result->fetch_assoc()):?>
                <tr>
                <td><?php echo $row["siparis_no"] ?></td>
                    <td><?php echo $row["menu"] ?></td>
                    <td><?php echo $row["aci"] ?></td>
                    <td><?php echo $row["isim"] ?></td>
                    <td><?php echo $row["telefon"] ?></td>
                    <td><?php echo $row["adres"] ?></td>
                    <td><?php echo $row["bicim"] ?></td>
                    <td>
                        <a href="guncellesiparis.php?id=<?php echo $row["siparis_no"]; ?>" class="btn btn-primary" ><div class="container"><i class="fas fa-user-edit"></i></div></a>
                    </td>
                    <td>
                        <a href="silsiparis.php?id=<?php echo $row["siparis_no"]; ?>" class="btn btn-danger" ><div class="container"><i class="fas fa-minus-square"></div></i></i></a>
                    </td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
          <footer class="py-3 bg-dark">
            <div class="text-center">
            <p style="color: bisque;">&copy;Erdoğan TURPCU &nbsp;    <a href="https://www.linkedin.com/in/erdogan-turpcu/">@LinkedIn</a>.</p>
            </div>
          </footer>
  </body>
  </html>