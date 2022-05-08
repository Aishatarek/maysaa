<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../index.php");
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-10 col-md-9 col-sm-12 thedetailll container-fluid">
                <div class='row cardss'>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='profile/displayProfile.php'>
                            <div class='users'>
                                <i class='fa-solid fa-user'></i>
                                <p>Profile</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='scientific_publications/displaySP.php'>
                            <div class='users'>
                                <i class='fa-solid fa-search'></i>
                                <p>scientific publications</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='university_activities/displayUA.php'>
                            <div class='users'>
                                <i class='fa-solid fa-school'></i>
                                <p>university activities</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-6 cardy col-md-6 col-sm-12'>
                        <a class='linkuser' href='scientific_activities/displaySA.php'>
                            <div class='users'>
                                <i class='fa-solid fa-microscope'></i>
                                <p>scientific activities</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            include("./sideNav.php");
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>