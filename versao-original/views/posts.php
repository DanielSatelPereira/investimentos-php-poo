<?php
require_once 'classes/PostApiService.php';

$api = new PostApiService();
$posts = $api->getPosts();
?>

<?php include 'head.php'; ?>

<style>
    .card {
        flex: 1;
        min-width: 250px;
        background-color: #fff;
        padding: 20px;
        border-left: 4px solid #004d99;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>

    <?php include 'header.php'; ?>

    <main>

        <header>
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="compras.php">Cadastrar Compras</a></li>
                    <li><a href="ativo.php">Preço Médio</a></li>
                    <li><a href="dividendos.php">Cadastrar Dividendos</a></li>
                    <li><a href="relatorio.php">Relatório</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="registro.php">Registro</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Posts Externos (API JSONPlaceholder)</h1>

            <?php if (empty($posts)): ?>
                <p>Não foi possível carregar os posts da API</p>
            <?php else: ?>
                <div class="cards">
                    <?php foreach ($posts as $post): ?>
                        <div class="card">
                            <h2><?= htmlspecialchars($post['title']) ?></h2>
                            <p><?= htmlspecialchars($post['body']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </main>


        <?php include 'footer.php'; ?>