<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    
    <title>Nueva Canción</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Nueva Canción</h1>
        <form action="<?php base_url();?>nueva-cancion/save" class="mt-4" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Nombre Canción</label>
                        <input type="text" name="nombrecancion" class="form-control <?php echo form_error('nombrecancion') ? 'is-invalid':''; ?>" placeholder="Nombre Cancion" value="<?php echo set_value('nombrecancion');?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('nombrecancion');?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Duración</label>
                        <input type="double" name="duracion" class="form-control <?php echo form_error('duracion') ? 'is-invalid':''; ?>" placeholder="Duracion" value="<?php echo set_value('duracion');?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('duracion');?>
                        </div>
                    </div>

                    <div class="row">
                        <label>Album</label>
                        <select name="id_album" id="id_album">
                            <option value="">Escoge el Album</option>
                            <?php foreach($get_album as $albuu) { ?>
                                <option value="<?php echo $albuu['idalbum']; ?>"><?php echo $albuu['nombrealbum']; ?> </option> 
                            <?php } ?>
                           
                        </select>
                        
                    </div>           

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>