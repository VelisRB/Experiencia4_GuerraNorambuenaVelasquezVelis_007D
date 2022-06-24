{% load static %}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{% static 'css/style.css'%}">
    <script src="{%static 'js/galeria.js'%}"></script>
    <title>Catalogo | Fourty Free</title>
    <link rel="shortcur icon" href="{% static 'img/logo.png'%}" type="image/x-icon"/>
    <script src="https://www.paypal.com/sdk/js?client-id=AZAjxmgI0P0sv5H6D1LYoxd8v8I7_DefRAL-37g8nA5aAGa44oWoTgl42XSRPH7Vx_huEEJJlFLD8QK_&currency=USD"></script>
  </head>
  <body>
<header class="container-fluid bg-info d-flex justify-content-end">
    <p class="text-light mb-0 p-2 fs-9"> Contactanos +569 5555 0000</p>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-2" id="menu">
        <div class="container-fluid">
            <a href="{% url 'index' %}"><img class="logo" src="{% static 'img/logo.png' %}"></a>
            <a class="navbar-brand" href="#">
                <span class="text-primary fs-5 fw-bold"> 40'Free </span>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{% url 'index' %}">Inicio</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link alert-info dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item">Catalogo</a>
                  <a class="dropdown-item" href="{% url 'forms_clientes' %}" >Personalizados</a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{% url 'aboutus' %}">Quienes somos</a>
              </li>
    
    
    
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{% url 'registro' %}">Registro </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{% url 'seguir' %}">Estado Pedido </a>
              </li>
    
    
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Estoy buscando..." aria-label="Search">
              <button class="btn btn-primary btn-primary-outline-success" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
  <div class="encabezadoC">
    <h3 class="tituloC"> Catalogo de Productos</h3>
    <button id="checkout" class="button-checkout" onclick="pay()">Carrito</button>
    </div>
    
    <div class="productoC"> 
      
      <div class="box box1">
        <img src="{%static 'img/gallery/arnes1.jpg'%}"> 
        <h5>Arnes Verde</h5>
        <h5>$14.990</h5>
        <center><button class="button-add" onclick="add('Arnes Verde',14.990)">Agregar</button></center>
      </div>
  
      <div class="box box2">
        <img src="{%static 'img/gallery/arnes2.jpg'%}">
        <h5>Arnes Cafe</h5>
        <h5>$14.990</h5>
        <center><button class="button-add" onclick="add('Arnes Cafe',14.990)">Agregar</button></center>
      </div>
  
      <div class="box box3">
        <img src="{%static 'img/gallery/collar1.jpg'%}">
        <h5>Collar Rojo</h5>
        <h5>$4.990</h5>
        <center><button class="button-add" onclick="add('Collar Rojo',4.990)">Agregar</button></center>
      </div>
  
      <div class="box box4">
        <img src="{%static 'img/gallery/collar2.jpg'%}">
        <h5>Collar Cafe</h5>
        <h5>$4.990</h5>
        <center><button class="button-add" onclick="add('Collar Cafe',4.990)">Agregar</button></center>
      </div>
  
      <div class="box box5">
        <img src="{%static 'img/gallery/collar3.jpg'%}">
        <h5>Collar Verde</h5>
        <h5>$4.990</h5>
        <center><button class="button-add" onclick="add('Collar Verde',4.990)">Agregar</button></center>
      </div>
  
      <div class="box box6">
        <img src="{%static 'img/gallery/collar4.jpg'%}">
        <h5>Collar Morado</h5>
        <h5>$4.990</h5>
        <center><button class="button-add" onclick="add('Collar Morado',4.990)">Agregar</button></center>
      </div>
  
      <div class="box box7">
        <img src="{%static 'img/gallery/correa1.jpg'%}">
        <h5>Correa Negra</h5>
        <h5>$6.990</h5>
        <center><button class="button-add" onclick="add('Correa Negra',6.990)">Agregar</button></center>
      </div>
  
      <div class="box box8">
        <img src="{%static 'img/gallery/correa2.jpg'%}">
        <h5>Correa Rosa</h5>
        <h5>$6.990</h5>
        <center><button class="button-add" onclick="add('Correa Rosa',6.990)">Agregar</button></center>
      </div>
    </div>  
    
    <center><div id="paypal-button-container">
      <script>
        paypal.Buttons({
          style:{
            color:'blue',
            shape:'pill',
            label:'pay'
        },
        
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 100
                    }
                }]
            });
        },
        onApprove: function(data,actions) {
            actions.order.capture().then(function(total){
                console.log(total);
            });
        },
        onCancel: function(data) {
            alert("Pago Cancelado")
            console.log(data);
        }
        }).render('#paypal-button-container');
      </script>
    </div><center>
    <!--Footer-->
    <footer class="bg-dark text-center text-white">
      <div class="container p-4">
        <!-- Seccion: multimedia -->
        <section class="mb-4">
    
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://es-la.facebook.com/" role="button"
          <a href="index.html"><img class="logo" src="{% static 'img/icon-facebook.png'%}"></a>
    
          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/?hl=es" role="button"
          <a href="index.html"><img class="logo" src="{% static 'img/icon-instagram.png'%}"></a>
          </a>
    
          <!-- Github -->
          <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/VelisRB/Experiencia4_GuerraNorambuenaVelasquezVelis_007D" role="button"
          <a href="index.html"><img class="logo" src="{% static 'img/icon-git.png'%}"></a>
          </a>
        </section>
    
    
        <!-- Forma -->
        <section class="">
          <form action="">
    
        <!-- Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
    
    
            <!--Grid columna-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Integrantes</h5>
    
              <ul class="list-unstyled mb-0">
                <li>
                  Victor Guerra
                </li>
                <li>
                  Nicolás Norambuena
                </li>
                <li>
                  Paula Velasquez
                </li>
                <li>
                  Joaquin Velis
                </li>
              </ul>
            </div>
    
    
          </div>
    
        </section>
    
      </div>
    
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Todos los derechos reservados
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
  </body>
</html>