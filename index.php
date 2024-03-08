<html>
    <body>
        <h1>Teste php com login</h1>
        <h2 href="Protegida.php">Protegida</h2>
        <hr/>
        <?php
            session_start();
            if (isset($_session["usuario"])){
        ?>
        <a href="logout.php">logout</a>
        <?php     
          }
        <?
    </body>
</html>