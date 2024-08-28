<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fundo">
    <form action="" method="post">
        <h1 class="titulo"> Questao 4</h1>
        <label for="altura do triangulo"> Altura do triângulo:</label>
        <input type="number" id="altura" name="altura" step="0.5">
        <label for="base do triângulo"> base do triângulo:</label>
        <input type="number" id="base" name="base" step="0.5">
        <button  type="submit" name="calcular_area"> Calcular area do triangulo</button>
    </form>
    <div>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['calcular_area'])){
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = ($base * $altura) /2;
                echo $area;
                if($area > 100){
                    echo "a area do triângulo é maior do que o limite permitido";
                }   elseif($area ==100){
                    echo "a esta no valor limite ";
                }
                else{
                    echo "a área do triângulo é menor do que o valor limite permitido";
                }
            }
        
        
            
        }

        ?>
    </div>


    
</body>
</html>