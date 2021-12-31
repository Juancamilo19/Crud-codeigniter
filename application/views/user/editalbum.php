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
    
    <title>Editar Album</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Editar datos del Album:<?php echo $album['nombrealbum'];?></h1>
        <form action="<?php echo base_url();?>album/update/<?php echo $album['idalbum']; ?>" class="mt-4" method="post">
            <div class="row">
            <div class="col-lg-6">
            <div class="row">
                        <label>Bandas</label>
                        <select name="id_banda" id="id_banda">
                            <option value="">Escoge la Banda</option>
                            <?php foreach($get_bandas as $bandaa) { ?>
                                <option value="<?php echo $bandaa['idbanda']; ?>"
                                <?php if($album['id_banda'] == $bandaa['idbanda']) { ?> selected <?php } ?> 
                                >
                                <?php echo $bandaa['nombrebanda']; ?>
                             </option> 
                            <?php } ?>
                           
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Nombre del Album</label>
                        <input type="text" name="nombrealbum" class="form-control <?php echo form_error('nombrealbum') ? 'is-invalid':''; ?>" placeholder="Album" value="<?php echo $album['nombrealbum'];?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('nombrealbum');?>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Año Lanzamiento</label>
                        <input type="numb" name="añolanzamiento" class="form-control <?php echo form_error('añolanzamiento') ? 'is-invalid':''; ?>" placeholder="Lanzamiento" value="<?php echo $album['añolanzamiento'];?>">
                        <div class="invalid-feedback">
                        <?php echo form_error('añolanzamiento');?>
                        </div>
                        
                    </div>
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