console.log(
  "1. Crea unha páxina que teña un formulario con unha caixa de texto. Utilizando JavaScript, fai que cando a caixa de texto teña o foco, o borde da mesma sexa verde e cando perda o foco volva ao estilo por defecto. NOTA: non usar CSS border."
);

const text = document.getElementById("texto");

text.addEventListener("focus", () => {
  text.classList.add("foco");
});

text.addEventListener("blur", () => {
  text.classList.remove("foco");
  console.log("Foco perdido");
});

console.log(" ");

console.log(
  "2. Crea unha páxina web que conteña un formulario con varios campos: input, select, radiobutton, checkbox, área de texto. Escribe o código JavaScript necesario para mostrar por consola todos os valores dos campos do formulario cando este se envíe."
);

//TODO finish exercicies

const form2 = document.getElementById("form2");

form2.addEventListener("submit", (event) => {
  event.preventDefault();

  const text1 = document.getElementById("text").value;
  const select = document.getElementById("select").value;
  const checkbox = document.getElementById("checkbox").checked;
  const textarea = document.getElementById("textarea").value;
  const radio = document.querySelector('input[name="radio"]:checked').value;

  console.log("Texto:", text1);
  console.log("Select:", select);
  console.log("Checkbox:", checkbox);
  console.log("Textarea:", textarea);
  console.log("Radio:", radio);
});
