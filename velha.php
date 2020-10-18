    <?php 
    
    if (!isset($_SESSION)) { session_start(); }
    require('cabecalho.php');
    require_once('inicializacao.php');
    require('logica.php');
    

?>
<h2> JOGO DA VELHA </h2>
<br>
<form method="POST" action="index.php"><input type="submit"  value="Novo Jogo" name="new" class="btn-btn"></form>
<br>
<h1>JOGADOR ATUAL: <?= $_SESSION['jogador']; ?></h1>
<br>
    <form method="POST" >
        <table>
            <tr>
                <td>
                    <button id="btn" name="posicao" value="0" 
                    class=""
                    <?= @$tabela[0]!="" | @$vencedor!=""?"disabled" :"";//desablita o button depois de ter algo dentro?> 

                    >
                    <?= @$tabela[0]  ?> 
                    <input 
                    type="hidden" 
                    name="tabela[0]" 
                    value="<?= @$tabela[0];  // Passa o valor na hora que é criado o array  ?>"
                    >
                    </button>
                    

                    
                </td>

                <td>
                    <button id="btn" name="posicao" value="1" class=""
                    <?= @$tabela[1]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[1]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[1]" 
                    value="<?= @$tabela[1];  ?>"
                    >
                </td>
                <td>
                    <button id="btn" name="posicao" value="2" class=""
                    <?= @$tabela[2]!="" | @$vencedor!=""?"disabled" :"";?>
                    >
                    <?= @$tabela[2]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[2]" 
                    value="<?= @$tabela[2];  ?>"
                    >
                </td>
            </tr>
            <tr>
                <td><button id="btn" name="posicao" value="3" class=""
                <?= @$tabela[3]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[3]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[3]" 
                    value="<?= @$tabela[3];  ?>"
                    >
                </td>
                <td><button id="btn" name="posicao" value="4" class=""
                <?= @$tabela[4]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[4]  ?>

                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[4]" 
                    value="<?= @$tabela[4];  ?>"
                    >
                </td>
                <td><button id="btn" name="posicao" value="5" class=""
                <?= @$tabela[5]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[5]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[5]" 
                    value="<?= @$tabela[5];  ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>
                <button id="btn" name="posicao" value="6" 
                class=""
                <?= @$tabela[6]!="" | @$vencedor!=""?"disabled" :"";?>
                
                >
                    <?= @$tabela[6]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[6]" 
                    value="<?= @$tabela[6];  ?>"
                    >
                </td>
                <td><button id="btn" name="posicao" value="7" class=""
                <?= @$tabela[7]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[7]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[7]" 
                    value="<?= @$tabela[7];  ?>"
                    >
                </td>
                <td><button id="btn" name="posicao" value="8" class=""
                <?= @$tabela[8]!="" | @$vencedor!=""?"disabled" :"";?>
                >
                    <?= @$tabela[8]  ?>
                    </button>
                    <input 
                    type="hidden" 
                    name="tabela[8]" 
                    value="<?= @$tabela[8];  ?>"
                    >
                </td>
            </tr>
        </table>
        <input type="hidden" name="jogador" value="<?= $_SESSION['jogador'];  ?>">
        <input type="hidden" name="contador" value="<?= $_SESSION['contador'];  ?>" >

        <br><br>

        <button><input type="button" value="Aperte para a SKYNET JOGAR" class="btn-btn"></button>
        
        
        
                        
                      
    </form>
    <span class=''><?= @$vencedor=="1" ?" O Jogador $_SESSION[jogador] Venceu!" :""; ?></span> 
    <span class=''><?= @$vencedor=="2" ?" O Jogo empatou" :""; ?></span>

    

<?php 
    require('rodape.php');
?>
