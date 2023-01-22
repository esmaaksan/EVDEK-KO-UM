<?php

session_start();

include("baglantı.php");

// if(isset($_POST["giris"]))
// {
//     $name=$_POST["kullaniciadi"];
//     $password=$_POST["parola"];

//     $ekle=" SELECT * FROM kisiler WHERE ad= '$name' and sifre='$password'";
//     $calistirekle=mysqli_query($con,$ekle);
//     if($calistirekle)
//     {
//         echo '<div class="alert alert-success" role="alert">
//         Giriş Başarılı !
//       </div> ';
//     }
//     else {
//         echo '<div class="alert alert-danger" role="alert">
//         Giriş Yapılamadı !
//       </div>';
//     }
   

   
//     mysqli_close($con);


    if(isset($_POST["giris"]))
    {
        $name=$_POST["kullaniciadi"];
        $password=$_POST["parola"];
        if(!empty($name) && !empty($password) ) 
        {
        
            $ekle="SELECT * FROM kisiler WHERE ad= '$name' and sifre='$password'";
            $calistirekle=mysqli_query($con,$ekle);
    
          
                if($calistirekle)
            {
                if($calistirekle && mysqli_num_rows($calistirekle) > 0) 
                {
                    $user_data = mysqli_fetch_assoc($calistirekle);
                    if($user_data['password'] === $password);
                    {
                        $_SESSION['ad'] = $user_data['ad'];
                        echo "Giriş";
                        header("Location: indeks1.php");
                        die;
                    }
                    // echo "girdi buraya";
                }

            //     echo '<div class="alert alert-success" role="alert">
            //     Giriş Başarılı !
            //   </div> ';
            //     }
            //     else {
            //     echo '<div class="alert alert-danger" role="alert">
            //     Giriş Yapılamadı !
            //   </div>';
            }
        }
        
        
    }
    // else{
    // echo "Kayıt eklenirken bir problem oluştu";
    // }

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

    <title>Giriş Sistemi</title>
</head>

<body>
    <div class="container p-5">
        <div class="card p-5">
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="kullaniciadi"
                        placeholder="name" required>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="parola"
                        placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="giris">Giriş Yap</button>
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
