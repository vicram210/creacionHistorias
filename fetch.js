document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que la página se recargue

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let mensaje = document.getElementById("mensaje");

    fetch("register.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ email: email, password: password })
    })
    .then(response => response.json())
    .then(data => {
        mensaje.innerText = data.message;
        mensaje.style.color = data.status === "success" ? "green" : "red";
    })
    .catch(error => console.error("Error:", error));
});
