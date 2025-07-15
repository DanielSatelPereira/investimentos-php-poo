<?php require_once 'functions.php' ?>

<?php include 'head.php'; ?>

<title>Dashboard - Gestão de Ativos</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <main>
        <section class="dashboard">
            <h1>Bem-vindo à Gestão de Ativos</h1>
            <p>Este sistema ajuda você a genrenciar seus investimentos em ativos</p>
            <div class="cards">
                <div class="card">
                    <h2>Total Investido</h2>
                    <p>R$ <?php echo calcularTotalInvestido(); ?></p>
                </div>
                <div class="card">
                    <h2>Total de Dividentos</h2>
                    <p>R$ <?php echo calcularTotalDividendos(); ?></p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>