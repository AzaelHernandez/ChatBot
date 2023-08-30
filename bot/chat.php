<?php

include "Bot.php";
$bot = new Bot();
$questions = [
    "¿Qué es IA?" => "La inteligencia artificial (IA) se refiere a la simulación de procesos de inteligencia humana por parte de máquinas, especialmente sistemas de computadoras. Estos procesos incluyen el aprendizaje, el razonamiento y la resolución de problemas.",
    "¿Cómo aprende una IA?" => "Una IA aprende a través del proceso de aprendizaje automático (machine learning), donde se le proporcionan datos y algoritmos para mejorar su rendimiento en tareas específicas.",
    "¿Es Siri una IA?" => "Sí, Siri es un asistente virtual desarrollado por Apple que utiliza tecnologías de inteligencia artificial y procesamiento del lenguaje natural para comprender y responder preguntas de los usuarios.",
    "¿Qué hace Google con IA?" => "Google utiliza la inteligencia artificial en una variedad de aplicaciones, como búsqueda predictiva, traducción automática, recomendaciones de contenido y desarrollo de vehículos autónomos.",
    "¿Cómo afecta la IA a los trabajos?" => "La IA puede automatizar tareas repetitivas y mejorar la eficiencia en muchas industrias. Sin embargo, también puede cambiar la naturaleza de ciertos trabajos y requerir nuevas habilidades.",
    "¿Qué es Deep Learning?" => "El Deep Learning (aprendizaje profundo) es una técnica de aprendizaje automático que utiliza redes neuronales artificiales para modelar y resolver problemas complejos.",
    "¿Cuál es la IA más avanzada?" => "Actualmente, la IA más avanzada a menudo se encuentra en sistemas de procesamiento de lenguaje natural, visión por computadora y automóviles autónomos.",
    "¿Qué empresas usan IA?" => "Muchas empresas líderes en tecnología, como Google, Amazon, Microsoft, IBM y Facebook, utilizan activamente la IA en diversas aplicaciones y servicios.",
    "¿Es la IA igual que el machine learning?" => "No, la IA es un campo más amplio que incluye el machine learning como una técnica para lograr inteligencia en las máquinas.",
    "¿Puede una IA ser creativa?" => "Algunas IA pueden generar contenido creativo, como música, arte y escritura, pero el debate sobre si esto constituye (creatividad) humana es un tema en curso.",
    "¿Cómo evita la IA el sesgo?" => "Evitar el sesgo en la IA es un desafío. Se deben aplicar técnicas de equidad y pruebas rigurosas para reducir y mitigar cualquier sesgo presente en los datos y algoritmos utilizados.",
    "¿Cuál es el futuro de la IA?" => "El futuro de la IA promete avances en la automatización, la toma de decisiones, la atención médica, la movilidad y más, pero también plantea preguntas éticas y regulatorias importantes.",
    "¿Cómo afecta la IA a la medicina?"=>"La IA se utiliza en la medicina para ayudar en el diagnóstico médico, el descubrimiento de medicamentos y la gestión de registros de pacientes, entre otros usos.",
    "¿Puede una IA reemplazar a los humanos?"=>"En algunas tareas específicas, las IA pueden superar a los humanos, pero el reemplazo completo de los humanos es un tema complejo y debatido.",
    "¿Cómo se regula la IA?"=>"La regulación de la IA varía según el país y se centra en la privacidad, la seguridad y la responsabilidad de las empresas y desarrolladores.",
    "¿Qué es la IA ética?"=>"La IA ética se refiere al diseño y uso de sistemas de IA de manera responsable y considerada, teniendo en cuenta sus impactos sociales, éticos y legales.",
    "¿Cómo se usa la IA en la industria?"=>"La IA se utiliza en la industria para optimizar procesos de fabricación, analizar datos, prever demandas y mejorar la eficiencia general.",
    "¿La IA puede tener emociones?"=>"Actualmente, las IA no tienen emociones ni conciencia en el sentido humano. Pueden simular respuestas emocionales, pero carecen de una comprensión real de las emociones.",
    "¿Cómo se protege la privacidad en la IA?"=>"La protección de la privacidad en la IA implica la anonimización de datos, el cumplimiento de regulaciones y el desarrollo de algoritmos que minimicen la exposición de datos personales.",
    "¿Cuál es el papel de la IA en la robótica?"=>"La IA desempeña un papel crucial en la robótica al permitir que los robots tomen decisiones autónomas, naveguen en entornos complejos y realicen tareas específicas de manera inteligente.",

    //name
    "cómo te llamas?" => "Soy ".$bot->getName()." y estoy para servirte.",
    "¿Cómo te llamas?" => "Soy ".$bot->getName()." y estoy para servirte.",
    "Quién te creó?" => "Fui creado por el desarrollador " . $bot->getNameAuthor(),
    "cuál es tu nombre?" => "Soy ".$bot->getName()." y estoy para servirte.",
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy " . $bot->getGender(),
    "tienes nombre?" => "Soy ".$bot->getName(). " y estoy para servirte.",
    //saludo
    "hola" => "Hola que tal!",
    "un saludo" => "como te va",
    "Gracias" => "De nada, fue un gusto poder ayudarte, vuelve pronto.",
    //despedida
    "adios" => "Cuídate, nos vemos pronto",
    "hasta la proxima" => "nos vemos pronto",

];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        $matchedQuestion = null;

        foreach ($questions as $question => $answer) {
            if (stripos($msg, $question) !== false) {
                $matchedQuestion = $question;
                break;
            }
        }
        if ($matchedQuestion === null) {
            $botty->reply("Lo siento, no he comprendido tu pregunta. Por favor, reformúlala o consulta otra pregunta relacionada con la inteligencia artificial.");
        } else {
            $botty->reply($questions[$matchedQuestion]);
        }
    });
}
