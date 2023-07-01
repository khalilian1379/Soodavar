"use strict";
let date = new Date(),
    nextDay = new Date(new Date().getTime() + 864e5),
    nextMonth = 11 === date.getMonth() ? new Date(date.getFullYear() + 1, 0, 1) : new Date(date.getFullYear(), date.getMonth() + 1, 1),
    prevMonth = 11 === date.getMonth() ? new Date(date.getFullYear() - 1, 0, 1) : new Date(date.getFullYear(), date.getMonth() - 1, 1),
    events = [
        { id: 1, url: "", title: "دستمزد طراحی سایت", allDay: !0, start: new Date(date.getFullYear(), date.getMonth() + 1, -9), end: new Date(date.getFullYear(), date.getMonth() + 1, -9), extendedProps: { calendar: "Personal" } },
        { id: 2, url: "", title: "اجاره خانه", start: new Date(date.getFullYear(), date.getMonth() + 1, -11), end: new Date(date.getFullYear(), date.getMonth() + 1, -10), extendedProps: { calendar: "Holiday" } },
        { id: 3, url: "", title: "اسنپ", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -6), allDay: !0, extendedProps: { calendar: "Holiday" } },
        { id: 4, url: "", title: "قبض آب", start: new Date(date.getFullYear(), date.getMonth() + 1, -13), end: new Date(date.getFullYear(), date.getMonth() + 1, -12), extendedProps: { calendar: "Family" } },
    ];
