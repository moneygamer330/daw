console.log(
  "1. Dado o seguinte código HTML, engade a configuración de estilos CSS para que inicialmente o span estea oculto. Ademais, crea o JavaScript necesario para que ao pulsar a ligazón se faga visible o contido do span e desapareza a ligazón."
);

const ligazon = document.getElementById("ligazon");
const adicionalText = document.getElementById("adicional");

function showText() {
  adicionalText.hidden = false;
  ligazon.style.display = "none";
}

ligazon.addEventListener("click", showText);

console.log(" ");

console.log(
  "2. Crea unha páxina web que teña unha caixa de texto, un botón e unha lista. Fai que ao pulsar o botón se engada o texto da caixa de texto como novo elemento da lista. Inicialmente, a páxina debería mostrar algo similar á seguinte imaxe:"
);
