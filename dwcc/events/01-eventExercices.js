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

img.addEventListener("click", () => {
  console.log("Event: click");
});

img.addEventListener("dbclick", () => {
  console.log("Event: dbclick");
});

img.addEventListener("contextmenu", () => {
  console.log("Event: contextmenu");
});

img.addEventListener("mousedown", () => {
  console.log("Event: mousedown");
});

img.addEventListener("mouseup", () => {
  console.log("Event: mouseup");
});

img.addEventListener("wheel", () => {
  console.log("Event: wheel");
});

img.addEventListener("mouseover", () => {
  console.log("Event: mouseover");
});

img.addEventListener("mouseout", () => {
  console.log("Event: mouseout");
});

img.addEventListener("dragstart", () => {
  console.log("Event: dragstart");
});

img.addEventListener("drag", () => {
  console.log("Event: drag");
});

img.addEventListener("dragend", () => {
  console.log("Event: dragend");
});

console.log(" ");

console.log("Pag 10 ej 1:");

console.log(
  "1a. Cando o cursor do rato entre e saia do botón, mostra unha mensaxe por consola indicándoo"
);
const button = document.getElementById("ocultar");

button.addEventListener("mouseover", () => {
  console.log("Rato dentro");
});

button.addEventListener("mouseout", () => {
  console.log("Raton fora");
});

console.log(" ");

console.log("1b. Ao pulsar o botón debe desaparecer o div con id=texto.");

const div = document.getElementById("texto");

button.addEventListener("click", () => {
  div.classList.add(" ");
});

console.log(" ");

console.log(
  "1c. Cando se escriba algo na caixa de texto, debe mostrarse información da tecla pulsada no div e tamén o código da tecla pulsada. Ademais, se o div estaba oculto, debe mostrarse."
);
