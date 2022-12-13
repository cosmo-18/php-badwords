<?php

$testo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, soluta? Dolore obcaecati quis maxime enim odit ea reprehenderit inventore temporibus? Temporibus recusandae at labore sit quis aperiam adipisci, quibusdam impedit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit est dolores ex quo fugiat distinctio nesciunt enim magni! Nihil aut dolores quo earum autem nisi dolorem maiores facere quia natus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque quisquam animi asperiores sequi! Eum accusamus adipisci ut veritatis sint harum ipsam maxime quia. Nam esse repudiandae voluptates, quia numquam in! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi quod ratione dicta saepe ducimus recusandae iste praesentium quo cum velit, quae fuga, distinctio tempora modi nam nihil, magni aliquam officia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis aspernatur harum delectus mollitia reprehenderit earum, eligendi nisi quae dolores numquam sint repellendus vero quia voluptatem sunt velit unde qui quod. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia minima non soluta voluptates nesciunt, culpa, voluptatem eveniet repellendus, in dignissimos dolor provident tempore? Reprehenderit sapiente eos sit, ipsam ea quibusdam?";

$censura = "***";

$parola = $_GET['TESTO'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-BadWords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'/>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

<form action="" method="GET">
    <div>
    <label class="for" for="TESTO">TESTO</label>
    <p>
        <?php echo  str_replace($parola, $censura, $testo) ?>
    </p>
    <input class="input" type="testo" name="TESTO" id="" >
    </div>
    <button type="submit">CENSURA</button>
</form>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
</body>
</html>