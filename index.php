<?php 
    $connect = mysqli_connect("127.0.0.1","judzugpj","R26VYz","judzugpj_m1");
    function checkConnect($connect)
    {
        if($connect == false) return "nope"; else return "no nope";
    }
    

    $all_users = mysqli_query($connect,"SELECT * FROM `userss`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
            <div class="container">
            <?php while(($user = mysqli_fetch_assoc($all_users))): ?>
                    <div class="card">
                        <img src=<?=$user['img'];?> alt="">
                        <h1><?=$user['name'];?></h1>
                    </div>
                    <?php endwhile; ?>
            </div>
       
    </div>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .wrapper{
           display: flex;
           justify-content: center;
           align-items: center;
           min-height: 700px;
           flex-direction: column;
            width: 100%;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            max-width:900px;
            width: 100%;
            flex-wrap:wrap;
            gap: 60px;
        }
        .card{
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 4px black;
            flex-direction: column;
            max-width: 320px;
            width: 100%;

        }
        .card img{
            max-width: 130px;
            height: 130px;
        }

    </style>
</body>
</html>