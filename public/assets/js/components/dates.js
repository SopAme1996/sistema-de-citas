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

const calendar = new FullCalendar.Calendar(
    document.getElementById("calendar"),
    {
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
    }
);

calendar.render();

//capturamos la informacion de la sucursal
$(".sucursal").click((e) => {
    e.preventDefault();
    let idSuc = e.target.getAttribute("id");
    citas.idSucursal = idSuc;
    console.log(citas);
});

$(".colabarador").click((e) => {
    e.preventDefault();
    let idCol = e.target.getAttribute("id");
    citas.idColaborador = idCol;
    console.log(citas);
});

//validamos el formulario antes de pasar a la otra pestana
const verificamosInformacion = () => {
    let panelActive = getActivePanel().getAttribute("id");
    if (citas.idSucursal == null && panelActive == "ubicacion") return true;
    if (citas.idColaborador == null && panelActive == "colaboradores")
        return true;
    if (
        Object.entries(citas.servicios).length == 0 &&
        panelActive == "servicio"
    )
        return true;

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
