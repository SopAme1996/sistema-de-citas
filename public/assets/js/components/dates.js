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
