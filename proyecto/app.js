// Control de la ventana emergente (Pop-Up).
var Alert = {
    show: function () {
        document.getElementById("modal").classList.add("show");
    },

    close: function () {
        document.getElementById("modal").classList.remove("show");
    }
};

// Cerrar el Pop-Up al hacer clic fuera de su contenido.
window.addEventListener("click", function (event) {
    var modal = document.getElementById("modal");

    if (event.target === modal) {
        Alert.close();
    }
});
