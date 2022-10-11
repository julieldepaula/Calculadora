
<?php

if ($_POST){
    $combustivel = $_POST['combustivel'];
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
        
    if (is_numeric($distancia) && is_numeric($autonomia)){

        if($distancia > 0 && $autonomia >0){

            $gasolina = 4.79;
            $calculoGasolina = ( $distancia / $autonomia ) * $gasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ",", ".");

            $etanol = 3.43;
            $calculoEtanol = ( $distancia / $autonomia ) * $etanol;
            $calculoEtanol = number_format($calculoEtanol, 2, ",", ".");

            if($combustivel == "gasolina"){

            echo "<p>O valor do consumo em Gasolina foi de R$".$calculoGasolina."</p>";               
                
            }else
            
            echo "<p>O valor do consumo em Etanol foi de R$".$calculoEtanol."</p>";

        }else "<p>O valor recebido não é um numero válido.</p>";

    }else "<p>O valor recebido não é numérico.</p>";

}else {
    echo "<p>Nenhum dado foi recebido pelo formulário.</p>";
    
}
