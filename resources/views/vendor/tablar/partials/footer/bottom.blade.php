

<style>
        /* Estilo para el footer */
        footer {
            background-color: #d3d3d3; /* Color gris claro */
            color: #333; /* Color del texto */
            padding: 40px 20px;
            text-align: center; /* Centramos el texto */
            position: relative;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: center; /* Centrar las secciones */
            align-items: flex-start; /* Alinear las secciones al inicio */
            gap: 50px; /* Espaciado entre las secciones */
        }

        /* Secciones del footer */
        .footer-section {
            margin: 20px;
            flex: 1;
            min-width: 200px;
        }

        .footer-section h4 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            text-decoration: none;
            color: #333;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        /* Estilo para las redes sociales */
        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            text-decoration: none;
            color: #333;
            font-size: 20px;
        }

        /* Estilo para los derechos reservados */
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        
    </style>
</head>

<body>

    <!-- Footer gris completo y centrado -->
  <footer>
        
        <!-- Conócenos -->
        <div class="footer-section" >
            <h4>Contactanos</h4>
            <ul>
            <li><a href="mailto:contacto@tusitio.com">CONTACTO@PCTWEEZERS.com</a></li>
            <li><a href="tel:+123456789">+569 8152 1887</a></li>
                <li><a href="#">Los Alerces 120, Maipu, Santiago</a></li>
            </ul>
        </div>

        <!-- Servicios -->
        <div class="footer-section">
            <h4>Enlaces Rapidos</h4>
            <ul>
                <li><a href="#">Desarrollo Web</a></li>
                <li><a href="#">Consultoría</a></li>
                <li><a href="#">Soporte Técnico</a></li>
            </ul>
        </div>

        <!-- Contacto -->
        <div class="footer-section">
            <h4>Siguenos</h4>
            <ul>
                <li><a href="https://www.facebook.com/?locale=es_LA">Facebook</a></li>
                <li><a href="https://www.instagram.com/?hl=es">Instagram</a></li>
                <li><a href="https://www.whatsapp.com/download?lang=es_LA">Whatsapp</a></li>
            </ul>
        </div>
    </footer>

    <!-- Derechos reservados -->
    <div class="footer-bottom">
        <p>© 2024 - PCTWEEZERS. Todos los derechos reservados.</p>
    </div>