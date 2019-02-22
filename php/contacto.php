<?php
include("header.php");
 ?>
    <div class="container">
        <form action="contacto2.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre" name="nombre">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo Electronico" name="email">
            </div>

            <div class=form-group">
                <input type="text" class="form-control" placeholder="Asunto" name="asunto"> 
            </div>
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje" name="mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<?php
 include("footer.php");
?>