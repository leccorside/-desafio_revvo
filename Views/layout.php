<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Cursos</title>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Cursos</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/script.js" defer></script>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <div class="logo">
            <h1>LEO</h1>
        </div>
        <nav>
            <input type="text" placeholder="Pesquisar curso...">
            <div class="user-info">
                <img src="public/images/user.jpg" alt="Usuário">
                <span>John Doe</span>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Dinâmico -->
    <main>
        <?= $content; ?>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="footer-content">
            <p>© Copyright 2025 - Todos os direitos reservados.</p>
            <p>Contato: contato@leolearning.com | (21) 98765-3434</p>
        </div>

    <header>
        <h1>Leo Cursos</h1>
        <nav>
            <input type="text" placeholder="Pesquisar curso...">
            <div class="user-info">Seja bem-vindo, John Doe</div>
        </nav>
    </header>
    <main>
        <?= $content ?>
    </main>
    <footer>
        <p>© 2025 Leo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
