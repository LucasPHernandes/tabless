<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Table Generator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">

            <div class="form">
                <header>
                    <h1>Tabless</h1>
                </header>
                <form action="#" method="post">
                    <input type="number" required name="colunas" placeholder="Nº de Colunas...">
                    <input type="number" required name="linhas" placeholder="Nº de Linhas...">
                    <input type="submit" value="Criar" class="btn">
                </form>
            </div>

            <div class="bar" >
            </div>

            <div class="copia_codigo">
                <div class="code" >
                        <?php
                            if (!empty($_POST['linhas'] && $_POST['colunas'])) {
                                echo "<xmp><table></xmp>";
                                for ($tr=0; $tr < $_POST['linhas']; $tr++) { 
                                    echo "<xmp>    <tr></xmp>";
                                        for ($th=0; $th < $_POST['colunas']; $th++) { 
                                            echo "<xmp>        <th></th></xmp>";
                                            // echo "<xmp>     </xmp>";
                                        }
                                    echo "<xmp>    </tr></xmp>";
                                }
                                echo "<xmp></table></xmp>";
                            }                  
                        ?>
                    
                </div>
                <button class="btn" onclick="copiar()">Copiar</button>
            </div>
        </div>

        <footer>
            <h2>Criado por Lucas e @brahminha em 22/05/2021</h2>
        </footer>
    </body>

    <script>
        function copiar() {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.querySelector('.code'));
                range.select().createTextRange();
                document.execCommand("copy");
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.querySelector('.code'));
                window.getSelection().addRange(range);
                document.execCommand("copy");
                alert("Tabela copiada!")
            }
        }
    </script>
</html>

