var verificar = document.querySelector(".olvidar-contraseña");

verificar.addEventListener("click", () =>{
    document.getElementById("verificar").style.display = "block";
})

var enviar = document.querySelector(".btn-verificar");

enviar.addEventListener("click", () =>{
    document.getElementById("verificar").style.display = "none";
    document.getElementById("pedidos").style.display = "block";
})