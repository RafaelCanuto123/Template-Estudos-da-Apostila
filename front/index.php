<?php
    session_start();
   include '../back/functions.php';   
   include '../back/tarefas.php';   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Desenvolvimento Web</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Slabo+27px&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h2 style="font-family: 'Roboto Slab', serif; text-align:center;">Desenvolvimento Web</h2>
                <p style="font-family: 'Slabo 27px', serif; text-align:center;">Desenvolvimento web com PHP e MySql</p>
                <div style="text-align:center">
                   <img src="../img/home-run.png" style="margin-right:2px;">
                   <a href="index.php"  class="btn btn-warning" style="color:white;">Inicio</a>
                   <img src="../img/calendario.png" style="margin-right:2px;"> 
                    <button id="index" class=" btn btn-warning" style="color:white;">Calendário</button>
                    <img src="../img/list.png" style="margin-right:2px;">
                    <button id="Tare" class="btn btn-warning" style="color:white;">Tarefas</a>
                </div>
            </div>
        </header>
            <section>
            <div class="container">
            <div id="calendario" style="display:none; text-align:center;">
            <table class="table">
                <tr style="background-image: linear-gradient(#8E0E00,#1F1C18);">
                        <th style="color:white;">Dom</th>
					    <th style="color:white;">Seg</th>
					    <th style="color:white;">Ter</th>
					    <th style="color:white;">Qua</th>
					    <th style="color:white;">Qui</th>
					    <th style="color:white;">Sex</th>
					    <th style="color:white;">Sáb</th>
                </tr>
                        <?php echo calendario();?>
                    </table>
            </div>
            </div>
            <div class="container">
            <div id="tarefas" style="display:none; text-align:center;">
                    <h3>Gerenciador de Tarefas</h3>
                    <form >
						<fieldset>
						<label>Tarefa:</label>
						    <input	type="text" class="w3-input w3-border w3-round" name="nome"	/>
                        <br>
                        Descrição(Opcional):
						   <textarea name="descricao" class="w3-input w3-border w3-round"></textarea>
						</label>
                        <label>
				            Prazo	(Opcional):
				            <input	type="text" name="prazo" class="w3-input w3-border w3-round"	/>
                        </label>
                        <fieldset>
                            <legend>Prioridade:</legend>
                             Baixa
                            <input type="radio" name="prioridade" value="baixa"/>
                            Média
                            <input type="radio" name="prioridade" value="media"/>
                            Alta
                            <input type="radio" name="prioridade" value="alta"/>
                        </fieldset>
                        <label>Tarefa concluída:</label>
                        <input type="checkbox" name="concluida" value="Sim">
                        <br>
						<input	type="submit" value="Cadastrar" class="btn btn-success"	/>
						</fieldset>
				</form>
                <hr>
                <table class="w3-table">
                    <tr>
                        <th>Tarefa</th>
                        <th>Descrição</th>
                        <th>Prazo</th>
                        <th>Prioridade</th>
                        <th>Concluída</th>
                    </tr>
                    <?php

                            foreach($lista_tarefas as $tarefa)
                            {
                                 echo '<tr>';
                                    echo $tarefa['nome'];
                                    echo $tarefa['descricao'];
                                    echo $tarefa['prazo'];
                                    echo $tarefa['prioridade'];
                                    echo $tarefa['concluida'];
                                 echo '</tr>';
                            }
                    ?>
                
                   <tr>
                        <td><?php echo $tarefa['nome']; ?></td>
                        <td><?php echo $tarefa['descricao']; ?></td>
                        <td><?php echo $tarefa['prazo']; ?></td>
                        <td><?php echo $tarefa['prioridade']; ?></td>
                        <td><?php echo $tarefa['concluida']; ?></td>
                   </tr>
              
                </table>

            </div>
            </div>
            </section>
                <footer>
                </footer>
    </body>
</html>
<script>
    $("#index").on('click',function(){
        $("#calendario").slideToggle();
        $("#tarefas").hide();
    });
    $("#Tare").on('click',function(){
        $("#tarefas").slideToggle();
        $("#calendario").hide();
    });
</script>