<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minecraft Plugins Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #343a40;
            padding: 20px;
            color: #fff;
            font-size: 28px;
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 0;
            border-radius: 0 0 15px 0;
            transition: all 0.3s ease;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        header:hover {
            background-color: #007bff;
        }

        h1 {
            font-size: 48px;
            color: #343a40;
            margin-bottom: 30px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav {
            background-color: #343a40;
            padding: 15px;
            border-bottom: 1px solid #007bff;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #007bff;
        }

        .section {
            margin: 40px 0;
        }

        .card {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 20px;
        }

        .card h3 {
            color: #007bff;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #0056b3;
        }

        footer {
            background-color: #343a40;
            padding: 20px 0;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-radius: 0 0 15px 0;
        }

        /* Estilos específicos para servidores parceiros */
        .server-list {
            margin-top: 40px;
        }

        .server-card {
            width: 100%;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .server-card:hover {
            transform: translateY(-10px);
        }

        .server-card img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
            transition: transform 0.3s ease-in-out;
        }

        .server-card:hover img {
            transform: scale(1.1);
        }

        .server-card-content {
            padding: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 15px 30px;
            color: #fff;
            border-radius: 10px;
            font-size: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Adicionando estilos modernos para o rodapé */
        footer p {
            font-size: 16px;
            margin: 0;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin-right: 15px;
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

<nav>
    <a href="#">Início</a>
    <a href="plugins.php">Plugins</a>
    <a href="#">Discord</a>
    <a href="carrinho.php"><i class="fas fa-shopping-cart"></i></a>
</nav>

<header>
    <h1>MineCraft Plugins Kingdom</h1>
</header>

<section class="section">
    <h2 class="mb-4">Destaques</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="caminho_para_imagem1.jpg" alt="Plugin 1" class="img-fluid">
                    <div class="card-content">
                        <h3 class="h4">Plugin Mágico</h3>
                        <p>Descubra o poder deste incrível plugin mágico para sua aventura no Minecraft.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="caminho_para_imagem2.jpg" alt="Plugin 2" class="img-fluid">
                    <div class="card-content">
                        <h3 class="h4">Plugin de Exploração</h3>
                        <p>Explore novos horizontes com este incrível plugin que adiciona novas áreas ao seu mundo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <h2 class="mb-4">Plugins Disponíveis</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="caminho_para_imagem3.jpg" alt="Plugin 3" class="img-fluid">
                    <div class="card-content">
                        <h3 class="h4">Plugin de Construção</h3>
                        <p>Construa maravilhas com este incrível plugin que traz novos blocos e ferramentas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="caminho_para_imagem4.jpg" alt="Plugin 4" class="img-fluid">
                    <div class="card-content">
                        <h3 class="h4">Plugin de Aventura</h3>
                        <p>Embarque em uma jornada épica com este plugin cheio de missões e desafios.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="caminho_para_imagem5.jpg" alt="Plugin 5" class="img-fluid">
                    <div class="card-content">
                        <h3 class="h4">Plugin de Magia Negra</h3>
                        <p>Domine as artes sombrias com este plugin de magia negra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section server-list">
    <h2 class="mb-4">Reinos Parceiros</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="server-card">
                    <img src="caminho_para_logo_servidor1.jpg" alt="Servidor 1" class="img-fluid">
                    <div class="server-card-content">
                        <h3 class="h5">Reino dos Diamantes</h3>
                        <p>Explore o Reino dos Diamantes, repleto de riquezas e aventuras.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="server-card">
                    <img src="caminho_para_logo_servidor2.jpg" alt="Servidor 2" class="img-fluid">
                    <div class="server-card-content">
                        <h3 class="h5">Reino das Sombras</h3>
                        <p>Desafie as sombras neste reino misterioso cheio de desafios.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="server-card">
                    <img src="caminho_para_logo_servidor3.jpg" alt="Servidor 3" class="img-fluid">
                    <div class="server-card-content">
                        <h3 class="h5">Reino dos Pixels</h3>
                        <p>Entre no Reino dos Pixels, onde a diversão nunca termina.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<a href="plugins.php" class="btn btn-primary btn-lg">Descubra Mais Plugins</a>

<footer>
    <div class="container">
        <p>&copy; 2024 Developed by Water - Shafter</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

</body>
</html>
