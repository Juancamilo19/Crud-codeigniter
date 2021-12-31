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
    
    <title>Editar Banda</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">Editar datos de la Banda:<?php echo $banda['nombrebanda'];?></h1>
        <form action="<?php echo base_url();?>usuario/update/<?php echo $banda['idbanda']; ?>" class="mt-4" method="post">
            <div class="row">
                <div class="col-lg-6">
                <div class="row">
                        <label>Genero</label>
                        <select name="id_genero" id="id_genero">
                            <option value="">Escoge el genero</option>
                            <?php foreach($get_genero as $genee) { ?>
                                <option value="<?php echo $genee['idgenero']; ?>"
                                <?php if($banda['id_genero'] == $genee['idgenero']) {?> selected <?php }?>
                                >
                                <?php echo $genee['nombregenero']; ?>
                            
                            </option> 
                            <?php } ?>
                           
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="">Nombre de la banda </label>
                        <input type="text" name="nombrebanda" class="form-control <?php echo form_error('nombrebanda') ? 'is-invalid':''; ?>" placeholder="Nombre" value="<?php echo $banda['nombrebanda'];?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('nombrebanda');?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Año Fundacion</label>
                        <input type="numb" name="añofundacion" class="form-control <?php echo form_error('añofundacion') ? 'is-invalid':''; ?>" placeholder="Año" value="<?php echo $banda['añofundacion'];?>">
                        <div class="invalid-feedback">
                        <?php echo form_error('añofundacion');?>
                        </div>
                        
                    </div>

                    <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Repite la contraseña</label>
                        <input type="password" name="repeatPassword"class="form-control"placeholder="Contraseña">
                        <div class="invalid-feedback">
                        Please choose a username.
                        </div> -->
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