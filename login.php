<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
            <img src="img/3515462.jpg" id="icon" alt="User Icon" />
            <h1>Dashboard</h1>
            </div>

            <!-- Login Form -->
            <?php 
            // if(count($erro) > 0)
            //     foreach($erro as $msg){
            //         echo "<p>$msg</p>";
            //     }
            
            ?>
            <form action="loginConfig.php" method="POST">
            <input type="text" id="email" value="" class="fadeIn second" name="email" placeholder="Login" >
            <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="senha">
            <input type="submit" class="fadeIn fourth" value="Entrar" onclick="verificar()">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <h5><strong>Duvidas: </strong></h5>
                <a class="underlineHover" href="#"  >Clique aqui!</a>


                <?php 
                if(isset($_SESSION['nao_atenticado'])):
                ?>
                <div class="danger">
                    <string><p>ERRO: Usuario ou senha invalidos</p></string>
                </div>   
                <?php
                    endif;
                    unset($_SESSION['nao_atenticado']);
                ?>
            </div>
        </div>
    </div>
    <!-- <script>
        function verificar(){
                alert("Erro: Usuario ou senha invalidos!");
                if(isset($_SESSION['nao_atenticado'])){
                    alert("Erro: Usuario ou senha invalidos!");
                }
            }
    </script>
     -->
</body>
</html>