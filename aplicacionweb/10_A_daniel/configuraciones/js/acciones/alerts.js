$(document).ready(function() {
    Notification.requestPermission(function(permission) {
        if (Notification.permission === "granted") {
            var options = {
                body: "El arbol de la notificación",
                icon: "http://localhost/configuraciones/imagenes/arbol.jpg",
                dir: "ltr"
            };
            var notification = new Notification("Hola Daniel", options);
        } else {
            Notification.requestPermission(function(permission) {
                if (Notification.permission === "granted") {
                    alerta();
                }
            });
        }
    });
});

function alerta() {
    var options = {
        body: "El arbol de la notificación",
        icon: "http://localhost/configuraciones/imagenes/arbol.jpg",
        dir: "ltr"
    };
    var notification = new Notification("Hola Daniel", options);
}