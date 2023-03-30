<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
</head>

<body>
    <h1>Cadastro de Cliente</h1>

    <form method="post" action="salvar-cliente.php">

        Nome:<input name="nome" type="text"><br>
        E-mail:<input name="email" type="email"><br>
        Telefone:<input name="telefone" type="tel"><br>
        Rua:<input name="rua" type="text"><br>
        Número:<input name="numero" type="number"><br>
        Bairro:<input name="bairro" type="text"><br>
        Complemento:<input name="complemento" type="text"><br>
        Cidade:<input name="cidade" type="text">
        <select name="estado" >
            <option selected>Estado</option>
            <option value="ac">AC</option>
            <option value="al">AL</option>
            <option value="ap">AP</option>
            <option value="am">AM</option>
            <option value="ba">BA</option>
            <option value="ce">CE</option>
            <option value="df">DF</option>
            <option value="es">ES</option>
            <option value="go">GO</option>
            <option value="ma">MA</option>
            <option value="mt">MT</option>
            <option value="ms">MS</option>
            <option value="mg">MG</option>
            <option value="pa">PA</option>
            <option value="pb">PB</option>
            <option value="pr">PR</option>
            <option value="pe">PE</option>
            <option value="pi">PI</option>
            <option value="rj">RJ</option>
            <option value="rn">RN</option>
            <option value="rs">RS</option>
            <option value="ro">RO</option>
            <option value="rr">RR</option>
            <option value="sc">SC</option>
            <option value="sp">SP</option>
            <option value="se">SE</option>
            <option value="to">TO</option>
        </select><br>
        Data de Nascimento:<input name="datadenascimento" type="date"><br>
        CPF:<input name="cpf" type="text"><br>
        RG:<input name="rg" type="text"><br>
        Whatsapp:<input name="whatsapp" type="tel"><br>
        Fuma?:<input name="fuma" type="radio" value="Sim">Sim
        <input name="fuma" type="radio" value="Não">Não<br>
        Bebe(álcool)?:<input name="bebe" type="radio" value="Sim">Sim
        <input name="fuma" type="radio" value="Não">Não<br>
        <button type="submit">Salvar cadastro</button>

    </form>
</body>

</html>