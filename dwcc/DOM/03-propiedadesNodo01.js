//TODO TERMINAR EJERCICIOS DOM, REPASO

console.log(
  "Indica, polo menos, unha forma de acceder ao seguinte contido e mostralo por consola:"
);

console.log("O innerHTML, innerText e textContent da etiqueta “Escolle sexo”");

const sexo = document.getElementsByTagName("label")[3];

console.log(sexo.innerHTML);
console.log(sexo.innerText);
console.log(sexo.textContent);

console.log(" ");

console.log("O valor do primeiro input de sexo");

console.log(document.getElementsByName("sexo")[0].value);

console.log(" ");

console.log("O valor do sexo que estea seleccionado.");

const selected = document.querySelector("input[checked]");

console.log(selected.value);

console.log(" ");

console.log("O texto de cada un dos elementos <li>");

const ul = document.querySelector("ul");
const lis = ul.querySelectorAll("li");

lis.forEach((li) => {
  console.log(li.textContent);
});

console.log("Indica cantos elementos <li> hai.");

const li = document.querySelectorAll("ul li");
const countLis = li.length;
console.log(`Número de <li>: ${countLis}`);

console.log(" ");

console.log("Indica o valor do atributo data-widget-name");

const value = document.getAttribute("data-widget-name");

console.log();

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");

console.log(" ");
