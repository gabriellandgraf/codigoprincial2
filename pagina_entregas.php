                <?php 
                    // incluir rodapé da página 
            include 'db.php';

            if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
                header('Location: login.php?login=erro2');
                exit();
            }
            ?>

            <!DOCTYPE html>
            <html lang="pt-BR">
            <head>
            <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Entregas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo htmlspecialchars($title); ?></title>
                <link rel="stylesheet" href="styles.css">
            </head>

            <body>
            <?php include 'header.php'; ?>

    <div class="container mt-4">
        <h2>Página de entregas</h2>
        <?php if ($result->num_rows > 0): ?>
            <table class="table">
                <thead>
                    <tr> 
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th>Endereço</th>
                    </tr>
                </thead>

                <tbody>
                <?php while ($pedido = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entrega['id']); ?></td>
                        <td><?php echo htmlspecialchars($entrega['data_entrega']); ?></td>
                        <td>R$ <?php echo number_format($entrega['total'], 2, ',', '.'); ?></td>
                    </tr>

                <header>
                    <h1><?php echo htmlspecialchars($header); ?></h1>
                </header>
                <main>
                    <section>
                        <p><?php echo htmlspecialchars($content); ?></p>
                    </section>
                </main>

 <?php include 'rodape.html' ;?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        </body>

        </html>