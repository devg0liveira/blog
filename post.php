<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniões</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffffff;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            text-align: center;
            padding: 30px 20px;
            position: relative;
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .post-container {
            padding: 40px;
        }

        .post-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #e74c3c;
        }

        .post-title {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .post-date {
            color: #7f8c8d;
            font-size: 1rem;
            font-style: italic;
        }

        .post-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #2c3e50;
            margin-bottom: 40px;
            text-align: justify;
        }

        .post-content p {
            margin-bottom: 20px;
        }

        .back-button {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 20px;
        }

        .back-button:hover {
            background: #2980b9;
            transform: scale(1.05);
        }

        .actions {
            text-align: center;
            padding: 20px;
            background: #ecf0f1;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #2c3e50;
            color: white;
            margin-top: 30px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 10px;
            }

            .post-container {
                padding: 20px;
            }

            .post-title {
                font-size: 2rem;
            }

            .post-content {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .post-title {
                font-size: 1.8rem;
            }

            .post-container {
                padding: 15px;
            }
        }

        /* Decorações esportivas */
        .sports-icon {
            font-size: 2rem;
            margin: 10px 0;
            color: #e74c3c;
        }

        .quote {
            background: #f8f9fa;
            border-left: 5px solid #3498db;
            padding: 15px 20px;
            margin: 20px 0;
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php
    $posts = file_get_contents('data/posts.json');
    $posts = json_decode($posts, true);
    $id = $_GET['id'] ?? null;
    foreach ($posts as $post) {
        if ($post['id'] == $id) {
            echo "<h2>" . htmlspecialchars($post['titulo']) . "</h2>";
            echo "<p>" . htmlspecialchars($post['conteudo']) . "</p>";
            $data = $post['data'];
            $ano = substr($data, 0, 4);
            $mes = substr($data, 4, 2);
            $dia = substr($data, 6, 2);
            $data_formatada = "$dia/$mes/$ano";
            echo "<p><small>Publicado em: " . htmlspecialchars($data_formatada) . "</small></p>";
            break; // Encerra o loop após encontrar o post
        }
    }
    ?>
    <div class="actions">
        <a href="index.php" class="back-button">Voltar para o início</a>
    </div>
    </div>
</body>

</html>