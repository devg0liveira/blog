<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Esportivo</title>
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
            color: #333;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
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
            padding: 40px 20px;
            position: relative;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .posts-container {
            padding: 30px;
        }

        .post {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            border-left: 5px solid #3498db;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 15px;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 10px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .read-more {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .read-more:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        hr {
            border: none;
            height: 2px;
            background: linear-gradient(90deg, transparent, #3498db, transparent);
            margin: 30px 0;
        }

        .new-post {
            text-align: center;
            padding: 30px;
            background: #ecf0f1;
            border-radius: 10px;
            margin: 20px 0;
        }

        .new-post a {
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .new-post a:hover {
            background: #229954;
            transform: scale(1.05);
        }

        pre {
            background: transparent;
            border: none;
            padding: 0;
            margin: 0;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 10px;
            }

            h2 {
                font-size: 2rem;
            }

            .posts-container {
                padding: 20px;
            }

            .post {
                padding: 20px;
            }

            h3 {
                font-size: 1.5rem;
            }

            .read-more,
            .new-post a {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            h2 {
                font-size: 1.8rem;
            }

            .post {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h2>Blog Esportivo</h2>
        </header>

        <div class="posts-container">
            </head>

            <body>
                <h2>Blog Esportivo</h2>
                <?php
                $posts = file_get_contents('data/posts.json');
                $posts = json_decode($posts, true);

                foreach ($posts as $post) {
                    echo "<h3>" . htmlspecialchars($post['titulo']) . "</h3>";
                    echo "<p>" . substr(htmlspecialchars($post['conteudo']), 0, 30) . "...</p>";
                    echo "<a href='post.php?id=" . $post['id'] . "'>Ler mais</a><hr>";
                }

                ?>

                <pre>
<p><a href="new_post.php">Faça sua postagem</a></p>
</pre>
            </body>

</html>