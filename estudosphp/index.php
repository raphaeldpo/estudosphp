<html>

<head>
</head>

<body>
    <?php
    $string = "Curso na dio";
    $numeros = 50;
    $array = array ("php", "html", "css", "java");
    date_default_timezone_set  ('America/Sao_Paulo'); 
    $data = date ("d/m/Y H:i:s");
        ?>
    <h4>
        Essa é uma variável do tipo string,
        para implementar uma variável do tipo string
        utilizamos aspas simples ('') ou duplas (""):
        <?php
        echo $string;
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo número/integer
        para implementar essa variável utilizamos
        somente os números desta forma:

        <?php
        echo $numeros;
        ?>

    </h4>
    <h4>
        Essa é uma variável com um array,
        para implementar uma array em uma variável,
        utilizamos desta forma:
        <?php
        print_r($array[0]);
        ?>
    </h4>
    <h4>
        Essa é uma variável do tipo datas,
        para implementar essa variável utilizamos:
        
        <?php
        print $data;
        ?>
    </h4>


</body>

</html>