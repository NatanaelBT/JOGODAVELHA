<?php
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
    
    
    require('cabecalho.php');
    
     

    
?>
<h2>Bem-vindo ao Jogo da Velha</h2>
<p>O jogo da velha ou jogo do galo ou três em linha é um jogo e/ou passa tempo popular.
É um jogo de regras extremamente simples, que não traz grandes dificuldades para seus
jogadores e é facilmente aprendido. referência <a href="https://pt.wikipedia.org/wiki/Jogo_da_velha">wikipédia</a></p>

<br><br><br><br>

<form name="form" action="velha.php" method="POST">
		<select name="player" >
        <option value="humanx">Eu(X)</option>
		<option value="skyneto">SKYNET(O)</option>
		<option value="humano">Eu(O)</option>
        <option value="skynetx">SKYNET(X)</option>
		</select>
		<input type="submit" id="jogar" name="jogar" value="Jogar" class="btn-btn"/>
</form>


<?php
    require('rodape.php');
    
?>