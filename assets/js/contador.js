document.addEventListener('DOMContentLoaded', function () {
    const bar = document.getElementById('mp-contador');
    if (!bar || !window.luxon) return;

    // Fecha y hora del evento desde el atributo data-end (ISO)
    const endIso = bar.dataset.end; // ej: 2025-11-30T23:59:59
    const fechaEvento = luxon.DateTime.fromISO(endIso, { zone: 'America/Lima' });

    function actualizarContador() {
        // Zona horaria local del navegador
        const zonaHorariaLocal = Intl.DateTimeFormat().resolvedOptions().timeZone;
        const ahora = luxon.DateTime.local().setZone(zonaHorariaLocal);

        const diferencia = fechaEvento.diff(ahora);

        if (diferencia.as('milliseconds') > 0) {
            const { days, hours, minutes, seconds } =
                diferencia.shiftTo('days', 'hours', 'minutes', 'seconds').toObject();

            document.getElementById('dias').innerHTML = String(Math.floor(days)).padStart(2, '0');
            document.getElementById('horas').innerHTML = String(hours).padStart(2, '0');
            document.getElementById('minutos').innerHTML = String(minutes).padStart(2, '0');
            document.getElementById('segundos').innerHTML = String(Math.floor(seconds)).padStart(2, '0');
        } else {
            document.getElementById('dias').innerHTML = '00';
            document.getElementById('horas').innerHTML = '00';
            document.getElementById('minutos').innerHTML = '00';
            document.getElementById('segundos').innerHTML = '00';
        }
    }

    actualizarContador();
    setInterval(actualizarContador, 1000);





    const header = document.querySelector('.container-fluid.c-head');
    if (!header) return;

    const observer = new IntersectionObserver(
        ([entry]) => {
            if (!entry.isIntersecting) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        },
        {
            root: null,
            threshold: 0,
            rootMargin: '-1px 0px 0px 0px'
        }
    );

    observer.observe(header);
});

// Si usas este helper en más sitios, déjalo global
function click_section(id) {
    const el = document.getElementById(id);
    if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
    }
}






