@php
    $nombreImagen = "./logo.png";
    $imagenBase64 = "data:image/png;base64," . base64_encode($nombreImagen);
@endphp
<header>
    <table class="table fluid mb">
        <tr class="text-center">
            <td rowspan="3" style="width: 20%">
                <img src="<?php echo $nombreImagen; ?>" width="150">
            </td>
            <td class="bold" style="font-size: 15px; width: 60%">
                FACULTAD DE EDUCACION
            </td>
            <td style="width: 20%; text-align: left">
                Código: PD010-648
            </td>
        </tr>
        <tr>
            <td style="font-size: 15px;" class="text-center">SISTEMA DE GESTIÓN DE LA CALIDAD</td>
            <td>Versión: v.2</td>
        </tr>
        <tr style="width: 60%">
            <td class="text-center" style="font-size: 12px;">
                LICENCIATURA EN EDUCACION
            </td>
            <td style="vertical-align: center; padding-top: .5rem">Página: <span class="pagenum"></span></td>
        </tr>
    </table>
</header>