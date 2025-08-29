<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Pizze il Napolitano</title>
    <meta name="description" content="Descubrí las pizzas más ricas de San Martin que esta en la Provincia de Buenos Aires. Masa artesanal, ingredientes frescos y sabores únicos que conquistarán tu paladar. ¡Pedí ya y disfrutá en casa!">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <style>
        :root{
            --color-nav:#333;
        }

        html{
            font-size:16px;
        }

        body{
            background-color: #e0e5ff;
            font-size:16px;
            overflow-x: hidden; /* Previene scroll horizontal */
        }

        #header-container{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top: 0.625rem;
            font-family: "Oswald", sans-serif;
        }
        
        #header-container #logo {
            display: flex;
            flex-direction: row;
            margin-top: 0.625rem;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-text {
            margin-left: 0.625rem;
        }
        
        nav ul li {
            list-style: none;
            display: inline;
        }
        
        nav ul li a{
            font-size: 0.9375rem;
            padding: 0.9375rem;
            color: var(--color-nav);
            text-decoration: none;
        }
        
        nav ul li a:hover {
            background-color: #e50c39;
            color: #fff;
        }
        
        .main-content h2{
            display: flex;
            justify-content: center;
            font-size: 3.5rem;
            color: #000;
            letter-spacing: 2px;
            font-family: 'Oswald', sans-serif;
        }
        
        #cart {
            display: flex;
            justify-content: end;
            padding-right: 15px;
        }
        
        #subtotal{
            display: none;
            font-family: "Oswald", sans-serif;
            color: #e74c3c;
            font-weight: bold;
            font-size: 1rem;
            padding: 0px 5px;
        }
        
        .gallery{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            font-family: "Work Sans", sans-serif;
        }
        
        .gallery li {
            display: flex;
            box-sizing: border-box;
            list-style: none;
            width: calc(100% / 3);
            padding: 10px;
        }
        
        figure img {
            /* REMOVIDO: width: 33.75rem; height: 23.375rem; */
            width: 100%;
            height: auto;
            max-width: 100%;
            aspect-ratio: 16/9; /* Mantiene proporción consistente */
        }
        .gallery li .box {
            padding: 6px 6px 30px 6px;
        }

        .gallery li .box img {
            width: 100%;
            max-width: 100%;
            height: auto;
            margin-bottom: 6px;
            justify-content: center;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
        }

        .gallery li .box h3 {
            margin-bottom: 6px;
            text-align: center;
            font-size: 1.125rem;
            font-weight: bold;
            line-height: 100%;
            text-transform: uppercase;
            color: #17181a;
            letter-spacing: 2px;
            height: 10vh;
        }

        .gallery li .box p {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: #000000e7;
        }

        .gallery li .box time {
            display: flex;
            justify-content: center;
            font-size: 1rem;
            font-weight: bold;
            color: #000000;
        }

        .gallery li .box .button {
            margin-top: 5px;
            width: 100%;
            padding: 7px;
            border: none;
            background: #0D7139;
            border-radius: 20px;
            cursor: pointer;
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            font-family: "Work Sans", sans-serif;
        }

        footer {
            text-align: center;
            background-color: #f8f9fa;
            padding: 40px 20px 20px 20px;
            font-family: "Oswald", sans-serif;
            border-top: 1px solid #e1e8ee;
            margin-top: 40px;
        }

        .footer-nav {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .footer-nav ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-nav ul li {
            margin: 0 15px;
        }

        .footer-nav ul li a {
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            color: var(--color-nav);
        }

        .footer-nav ul li a:hover {
            color: #e50c39;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .footer-social a {
            margin: 0 10px;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--color-nav);
            text-decoration: none;
        }

        .footer-social a:hover {
            color: #e50c39;
        }

        .footer-copyright {
            text-align: center;
            font-size: 0.9rem;
            color: #666;
            border-top: 1px solid #e1e8ee;
            padding-top: 20px;
        }

        @media (max-width: 960px) {
            #header-container {
                flex-direction: column;
            }

            #header-container #logo {
                display: flex;
                flex-direction: column;
            }

            .gallery {
                flex-direction: column;
                align-items: center;
                margin-top: 60px;
            }

            .img-pizzas {
                width: 100%;
                max-width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <header>
        <div id="header-container">
            <div id="logo">
                <img src="img/pizza.svg" alt="logo de la pizzeria">
                <img class="logo-text" src="img/text.svg" alt="Pizzeria Pizze il Napolitano">
            </div>
            <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="nosotros.html">NOSOTROS</a></li>
                    <li><a href="sucursales.html">SUCURSALES & DELIVERY</a></li>
                    <li><a href="contacto.html">CONTACTO</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="main-content">
        <h2 class="animate__animated animate__flipInX"> NUESTRAS PIZZAS </h2>
        
        <div id="cart">
            <div id="subtotal">
                <p>Total: $<span id="total-amount">0</span></p>
            </div>
            <div class="position-relative">
                <i class="fa-solid fa-cart-shopping fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="badge">
                    0
                </span>
            </div>
        </div>
        
        <ul class="gallery">
        <?php
        include_once("config_products.php");
        include_once("db.class.php");
        $link=new Db();
        $sql="SELECT products.id_product, products.image, products.price, products.product_name, products.start_date, categories.category_name FROM products 
        INNER JOIN categories ON products.id_category = categories.id_category";
        $stmt=$link->run($sql);
        $data=$stmt->fetchAll();
        
        foreach($data as $row){
        ?>
        <li>
            <div class="box">
                <figure>
                    <img src="<?php echo $row['image'] ?>" class="img-pizzas" alt="<?php echo $row['product_name'] ?>">
                    <figcaption>
                        <h3><?php echo $row['product_name'] ?></h3>
                        <p>$ <?php echo $row['price'] ?></p>
                        <time><?php echo $row['start_date'] ?></time>          
                    </figcaption>
                </figure>
                <button class="button" value="<?php echo $row['id_product'] ?>" data-price="<?php echo $row['price'] ?>">
                    Añadir al carrito <i class="fa-solid fa-cart-shopping fa-lg"></i>
                </button>
            </div>
        </li>
        <?php
        }
        ?>
        </ul>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Sucursales & Delivery</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="footer-social" id="social">
                <a href="https://www.facebook.com/user"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/user"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/user"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="footer-copyright">
                <p> &copy;
                    <script>
                        let currentYear = new Date().getFullYear();
                        document.write(currentYear);
                    </script> Pizzeria Pizze il Napolitano. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    
    <script>
        const countButtons = document.querySelectorAll("button").length;
        let products = [];
        let totalPrice = 0;
        
        for(let i = 0; i < countButtons; i++){
            document.querySelectorAll("button")[i].addEventListener("click", showValue);
        }
        
        function showValue(){
            const price = parseFloat(this.getAttribute("data-price"));
            if (products.includes(this.value)){
                return;
            } else {
                this.style.backgroundColor = "#e50c39";
                this.innerHTML = `Agregado <i class="fa-solid fa-cart-shopping"></i>`;
                products.push(this.value);
                console.log(products);
                totalPrice = totalPrice + price;
                console.log('Total: $' + totalPrice);
                
                // CORRECCIÓN CLAVE: usar textContent en lugar de setAttribute
                document.getElementById("badge").textContent = products.length;
                document.getElementById("subtotal").style.display = "block";
                document.getElementById("total-amount").textContent = totalPrice;
            }
        }
    </script>
    <script src="js/main.js"></script>
</body>
</html>