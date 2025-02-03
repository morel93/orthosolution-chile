<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orthosolution Chile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5F9EA0;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #2F4F4F;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        .menu button {
            background-color: #2F4F4F;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .menu button:hover {
            background-color: #1F3F3F;
        }
        .section {
            display: none;
        }
        .active {
            display: block;
        }
        .image-container img {
            width: 80%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            margin-top: 10px;
        }
    </style>
    <script>
        function showSection(sectionId) {
            var sections = document.getElementsByClassName("section");
            for (var i = 0; i < sections.length; i++) {
                sections[i].classList.remove("active");
            }
            document.getElementById(sectionId).classList.add("active");
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a Orthosolution Chile</h1>
        <div class="menu">
            <img src=https://github.com/morel93/orthosolution-chile/blob/main/imagenes/titulo.png>
            <button onclick="showSection('quienes-somos')">Quiénes somos</button>
            <button onclick="showSection('objetivos')">Objetivos</button>
            <button onclick="showSection('doctor')">Doctor</button>
            <button onclick="showSection('clinica')">Nuestra Clínica</button>
        </div>

        <div id="quienes-somos" class="section active">
            <h2>Quiénes somos</h2>
            <p>Somos una clínica especializada en ortodoncia, comprometidos con la salud bucal de nuestros pacientes.</p>
            <div class="image-container">
                <img src="https://github.com/morel93/orthosolution-chile/blob/main/imagenes/quienes-somos.jpeg" alt="Quiénes somos">
            </div>
        </div>

        <div id="objetivos" class="section">
            <h2>Objetivos Especificos</h2>
            <p>Nuestro objetivo es proporcionar tratamientos ortodóncicos de alta calidad utilizando tecnología avanzada.</p>
            <div class="image-container">
                <img src="https://github.com/morel93/orthosolution-chile/blob/main/imagenes/objetivos-generales.jpeg" alt="Objetivos Generales">
            </div>
        </div>

        <div id="doctor" class="section">
            <h2>Presentación del Doctor</h2>
            <p>El Dr. Juan Pérez es un especialista en ortodoncia con más de 10 años de experiencia en el campo.</p>
            <div class="image-container">
                <img src="https://github.com/morel93/orthosolution-chile/blob/main/imagenes/doctor.png" alt="Doctor">
            </div>
        </div>

        <div id="clinica" class="section">
            <h2>Nuestra Clínica</h2>
            <div class="image-container">
                <img src="https://github.com/morel93/orthosolution-chile/blob/main/imagenes/clinica.jpg" alt="Imagen de la clínica">
            </div>
        </div>
    </div>
</body>
</html>