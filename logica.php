<?php if (!isset($_SESSION)) { session_start(); } 

if (isset($_POST['tabela'])) // Criar tudo depois do primeiro post
{
    
	
	
    
	$_SESSION['contador']++;
	
	
	for ($i=0; $i < 9 ; $i++) { //cria o array 
		$tabela[$i] = $_POST['tabela'][$i];
	}



    if ($_SESSION['jogador'] == 'SKYNET X' || $_SESSION['jogador'] == 'SKYNET O') {//verifica se o jogador é maquina e joga onnde esta vazio
        for ($i=0; $i <= 8 ; $i++) {
            $rando = rand(0, 8);
            if ($tabela[$rando] == '') {
                $tabela[$rando] = $_SESSION['jogador'];
                // echo $tabela[$rando];
                break;
            }
        }
       
            
        
        
     
    }

	@$tabela[$_POST['posicao']] = $_SESSION['jogador'];// Recebe o nome do jogador e atribui na posição(passado pelo value do button) no array

	if ($tabela[0] == $_SESSION['jogador'] & $tabela[1] == $_SESSION['jogador'] & $tabela[2] == $_SESSION['jogador'] | $tabela[3] == $_SESSION['jogador'] & $tabela[4] == $_SESSION['jogador'] & $tabela[5] == $_SESSION['jogador'] | 
		$tabela[6] == $_SESSION['jogador'] & $tabela[7] == $_SESSION['jogador'] & $tabela[8] == $_SESSION['jogador'] | $tabela[0] == $_SESSION['jogador'] & $tabela[3] == $_SESSION['jogador'] & $tabela[6] == $_SESSION['jogador'] | 
		$tabela[1] == $_SESSION['jogador'] & $tabela[4] == $_SESSION['jogador'] & $tabela[7] == $_SESSION['jogador'] | $tabela[2] == $_SESSION['jogador'] & $tabela[5] == $_SESSION['jogador'] & $tabela[8] == $_SESSION['jogador'] | 
		$tabela[0] == $_SESSION['jogador'] & $tabela[4] == $_SESSION['jogador'] & $tabela[8] == $_SESSION['jogador'] | $tabela[2] == $_SESSION['jogador'] & $tabela[4] == $_SESSION['jogador'] & $tabela[6] == $_SESSION['jogador'] )
	{
        $vencedor = 1;
        
        
	}// verifica se há ganhador, se nao passa a jogada pro proximo 
    
    else if($_SESSION['jogador'] == 'Humano X' ||$_SESSION['jogador'] == 'Humano O' ){// verifica se o jogador é humano e qual a escolha e passa para o proximo
		if ($_SESSION['jogador'] == 'Humano X') 
	{
        $_SESSION['jogador'] = 'SKYNET O';
        
	}
	else
	{
		$_SESSION['jogador'] = 'SKYNET X';
	}
	} 
	
	else {
		if ($_SESSION['jogador'] == 'SKYNET X') 
	{
		$_SESSION['jogador'] = 'Humano O';
	}
	else
	{
		$_SESSION['jogador']     = 'Humano X';
	}
	}
	



	if ($_SESSION['contador'] == 10 && @$vencedor != 1) {//verifica se deu empate
       
        $vencedor = 2;
        
	}

}



?>