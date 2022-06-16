<?php

$indice = [
    [
        'nombre' => 'Presentación',
        'pagina' => 3
    ],
    [
        'nombre' => 'Bloque I: Antecedentes',
        'pagina' => 4
    ],
    [
        'nombre' => 'Bloque II: Base Legal',
        'pagina' => 5
    ],
    [
        'nombre' => 'Bloque III: Justificación de Creación',
        'pagina' => 6
    ],
    [
        'nombre' => 'Bloque IV: Líneas de Investigación',
        'pagina' => 7
    ],
    [
        'nombre' => 'Bloque V: Objetivos Académicos',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Fundamentación',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Perfiles',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Plan de Estudios',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Malla Curricular',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Estratégias de formación',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VI: Estructura Curricular - Evaluación de los Aprendizajes',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VII: Modalidad de Estudios y Certificación',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque VIII: Monitoreo y Evaluación',
        'pagina' => 8
    ],
    [
        'nombre' => 'Bloque IX: Plan de Financiamiento',
        'pagina' => 8
    ],
    [
        'nombre' => 'Autores',
        'pagina' => 8
    ],
    [
        'nombre' => 'Anexos',
        'pagina' => 8
    ],
    [
        'nombre' => 'Revisión Final',
        'pagina' => 8
    ],
    [
        'nombre' => 'Año',
        'pagina' => 8
    ]

    
];
?>

<div style="text-align: center; margin-top: 3rem">
    <h4 style="text-align: center;">ÍNDICE</h4>
    <table border="0" class=" " style="width: 500px; margin: 0 auto; border: hidden">
        <?php foreach ($indice as $key => $in) : ?>
            <tr>
                <td style="border: hidden; font-size: 14px"><?php echo $key + 1; ?>. <?php echo $in['nombre'] ?> </td>
                <td style="border: hidden; text-align: center; font-size: 14px"><?php echo $in['pagina'] ?></td>
            </tr>

        <?php endforeach; ?>

    </table>
</div>