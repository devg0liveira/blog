<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagens</title>
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
            max-width: 800px;
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

        .sports-icon {
            font-size: 2rem;
            margin: 10px 0;
            color: #e74c3c;
        }

        .form-container {
            padding: 40px;
        }

        h3 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 10px;
        }

        form {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        input[type="submit"] {
            background: #27ae60;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            display: block;
            margin: 20px auto;
            width: 200px;
        }

        input[type="submit"]:hover {
            background: #229954;
            transform: scale(1.05);
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-link a:hover {
            color: #e74c3c;
            text-decoration: underline;
        }

        pre {
            background: transparent;
            border: none;
            padding: 0;
            margin: 0;
            text-align: center;
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

            .form-container {
                padding: 20px;
            }

            form {
                padding: 20px;
            }

            h1 {
                font-size: 1.8rem;
            }

            h3 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 10px;
            }

            .form-container {
                padding: 15px;
            }

            form {
                padding: 15px;
            }

            input[type="text"],
            textarea {
                padding: 12px;
            }

            input[type="submit"] {
                width: 100%;
            }
        }

        /* Estilo para placeholders */
        ::placeholder {
            color: #95a5a6;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #95a5a6;
        }

        ::-ms-input-placeholder {
            color: #95a5a6;
        }
    </style>
</head>

<body>
    <h3><strong>o que você está pensando ?</strong></h3>
    <form action="save_post.php" method="post">
        <!-- Formulário para criar um novo post -->
        <label for="Título"></label>
        <input type="text" name="title" id="title" placeholder="Título da postagem" required><br><br>
        <label for="Conteúdo"></label>
        <textarea name="content" id="content" cols="30" rows="5" placeholder="Conteúdo da postagem" required></textarea>
        <pre>
<input type="submit" value="Postar">
<p><small><a href="index.php">voltar a página inicial</a></small></p>
        </pre>
    </form>
</body>

</html>