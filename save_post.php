<?php
$titulo = $_POST['title'];
$conteudo = $_POST['content'];
echo "Título: $titulo <br>";
echo "Conteúdo: $conteudo <br>";

# Lê o arquivo JSON existente
$posts = file_get_contents('data/posts.json');
# Decodifica o JSON para um array associativo
$posts = json_decode($posts, true);

# Se não existir, cria um array vazio
if ($posts === null) {
    $posts = [];
}

#Daqui pra baixo foi gerado automaticamente pelo Deepseek
#estudar mais sobre o que foi gerado

// ----> ADICIONE A PARTE DE CALCULAR O ID AQUI <----

// 1. Inicializa a variável que vai guardar o maior ID encontrado
$maior_id = 0;

// 2. Passa por CADA post existente no array $posts
foreach ($posts as $post) {
    // 3. Verifica se o ID do post atual é maior que o $maior_id
    if ($post['id'] > $maior_id) {
        // 4. Se for, atualiza $maior_id para esse número maior
        $maior_id = $post['id'];
    }
}

// 5. O próximo ID é simplesmente o maior ID encontrado + 1
$novo_id = $maior_id + 1;

// ----> AGORA VOCÊ PODE CRIAR O NOVO POST COM O $novo_id <----

// ... o resto do seu código (criar o post, adicionar ao array, salvar) ...
$novo_post = [
    'id' => $novo_id,        // Usa o ID calculado
    'titulo' => $titulo,     // Do seu $_POST
    'conteudo' => $conteudo, // Do seu $_POST
    'data' => date('Ymd')  // Data de hoje
];
# Adiciona o novo post ao array de posts

$posts[] = $novo_post;
file_put_contents('data/posts.json', json_encode($posts, JSON_PRETTY_PRINT));
echo "Post salvo com sucesso!";
echo "<br><a href='index.php'>Voltar para o início</a>";
