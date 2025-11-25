<?php include 'inc/header.inc.php'; ?>
<title>Startup GameLancer</title>
<link rel="stylesheet" href="css/startup.css">
<div class="container">
    <div class="startup">
        <h1>GAME LANCER</h1>
        <p> Nesta startup o objetivo é unir desenvolvedores de jogos com projetos de jogos a serem desenvolvidos.</p>
        <p> A plataforma funciona como um intermediário, onde os desenvolvedores podem criar perfis, mostrar seus trabalhos anteriores e se candidatar a projetos postados por clientes.</p>
        <p> Os clientes, por sua vez, podem postar seus projetos, definir orçamentos e prazos, e revisar as propostas dos desenvolvedores interessados.</p>
        <p> A plataforma também oferece ferramentas de comunicação e colaboração para facilitar o processo de desenvolvimento dos jogos.</p>
        <p> Com essa startup, espera-se fomentar a criação de jogos independentes, proporcionando oportunidades tanto para desenvolvedores quanto para clientes no mercado de jogos.</p>
        <form method="POST" action="inscricao.php">
            <fieldset class="modelo">
                <legend>Conheça e se inscreva em nossa startup</legend>

                <input type="radio" name="modelo" value="vermelho" id="vermelho" checked>
                <label for="vermelho">
                    <img src="img/cadastro.png">
                    <fieldset class="cadastro">
                        <legend>Formulário de Inscrição</legend>
                        <ol>
                            <li><label for="nome">Nome Completo:</label></li><br>
                            <li><input type="text" name="nome" id="nome" required></li><br><br>
                            <li><label for="email">E-mail:</label></li><br>
                            <li><input type="email" name="email" id="email" required></li><br><br>
                            <li><label for="telefone">Telefone:</label></li><br>
                            <li><input type="tel" name="telefone" id="telefone" required></li><br><br>
                            <li><label for="portfolio">Link do Portfólio:</label></li><br>
                            <li><input type="url" name="portfolio" id="portfolio" required></li><br><br>
                        </ol>
                    </fieldset>
                </label>

                <input type="radio" name="modelo" value="azul" id="azul">
                <label for="azul">
                    <img src="img/cad2.png">
                    <fieldset class="cadastro">
                        <legend>Itens a conhecer</legend>
                        <ol>
                            <li><label for="linguagem">Quais tipos de linguagem Back-end você domina?</label></li><br>
                            <li><input type="text" name="linguagem" id="linguagem" required></li><br><br>
                            <li><label for="front">Quais tipos de linguagem Front-end você domina?</label></li><br>
                            <li><input type="text" name="front" id="front" required></li><br><br>
                        </ol>
                    </fieldset>
                </label>

                <input type="radio" name="modelo" value="verde" id="verde">
                <label for="verde">
                    <img src="img/cad3.png">
                    <fieldset class="cadastro">
                        <legend>Hobbies</legend>
                        <ol>
                            <li><label for="hobbie">Qual seu hobbie favorito?</label></li><br>
                            <li><input type="text" name="hobbie" id="hobbie" required></li><br><br>
                            <li><label for="tempo">Em seu tempo livre o que você faz?</label></li><br>
                            <li><input type="text" name="tempo" id="tempo" required></li><br><br>
                            <button type="submit">Enviar Inscrição</button>
                        </ol>
                    </fieldset>

                </label>
            </fieldset>
    </div>
</div>



<?php include 'inc/footer.inc.php'; ?>