<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <header class="header">
        <a href="#" class="logo">
        <img src="{{ asset('assets/logo-cafe.png')}}" alt="">
            <span>The Coffee Nook</span>
        </a>
       

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#contact">contact</a>
        </nav>


    </header>

    <section class="home" id="home">

        <div class="content">
            <h3>Onde cada gole <span>Conta uma história!</span></h3>
            <p>Dê uma pausa, tome um bom café no The Coffe Nook. </p>
        </div>

        <div class="image">
        <img src="{{ asset('assets/home.png')}}" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span>Quem somos?</span></h1>

        <div class="row">

            <div class="image">
            <img src="{{ asset('assets/about.png')}}" alt="">
            </div>

            <div class="content">
                <h3>Nosso The Coffe Nook</h3>
                <p>Bem-vindo à The Coffee Nook, onde o café é uma arte e cada cliente é um amigo. Desde 1990, nos dedicamos a servir os melhores cafés, preparados com grãos de qualidade e paixão. </p>
             <p>Em um ambiente acolhedor, oferecemos não apenas bebidas excepcionais, mas também momentos preciosos compartilhados entre amigos e familiares.</p>
             <p>Explore nosso cardápio de cafés especiais, acompanhados por delícias caseiras e eventos culturais que fazem da The Coffee Nook um destino único. Junte-se a nós e descubra por que somos mais do que uma cafeteria, somos um lar longe de casa.</p>
            </div>

        </div>

    </section>

    <section class="menu" id="menu">

        <h1 class="heading"><span>Menu</span></h1>

        <div class="box-container">

            <div class="box">
                <p>Os grãos de café são as sementes das plantas de café, que pertencem à família botânica Rubiaceae.</p>
                <p>Originários das regiões tropicais do mundo, especialmente da África, Ásia e América Latina.</p>
                <p>Esses grãos são cultivados em árvores de café, que produzem frutos conhecidos como cerejas de café.</p>
                <img src="{{ asset('assets/graos.png')}}" alt="">
            </div>

            <div class="box">
            <img src="{{ asset('assets/cafe-menu.jpg')}}" alt="">
            </div>

            <div class="box">
                <p>O café é uma das bebidas mais populares e apreciadas em todo o mundo, conhecido por seu sabor rico, aroma envolvente e efeitos estimulantes.</p>
                <p>A história do café remonta a séculos atrás, com lendas que contam sobre sua descoberta por pastores que observaram o comportamento animado de suas cabras após consumirem os frutos de uma planta desconhecida. </p>
                <p>Desde então, o café se espalhou pelo mundo, tornando-se uma parte essencial da cultura e da sociedade em muitos países.</p>
            </div>

        </div>

    </section>
    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span></h1>

        <div class="icons-container">

            <div class="icons">
    
                <h3>Atendimento:</h3>
                <p>Segunda á sexta: 08:00 ás 21:00</p>
                <p>Sábados: 09:00 ás 12:00</p>
            </div>

            <div class="icons">
              
                <h3>email:</h3>
                <p>Thecoffenook@gmail.com</p>
                <p>Thecoffenook@gmail.com</p>
            </div>

            <div class="icons">
         
                <h3>Telefone:</h3>
                <p>+55-4565-7890</p>
                <p>+55-4564-7890</p>
            </div>
        </div>

        <div class="row">
        <div class="image">
            <img src="{{ asset('assets/contato.avif')}}" alt="Imagem de Contato">
        </div>
        <div class="form-container">
            <form action="/enviar-formulario" method="POST">
                @csrf
                <h3>Formulário</h3>
                <div class="inputBox">
                    <input id="nome" name="nome" type="text" placeholder="Seu Nome">
                    <input id="telefone" name="telefone" type="number" placeholder="Telefone">
                </div>
                <div class="inputBox">
                    <input id="endereco" name="endereco" type="text" placeholder="Endereço">
                    <input id="sexo" name="sexo" type="text" placeholder="Sexo">
                </div>
                <textarea id="mensagem" name="mensagem" placeholder="Digite aqui:" cols="30" rows="10"></textarea>
                <input id="btnEnviar" type="submit" value="Enviar" class="btn btn-marrom">
                <div id="resultado"></div>
            </form>
        </div>
    </div>
    </section>

    <!-- footer  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3></i> The Coffe Nook </h3>
                <p>Para os verdadeiros amantes do café.</p>
            </div>

            <div class="box">
                <h3>links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> enroll now</a>
                <a href="#"> <i class="fas fa-caret-right"></i> parent portal</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school calendar</a>
                <a href="#"> <i class="fas fa-caret-right"></i> lunch menu</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school supply list</a>
            </div>

            <div class="box">
                <h3>categorias</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> about us</a>
                <a href="#"> <i class="fas fa-caret-right"></i> academics</a>
                <a href="#"> <i class="fas fa-caret-right"></i> admissions</a>
                <a href="#"> <i class="fas fa-caret-right"></i> news & events</a>
                <a href="#"> <i class="fas fa-caret-right"></i> contact us</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-caret-right"></i> terms of use</a>
                <a href="#"> <i class="fas fa-caret-right"></i> site map</a>
                <a href="#"> <i class="fas fa-caret-right"></i> FAQs</a>
                <a href="#"> <i class="fas fa-caret-right"></i> accessibility statement</a>
            </div>

        </div>

        <div class="credit"> &copy; copyright @ 2024 by <span>Mariana Ocireu</span></div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="script.js"></script>

</body>
</html>