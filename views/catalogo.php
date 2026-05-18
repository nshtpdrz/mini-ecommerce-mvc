<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xochique - Catálogo</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* Variables de color Xochique */
        :root {
            --blanco-hueso: #F9F6F0;
            --terracota: #914D33;
            --verde-nopal: #4C5D44;
        }

        body {
            background-color: var(--blanco-hueso);
            color: var(--terracota);
            font-family: 'Playfair Display', serif;
        }

        /* Barra de navegación estilo terracota */
        .navbar-xochique {
            background-color: var(--terracota);
        }

        /* Títulos y textos */
        h1, h2, h3, h4, h5 {
            color: var(--terracota);
            font-weight: 700;
        }

        .text-precio {
            color: var(--terracota);
            font-weight: bold;
        }

        /* Tarjetas de productos */
        .card {
            background-color: #ffffff;
            border: 1px solid #E6E2D3;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(145, 77, 51, 0.15) !important;
        }

        /* Botón CTA Verde Nopal */
        .btn-nopal {
            background-color: var(--verde-nopal);
            color: var(--blanco-hueso);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-nopal:hover {
            background-color: #3b4835; /* Un tono más oscuro al pasar el mouse */
            color: #ffffff;
        }
    </style>
</head> 
<body>
    <nav class="navbar navbar-dark navbar-xochique mb-4 shadow-sm">
        <div class="container">
            <span class="navbar-brand mb-0 h1 fs-3">Xochique</span>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-5">Colección Artesanal</h1>
        
        <div class="row"> 
            <?php foreach ($productos as $producto): ?> 
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm"> 
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="Producto" style="height: 500px; object-fit: cover;"> 
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                            <p class="card-text text-muted" style="font-family: sans-serif;"><?php echo $producto['descripcion']; ?></p>
                            <h4 class="text-precio">$<?php echo number_format($producto['precio'], 2); ?></h4>
                        </div>
                        <div class="card-footer bg-white border-top-0 pb-3">
                            <button class="btn btn-nopal w-100 py-2">Añadir a mi bolsa</button>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>