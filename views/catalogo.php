<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Corporativo</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head> 
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">TechStore eCommerce</span>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-5">Catálogo de Productos</h1>
        
        <div class="row"> 
            <?php foreach ($productos as $producto): ?> 
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm"> 
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="Producto"> 
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                            <p class="card-text text-muted"><?php echo $producto['descripcion']; ?></p>
                            <h4 class="text-primary">$<?php echo number_format($producto['precio'], 2); ?></h4>
                        </div>
                        <div class="card-footer bg-white border-top-0">
                            <button class="btn btn-success w-100">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html> 