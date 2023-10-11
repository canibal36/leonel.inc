
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Leonel.inc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css')}}">
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <h1>Leonel.inc</h1>
            <nav>
                <div class="search-bar">
                    <input type="text" placeholder="¿Que es lo que buscas?">
                    <button class="search-button">Buscar</button>
                </div>


                
                <ul>

                    <li><a href="/03/leonel.inc/prestamos/prestamos.php" class="button">Prestamos</a></li>       
                        <ul>

                        </ul>
                    <li><a href="/03/leonel.inc/productos/productos.php" class="button">Productos</a></li>
                        <ul>
                        <li><a href="/03/leonel.inc/login/login.php" class="button">Iniciar cesion</a></li>                       
                        </ul>
                    <li><a href="#" class="/busttoncart.html">Carrito de compras</a></li> <!-- Elemento del carrito -->
                    
                </ul>
            </nav>
        </header>
        <?php
           
        ?>
        <h1>Productos Destacados:</h1>
        <setion class="products">
            <div class="product">
                <img src="img/producto1.jpg" alt="producto 1">
                <h2>Portatil MacBook Pro</h2>
                <p>Procesador:2,4 Ghz intel Core i5</p>
                <p>Memoria Ram: 8Gb 1600MHz DDR3</p>
                <P>Gráficos: Intel Iris 1536</P>
                <p class="price">$599.99</p>
                <button class="add-to-cart" id="btn-home-page">Agregar al carrito</button>
            </div>
            <div class="product">
                <img src="img/producto2.jpg" alt="producto 2">
                <h2>Samsung  Galaxy Z Flip</h2>
                <p>Procesador: Snapdragon 855+</p>
                <p>Memoria Ram: 8Gb</p>
                <p>Almacenaminto interno: 256 Gb</p>
                <p class="price">$29.99</p>
                <button class="add-to-cart" id="">Agregar al carrito</button>
            </div>
        </setion> 
        <setion class="products">
            <div class="product">
                <img src="img/producto3.jpg" alt="producto 1">
                <h2>Computadora MacBook Pro</h2>
                <p>Procesador:2,4 Ghz intel Core i5</p>
                <p>Memoria Ram: 8Gb 1600MHz DDR3</p>
                <P>Gráficos: Intel Iris 1536</P>
                <p class="price">$29.99</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
            <div class="product">
                <img src="img/producto4.jpg" alt="producto 2">
                <h2>Portatil HP</h2>
                <p>Procesador: Snapdragon 855+</p>
                <p>Memoria Ram: 8Gb</p>
                <p>Almacenaminto interno: 256 Gb</p>
                <p class="price">$29.99</p>
                <button class="add-to-cart">Agregar al carrito</button>
            </div>
        </setion>
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="img/logo1.jpg" alt="logo de Solshop">
                        </a>
                    </figure>
                </div>
                <div class="box">
                    <h2>Sobre nosotros:</h2>
                    <p>Somos una empresa privada q cuenta con tienda virtual destinada a exponer y vender articulos de electronica y ropa.</p>
                    <p>Tambien contamos con el servicio de prestamo de dinero.</p>
                </div>
                <div class="box">
                    <h2>siguenos</h2>
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small> 2023 <b>Leonel.inc</b> - Todos los derechos reservados</small>
            </div>
        </footer> 
    </body>
        
</html>