<?php
    $nome= $_POST["nome"];
    $email = $_POST["email"];
    echo "Seu nome é $nome e seu e-mail é $email<br> ";


    if(ISSET($_POST["cor"]))
    {
        echo "A(s) cor(es) escolhida(as) foi(foram): <br>";
        foreach ($_POST["cor"] as $geral)
        {
            echo "$geral<br>";
        }
    }
    else
      echo "Você não gosta de nenhuma cor<br>";

    
    $secao = $_POST["secao"];
    if($secao == "Escolher...")
        echo "Você não gostou de nenhuma seção<br>";
    else
        echo "<br> Você gosta de: $secao <br>";

    if(ISSET($_POST["estados"]))
    {
        echo "Você ja visitou os seguintes estados: <br>";
        foreach ($_POST["estados"] as $uf)
        {
            echo "$uf<br>";
        }
    }
    else
        echo "Você não visitou nenhum estado<br>";

    
     //codigo para colocar em maiusculo, minusculo
    $nome= strtoupper($nome);
    echo "Nome = $nome<br>";
    $nome= strtolower($nome);
    echo "Nome = $nome<br>";
    $nome= ucfirst($nome);
    echo "Nome = $nome<br>";
    $nome= ucwords($nome);
    echo "Nome = $nome<br>";
    //trim - remove espaços no início e do fim e temos ltrim e rtrim  --> elimina espaços em branco da direita ou da esquerta
    $nome= trim($nome);

    // str_replace: Localiza a palavra gmail na variável $email e substitui por hotmail.	
    $novoemail = str_replace('gmail', 'hotmail', $email);	
    echo "$email<br>";

    $email = explode('@', $email);
    echo "$email[0]<br>"; // RETORNO  endereço do email  
    echo "$email[1]<br>";  // RETORNO  provedor do email

    //O exemplo irá capturar os elementos do array email e uni-los novamente adicionamento o caracter @.
    $email = implode('@', $email);
    echo "$email<br>";

    //Obtém um substring a partir da posição 3 até o final da string.
    $email = substr($email, 3);  
    echo "$email<br>";

   // A partir da posição 9  capture 5 caracteres.
    $email = substr($email, 9, 5); 
    echo "$email<br>";

   //strlen:	Descobre o tamanho da string.
   $total = strlen($email); 
   echo "A tamanho da string é = $total<br>";

   // strstr:	Verifica a existência de determinado caractere em uma string
    if (stristr($nome, 'Souza'))
        echo "Você é da família Souza<br>";



   





   
       

?>
