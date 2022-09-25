<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="menu">
        <div id="logo">
            <img src="assets/img/logo2.png">
        </div>
        <div id="menu-mobile" onclick="menuToggle()">
            <img src="assets/icons/menu.png">
        </div>
        <div id="menu-area">
            <ul>
                <label for="rd_inicio">
                    <li id="mn_inicio" class="check">
                        <a href="#inicio">Inicio</a>
                    </li>
                </label>
                <label for="rd_quem_sou">
                    <li id="mn_quem_sou">
                        <a href="#quem_sou">Quem Sou</a>
                    </li>
                </label>
                <label for="rd_habilidades">
                    <li id="mn_habilidades">
                        <a href="#habilidades">Habilidades</a>
                    </li>
                </label>
                <label for="rd_projetos">
                    <li id="mn_projetos">
                        <a href="#projetos">Projetos</a>
                    </li>
                </label>
            </ul>
        </div>
    </nav>
    <main>
        <section class="bloco" id="inicio">
            <div class="presentation">
                <div class="Iam">
                    <p>Eu sou </p><br><h1>Diego Schmitt</h1><br>
                    <p>desenvolvedor web.</p>
                </div>
                <div class="contacts">
                    <div class="linkedin btns">
                        <a href="">
                            <img src="assets/icons/linkedin.png">
                            Linkedin                 
                        </a>
                    </div>  
                    <div class="git btns">
                        <a href="">
                            <img src="assets/icons/git.png">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="photo">
                <img src="assets/img/teste.jpg">
            </div>
        </section>
        <section class="bloco" id="quem_sou">
           <!-- <div class="photo">
                <img src="assets/img/teste2.jpg">
            </div>-->
            <div class="description">
                <p>
                    Olá, aqui vai um resumo da minha história até aqui como programador.
                    Meu primeiro hello world, ou o primeiro led que fiz piscar por meio de linha de código foi em 2014 na liguagem C, durante o curso tecnico em eletrônica, que concluí em 2016.
                    Em 2018 resolvi cursar Analise e Desenvovimento de sistemas, curso que concluí em 2021, durante o periodo da graduação foquei meus estudos em desenvolver sistemas web, fiz diversos cursos, exercicios, alguns sistemas completos, desenvolvendo tanto back-end, quanto front-end.
                    Nos ultimos anos trabalhei na industria de bebidas, fundei uma empresa de estamparia, mas não exerci a função de desenvolvedor web profissionalmente.
                    Essa pagina tem por objetivo disponibilizar informações para recrutadores, sobre, projetos que fiz, ou estou desenvolvendo, certificações, tecnologias que conheço, e disponibilizar meus contatos para propostas de trabalho.     
                </p>
                <div class="contacts">
                    <div class="email btns">
                        <a href="">
                            <img src="assets/icons/email.png">
                            Email               
                        </a>
                    </div>  
                    <div class="whats btns">
                        <a href="">
                            <img src="assets/icons/whats.png">
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bloco" id="habilidades">
        <div class="tecnologias">
                <h3>Essas são as tecnologias que possuo conhecimento</h3>
                <img src="assets/img/html.png">
                <img src="assets/img/css.png">
                <img src="assets/img/js.png">
                <img src="assets/img/php.png">
                <img src="assets/img/mysql.png">
                <img src="assets/img/bootstrap.png">
                <img src="assets/img/react.png">
                <img src="assets/img/nodejs.png">
            </div>

            <div class="certificacoes">
            <h3>Essas são minhas certificações</h3>
                <div class="slide">  
                    <div class="btn-slide">
                        <div id="voltar" class="btn">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div id="next" class="btn">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="slides">
                        <div id="atual" class="image">
                            <img src="assets/img/certificado_10094.jpg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/img/certificado_10096.jpg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/img/certificado_10097.jpg" alt="">
                        </div>
                        <div class="image">
                            <img src="assets/img/certificado_6161929.jpg" alt="">
                        </div>
                    </div>
                    <div class="balls">
            
                    </div>    
                </div>
            </div>
        </section>

        <section id="projetos">
            <h3>Esses são alguns projetos que desenvolvi</h3>
            <div class="projetos">
                <div id="p1">
                    ...
                </div>
                <div id="p2">
                    ...                
                </div>
                <div id="p3">
                    ...
                </div>
            </div>
            <div class="more btns">
                <a href="">
                    Ver mais projetos
                </a>
            </div>
        </section>
    </main>
    <script src="https://kit.fontawesome.com/ca14b9e588.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>