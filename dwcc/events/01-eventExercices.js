//TODO Hacer ejercicios eventos
console.log(
  "1. Dado o seguinte código HTML, engade a configuración de estilos CSS para que inicialmente o span estea oculto. Ademais, crea o JavaScript necesario para que ao pulsar a ligazón se faga visible o contido do span e desapareza a ligazón."
);

const ligazon = document.getElementById("ligazon");
const adicionalText = document.getElementById("adicional");

function showText() {
  adicionalText.classList().remove();
  adicionalText.classList().add();
}

ligazon.addEventListener("click", showText);

console.log(" ");

console.log(
  "2. Crea unha páxina web que teña unha caixa de texto, un botón e unha lista. Fai que ao pulsar o botón se engada o texto da caixa de texto como novo elemento da lista. Inicialmente, a páxina debería mostrar algo similar á seguinte imaxe:"
);

function engadirElemento() {
  const textoInput = document.getElementById("texto");
  const lista = document.getElementById("lista");
  const novoTexto = textoInput.value;

  if (novoTexto.trim() !== "") {
    const novoElemento = document.createElement("li");
    novoElemento.textContent = novoTexto;
    lista.appendChild(novoElemento);
    textoInput.value = "";
  } else {
    alert("Por favor, introduce un texto válido.");
  }
}

console.log(" ");

console.log("3.");

console.log(
  "Funcionarian a primeira e a terceira opcion. A segunda non funcionaria debido a que as funcions frecha definense como duas funcions distintas"
);

console.log(" ");

console.log(
  "4. Crea un menú que se abra/colapse ao facer clic sobre el. Inicialmente o menú debe estar colapsado e ao pulsar no texto “Sweeties (click me)!” deben mostrarse as opcións do menú."
);

const span = document.getElementById("click");
const list = document.getElementById("list");

function desplegable() {
  span.addEventListener("click", () => {
    if (list.style.display === "none" || list.style.display === "") {
      list.style.display = "block";
    } else {
      list.style.display = "none";
    }
  });
}
span.addEventListener("click", desplegable);

console.log(" ");

console.log(
  "5. Insire unha imaxe nunha páxina web e engádelle un listener para cada un dos seguintes eventos: click, dblclick, contextmenu, mousedown, mouseup, wheel, mouseover, mouseout, dragstart, drag, dragend. Cada vez que suceda un destes eventos mostra por consola unha mensaxe informando do evento que sucedeu. Proba os diferentes eventos e observa a orde na que suceden."
);

const img = document.getElementById("img");
