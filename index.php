<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <div class="header-content">
                    <div class="header-left">
                        <img src="img/inteligencia-artificial.png" class="imgRedonda" alt="IA Logo" />
                        <h4>Asistente IA</h4>
                    </div>
                    <p id="question-link">¿Qué buscar?</p>
                </div>
            </div>

            <div class="body" id="chatbody">
                <p class="asistente">"¡Hola! Soy un ChatBot tu asistente de IA. Estoy aquí para responder preguntas
                    relacionadas
                    con la Inteligencia Artificial. Por favor, asegúrate de ingresar las preguntas correctamente para
                    que pueda brindarte la mejor ayuda posible. Espero poder ayudarte."</p>
                <div class="scroller"></div>
            </div>

            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Pregúntale algo">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>
        </div>
    </div>
    <!-- Ventana emergente para la lista de preguntas -->
    <div id="popup-overlay">
        <div id="popup">
            <h3>Preguntas frecuentes:</h3>
            <div class="question-list">
                <ul>
                    <li>¿Qué es IA?</li>
                    <li>¿Cómo aprende una IA?</li>
                    <li>¿Es Siri una IA?</li>
                    <li>¿Qué hace Google con IA?</li>
                    <li>¿Cómo afecta la IA a los trabajos?</li>
                    <li>¿Qué es Deep Learning?</li>
                    <li>¿Cuál es la IA más avanzada?</li>
                    <li>¿Qué empresas usan IA?</li>
                    <li>¿Es la IA igual que el machine learning?</li>
                    <li>¿Puede una IA ser creativa?</li>
                    <li>¿Cómo evita la IA el sesgo?</li>
                    <li>¿Cuál es el futuro de la IA?</li>
                    <li>¿Cómo afecta la IA a la medicina?</li>
                    <li>¿Puede una IA reemplazar a los humanos?</li>
                    <li>¿Cómo se regula la IA?</li>
                    <li>¿Qué es la IA ética?</li>
                    <li>¿Cómo se usa la IA en la industria?</li>
                    <li>¿La IA puede tener emociones?</li>
                    <li>¿Cómo se protege la privacidad en la IA?</li>
                    <li>¿Cuál es el papel de la IA en la robótica?</li>

                </ul>
            </div>
            <button id="close-popup">Cerrar</button>
        </div>
    </div>
    <!-- Script para la interacción del chat -->
    <script src="app.js"></script>
</body>

</html>