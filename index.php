<?php
/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar nada 
*/

/*$idade = 20;

if($idade >= 18){
    echo "Pode dirigir";
}*/


/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade"  */

/*$idade = 15;

if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade";
}*/


/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a idade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade"  */

/*$idade = 15;

if($idade >= 90){
    echo "Já passou do tempo, não pode mais dirigir";
}else if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade";
}*/


/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a quantidade de anos que falta para a pessoa ser maior de idade */

/*$idade = 19;

if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos";
}*/


/*PROBLEMA: crie um código que verifique a cor informada pelo usuário e gere um código hexadecimal para formatar a cor do texto. As cores permitidas são: azul, vermelho e verde. Caso seja diferente, deixar a letra preta;*/

/*$corEscolhida = "verde";
$corHexa = "";
switch ($corEscolhida) {
    case "vermelho":
        $corHexa = "#ff0000";
        break;

    case "azul":
        $corHexa = "#0000ff";
        break;

    case "verde":
        $corHexa = "#00ff00";
        break;
    default:
        $corHexa = "#000000";
        break;
}
echo "<h1 style='color:$corHexa'>Olá</h1>";*/


/*PROBLEMA: exiba os números de 10 à 0*/

/*PROBLEMA: exiba os números de 0 à 20*/


/*$contador = 0;while($contador <= 20){
    echo $contador . "<br>";
    // $contador = $contador + 1;    
    $contador++;
}*/


/*$contador = 0;
while ($contador <= 0) {
    echo "$contador <br>";
    $contador = $contador + 1 ;
}*/

/*for (contador; condição ; incremento) {   código}*//*PROBLEMA: exiba os números de 0 à 20*/

/*for($i = 0 ; $i <= 20; $i++){
    echo "$i<br>";
}*/

/*PROBLEMA: exiba os números de 0 à 20*/ // 

/*for($i = 0 ; $i <= 20; $i++){
    //     echo "$i<br>";
}*/
// $fruta01 = '🍓';
// $fruta02 = '🍇';
// $fruta03 = '🥥';
// $frutas = array();
// $frutas[0] = "🍓";
// $frutas[1] = "🍇";
// $frutas[2] = "🥥";

/*$frutas = ["🍓", "🍇","🥥"];
    $frutas[3] = "🍍";
    array_push($frutas, "🍒");
    // echo gettype($frutas);
    echo count($frutas);
    echo "<h1>salada de frutas</h1>";
    
    $qtd = count($frutas);
    $contador = 0;

    while($contador < $qtd){
        // echo "$contador <br>";    
        echo $frutas[$contador];
         $contador++;
        }
*/

/*$comidas = ['🍕', '🍔', '🍟', '🌭', '🍿', '🥨', '🥐'];


echo "Comidas<br>";

$qtd = count($comidas);
$contador = 0;

while ($contador < $qtd) {
    echo " $comidas[$contador] <br>" ;
    $contador++;
}


#### ESTRUTURA DE DECISÃO

$usuario = 'admin';

$senha = 123;*/




/*if($usuario == 'admin' && $senha == 321){

    echo "Acesso liberado";

}else{

echo "Usuário ou senha inválido";

}

echo "<br>";*/

#### ESTRUTURA DE REPETIÇÃO & ARRAY




/*$produtos = ['👟', '👠', '🎮', '🌭','🥄','🧦']; # Array

echo $produtos[0];
echo $produtos[3];
echo count($produtos);
echo "<br>";

$qtd = count($produtos);
$i = 0;

while ($i < $qtd) {
    echo $produtos[$i];
    $i++; // $i = $i + 1
}*/


echo $_POST["usuario"] ?? "";
echo $_POST["nome"] ?? "";
echo $_POST["sobrenome"] ?? "";
echo $_POST["cep"] ?? "";
echo $_POST["rua"] ?? "";
echo $_POST["bairro"] ?? "";
echo $_POST["cidade"] ?? "";
echo $_POST["estado"] ?? "";
echo $_POST["numero"] ?? "";
echo $_POST["senha"] ?? "";
echo $_POST["idade"] ?? "";
echo $_POST["email"] ?? "";
echo $_POST["telefone"] ?? "";

?>