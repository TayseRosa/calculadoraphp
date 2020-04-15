<?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['SendCadUser'])):
        unset($dados['SendCadUser']);

        switch($dados['tipo'])
        {
            case 'Somar': $result = $dados['val1'] + $dados['val2'];
            break;
    
            case 'Subtrair': $result = $dados['val1']-$dados['val2'];
            break;
    
            case 'Multiplicar': $result = $dados['val1'] * $dados['val2'];
            break;
    
            case 'Dividir':$result = $dados['val1'] / $dados['val2'];
            break;
        }
        echo '<h1>Resultado:</h1><br>';
        echo $result;
        echo "<br><br><a href='http://localhost/projetos/calculadora'>Voltar</a><br>";

    endif;