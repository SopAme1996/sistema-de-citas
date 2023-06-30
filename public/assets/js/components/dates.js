var calendar = new FullCalendar.Calendar(document.getElementById("calendar"), {
    locale: "es",
    initialView: "dayGridMonth",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    contentHeight: 500,
    height: 500,
    selectable: true,
});

calendar.render();

$(document).ready(function() {
    $('#wizardCita').validate({
        rules: {
            // Define las reglas de validación para tus campos de formulario
            nombre: {
                required: true,
                // Agrega más reglas de validación según tus necesidades
            },
            campo2: {
                required: true,
                // Agrega más reglas de validación según tus necesidades
            },
            // Agrega más campos de formulario y reglas de validación si es necesario
        },
        messages: {
            // Define los mensajes de error para tus campos de formulario
            nombre: {
                required: "Este campo es obligatorio",
                // Agrega más mensajes de error según tus necesidades
            },
            campo2: {
                required: "Este campo es obligatorio",
                // Agrega más mensajes de error según tus necesidades
            },
            // Agrega más campos de formulario y mensajes de error si es necesario
        },
        // Puedes agregar más opciones de configuración si es necesario
    });



});

