<?php
// 1. Chama o arquivo do "Gerente"
require_once 'controllers/SelecaoController.php';

// 2. Cria o gerente para trabalhar
$controller = new SelecaoController();

// 3. O "Recepcionista" lê a URL para saber o que o usuário quer fazer
// Ele pergunta: "Existe alguma 'acao' na URL?"
if (isset($_GET['acao'])) {
    
    // Se a ação for 'cadastrar', manda o gerente executar a função de cadastrar
    if ($_GET['acao'] == 'cadastrar') {
        $controller->cadastrar();
    }
    
} else {
    // 4. Se não tem nenhuma ação na URL (a pessoa só entrou no site normal), 
    // manda o gerente mostrar a tela inicial
    $controller->index();
}

<?php
require_once 'controllers/SelecaoController.php';

$controller = new SelecaoController();

if (isset($_GET['acao'])) {
    
    if ($_GET['acao'] == 'cadastrar') {
        $controller->cadastrar();
    }
    // ADICIONE ESTA PARTE AQUI 👇
    elseif ($_GET['acao'] == 'editar') {
        $controller->editar();
    }
    
} else {
    $controller->index();
}

<?php
require_once 'controllers/SelecaoController.php';

$controller = new SelecaoController();

if (isset($_GET['acao'])) {
    
    if ($_GET['acao'] == 'cadastrar') {
        $controller->cadastrar();
    }
    elseif ($_GET['acao'] == 'editar') {
        $controller->editar();
    }
    // ADICIONE ESTA PARTE AQUI 👇
    elseif ($_GET['acao'] == 'deletar') {
        $controller->deletar();
    }
    
} else {
    $controller->index();
}