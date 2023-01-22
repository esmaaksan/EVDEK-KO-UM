<?php
include("baglantı.php");

if(isset($_POST["kaydet"]))
{
    $name=$_POST["kullaniciadi"];
    $email=$_POST["email"];
    $password=$_POST["parola"];

    $ekle="INSERT INTO kisiler (ad,e_posta,sifre) VALUES ('$name','$email','$password')";
    $calistirekle=mysqli_query($con,$ekle);
    if($calistirekle)
    {
        echo '<div class="alert alert-success" role="alert">
        Kayıt Başarılı !
      </div> ';
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenirken bir problem oluştu !
      </div>';
    }
   

    mysqli_close($con);
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Üye Kayıt İşlemi</title>
</head>

<body>
    <div class="container p-5">
        <div class="card p-5">
            <form action="kayıt.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi"
                        placeholder="name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="parola"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="kaydet">KAYDET</button>
            </form>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>