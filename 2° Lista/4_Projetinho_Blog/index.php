<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/style.css">
</head>


<body>

    <!-- Menu -->

    <header>

        <nav id="nav_main">

            <img id="logo" src="assets/logo-light.png" alt="">

            <ul>
                <a href=""> opção 1 </a>
                <a href=""> opção 2 </a>
                <a href=""> opção 3 </a>
            </ul>
        </nav>

    </header>

    <!-- Conteúdo Principal -->

    <main>

        <aside>

            <nav id="nav_aside">

                <ul>
                    <a href=""> <i id="html" class="fa-brands fa-html5"></i> HTML </a>
                    <a href=""> <i id="css" class="fa-brands fa-css3"></i> CSS </a>
                    <a href=""> <i id="php" class="fa-brands fa-php"></i> PHP </a>
                    <a href=""> <i id="js" class="fa-brands fa-js"></i> JAVASCRIPT </a>
                </ul>

            </nav>

        </aside>


        <section id="two">

            <div id="content">

                <article id="news">

                </article>


                <article id="comment">

                    <div id="icon">D</div>

                    <form id="all" action="./comment.php" method="post">
                        <input id="nome" type="text" name="name" placeholder="Seu nome">
                        <textarea name="comment" id="" cols="65" rows="6"></textarea>
                        <button name="submit" id="submit">Submit</button>
                    </form>

                </article>

                <article>

                    <?php
                    //Dar uma melhorada no css do código abaixo:
                    require './comment.php';

                    $sql_select = mysqli_query($mysqli, "SELECT * FROM comments");

                    while ($lista_comments = $sql_select->fetch_assoc()) {
                    ?>

                        <p><?php echo $lista_comments['name']; ?></p>
                        <p><?php echo $lista_comments['comment']; ?></p>

                    <?php }; ?>

                </article>


            </div>
        </section>

    </main>


    <!-- Rodapé -->

    <footer>
        <section>

        </section>
    </footer>

</body>

</html>