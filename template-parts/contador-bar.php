<?php
// ID de la página actual
$post_id = get_queried_object_id();

if ( ! $post_id ) {
    return;
}

// Campos ACF de esta página
$contador_activo  = get_field( 'contador_activo', $post_id );
$contador_fecha   = get_field( 'contador_fecha_fin', $post_id );

// Si no está activo o no hay fecha, no mostramos nada
if ( ! $contador_activo || ! $contador_fecha ) {
    return;
}

// IMPORTANTE: el "Return Format" del Date Picker debe ser: Y-m-d H:i:s
// Ejemplo: 2025-12-05 23:59:59
$fecha_sql = $contador_fecha;
?>

<div class="contador">
    <div class="contador-inner">

        <div class="contador-texto">
            <img
                src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/contador-titulo-desktop.png"
                alt="Los descuentos llegan en"
                class="titulo-desktop">
            <img
                src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/contador-titulo-mob.png"
                alt="Los descuentos llegan en"
                class="titulo-mobile">
        </div>

        <div class="cronometro">
            <div class="numeros">
                <div class="bloque">
                    <span id="dias" class="valor">00</span>
                    <span class="label">DÍAS</span>
                </div>
                <span class="separador">:</span>
                <div class="bloque">
                    <span id="horas" class="valor">00</span>
                    <span class="label">HRS</span>
                </div>
                <span class="separador">:</span>
                <div class="bloque">
                    <span id="minutos" class="valor">00</span>
                    <span class="label">MIN</span>
                </div>
                <span class="separador">:</span>
                <div class="bloque">
                    <span id="segundos" class="valor">00</span>
                    <span class="label">SEG</span>
                </div>
            </div>
        </div>

        <div class="cta">
            <a href="https://www.mathpal.us/programs-pricing/" class="cta-boton">
                <img src="https://9068661.fs1.hubspotusercontent-na1.net/hubfs/9068661/assets/img/btn-contador-mathpal.png" alt="">
            </a>
        </div>

    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/luxon.min.js"></script>
<script>
(function() {
    // Fecha desde ACF (formato SQL: 2025-12-05 23:59:59)
    const fechaEvento = luxon.DateTime.fromSQL('<?php echo esc_js( $fecha_sql ); ?>', { zone: 'America/Lima' });

    function actualizarContador() {
        const zonaHorariaLocal = Intl.DateTimeFormat().resolvedOptions().timeZone;
        const ahora = luxon.DateTime.local().setZone(zonaHorariaLocal);
        const diferencia = fechaEvento.diff(ahora);

        if (diferencia.as('milliseconds') > 0) {
            const { days, hours, minutes, seconds } =
                diferencia.shiftTo('days', 'hours', 'minutes', 'seconds').toObject();

            document.getElementById('dias').innerHTML     = String(Math.floor(days)).padStart(2, '0');
            document.getElementById('horas').innerHTML    = String(hours).padStart(2, '0');
            document.getElementById('minutos').innerHTML  = String(minutes).padStart(2, '0');
            document.getElementById('segundos').innerHTML = String(Math.floor(seconds)).padStart(2, '0');
        } else {
            document.getElementById('dias').innerHTML     = '00';
            document.getElementById('horas').innerHTML    = '00';
            document.getElementById('minutos').innerHTML  = '00';
            document.getElementById('segundos').innerHTML = '00';
        }
    }

    actualizarContador();
    setInterval(actualizarContador, 1000);

    window.click_section = function(id) {
        const el = document.getElementById(id);
        if (el) {
            el.scrollIntoView({ behavior: 'smooth' });
        }
    };
})();
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('.container-fluid.c-head');
        if (!header) return;

        const offsetTop = header.offsetTop;

        window.addEventListener('scroll', function () {
            if (window.scrollY >= offsetTop) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    });
</script>

