// Variables
const formulario = document.querySelector("#formulario");

formulario.addEventListener("submit", validarUsuarios);

function validarUsuarios(e) {
  e.preventDefault();
  const nombreInput = document.querySelector("#nombres").value;
  const emailInput = document.querySelector("#email").value;
  const usuarioInput = document.querySelector("#usuario").value;
  const passwordInput = document.querySelector("#password").value;

  if (
    nombreInput === "" ||
    emailInput === "" ||
    usuarioInput === "" ||
    passwordInput === ""
  ) {
    Swal.fire({
    	icon : 'error',
    	title : 'Campos Vacios',
    	text : 'Debes rellenar todos los campos'
    });
    return;
  }
  guardarUsuarios();
}

async function guardarUsuarios() {
  try {
    const url = "../php/insertar_usuarios.php";
    const datos = new FormData(formulario);
    const resultado = await fetch(url, {
      method: "POST",
      body: datos,
    });

    const respuesta = await resultado.json();
    const { exito, error } = respuesta;
    if (exito) {
      Swal.fire({
        icon: "success",
        title: "Correcto",
        text: `${exito}`,
      });
    } else {
      Swal.fire({
        icon: "error",
        title: "Incorrecto",
        text: `${error}`,
      });
    }
  

    formulario.reset();
  } catch (e) {
    console.log(e);
  }
}
