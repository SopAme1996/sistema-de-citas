const citas = {
    idSucursal: null,
    idColaborador: null,
    servicios: {},
    fecha_hora: {},
    informacion: {
        nombre: null,
        apellido: null,
        email: null,
        telefono: null,
    },
};
let fechaHora = [];
const calendar = new FullCalendar.Calendar(
    document.getElementById("calendar"),
    {
        locale: "es",
        initialView: "timeGridWeek",
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,agendaWeek,agendaDay", // Agregar las opciones de vista "agenda"
        },
        contentHeight: 500,
        height: 500,
        selectable: true,
        select: function(info) {
            const startDate = info.start; // Fecha de inicio seleccionada
            const endDate = info.end; // Fecha de fin seleccionada (solo en caso de rango)

            fechaHora = {
                ...fechaHora,
                [startDate]: {
                    start: startDate,
                    end: endDate,
                }
            }

            citas.fecha_hora = fechaHora;
            $("#aviso4").hide();

            console.log(citas);
        },
        // slotDuration: "01:00:00"
    }
);

calendar.render();

//capturamos la informacion de la sucursal
$(".sucursal").click((e) => {
    e.preventDefault();
    let idSuc = e.target.getAttribute("id");
    citas.idSucursal = idSuc;
    $("#aviso1").hide();
    console.log(citas);
});

$(".colaborador").click((e) => {
    e.preventDefault();
    let idCol = e.target.getAttribute("id");
    console.log(idCol);
    citas.idColaborador = idCol;
    $("#aviso2").hide();
    console.log(citas);
});

let servicios = [];

$(".servicio").click((e) => {
    e.preventDefault();
    let idServicio = e.target.getAttribute("id");
    //cortar con - para obtener el id del servicio
    let id = idServicio.split("-")[1];
    //agregar el servicio al objeto
    servicios = {
        ...servicios,
        [idServicio]: {
            id: idServicio,
            precio: $(`#${idServicio}`).text(),
            nombre: $('#servicioName-'+id).text(),
            descripcion: $('#servicioDescrip-'+id).text(),
            tiempo : $('#servicioTiempo-'+id).text(),
        }
    }
    citas.servicios = servicios;
    $("#aviso3").hide();
    console.log(citas);
});

$("#nameInput").keyup((e) => {
    e.preventDefault();
    let nombre = e.target.value;
    citas.informacion.nombre = nombre;
    $("#avisoName").hide();

});

$("#lastNameInput").keyup((e) => {
    e.preventDefault();
    let apellido = e.target.value;
    citas.informacion.apellido = apellido;
    $("#avisoLastName").hide();
});

$("#emailInput").keyup((e) => {
    e.preventDefault();
    let email = e.target.value;
    citas.informacion.email = email;
    $("#avisoEmail").hide();
});

$("#phoneInput").keyup((e) => {
    e.preventDefault();
    let telefono = e.target.value;
    citas.informacion.telefono = telefono;
    $("#avisoPhone").hide();
});

//validamos el formulario antes de pasar a la otra pestana
const verificamosInformacion = () => {
    let panelActive = getActivePanel().getAttribute("id");
    if (citas.idSucursal == null && panelActive == "ubicacion") {
        $("#aviso1").show();
        return true;
    }
    if (citas.idColaborador == null && panelActive == "colaboradores"){
        $("#aviso2").show();
        return true;
    } 
    if (Object.entries(citas.servicios).length == 0 && panelActive == "servicio"){
        $("#aviso3").show();
        return true;
    }
    if (Object.entries(citas.fecha_hora).length == 0 && panelActive == "fechas"){
        $("#aviso4").show();
        return true;
    }
    if (citas.informacion.nombre == null && panelActive == "informacion") 
    {
        $("#avisoName").show();
        return true;
    }
    if (citas.informacion.apellido == null && panelActive == "informacion"){
        $("#avisoLastName").show();
        return true;
    }
    if (citas.informacion.email == null && panelActive == "informacion"){
        $("#avisoEmail").show();
        return true;
    }
    if (citas.informacion.telefono == null && panelActive == "informacion"){
        $("#avisoPhone").show();
        return true;
    }

    return false;
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener("click", (e) => {
    //validamos si el usuario selecciono una sucursal
    const isEmpty = verificamosInformacion();
    console.log(isEmpty);

    if (!isEmpty) {
        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

        //open active panel
        setActivePanel(activeStep);
    }
});

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener("click", (e) => {
    const isEmpty = verificamosInformacion();

    if (!isEmpty) {
        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if (
            !(
                eventTarget.classList.contains(
                    `${DOMstrings.stepPrevBtnClass}`
                ) ||
                eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
            )
        ) {
            return;
        }

        //find active panel
        const activePanel = findParent(
            eventTarget,
            `${DOMstrings.stepFormPanelClass}`
        );

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
            activePanel
        );

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;
        } else {
            activePanelNum++;
        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);
    }
});
