console.log(
  "1. Imaxinar que a variable elemento fai referencia a un elemento do DOM e text é unha variable con unha cadea de texto que inclúe etiquetas HTML. ¿Cales dos seguintes comandos farán exactamente o mesmo?:"
);

const elemento = document.body;

const text = "<p> Hola mundo! </p>";

console.log("a. elemento.append(document.createTextNode(text));");

console.log(" ");
console.log("b. elemento.innerHTML = text;");

console.log(" ");

console.log("c. elemento.textContent = text;");

console.log(" ");

console.log(
  "2. Dada unha lista <ol> con varios elementos <li>, crea o código necesario para eliminar todos os <li> da lista"
);

const ol = document.querySelector("ol");
const li = ol.querySelectorAll("li");

li.forEach((lis) => {
  console.log(lis.remove());
});

console.log(" ");

console.log(
  "3. Dado o seguinte código, ¿por que segue aparecendo o “Texto” despois de borrar a táboa?"
);

let taboa = document.getElementById("taboa");
taboa.remove();

console.log(
  "Sigue apareciendo texto porque 'Texto' no esta dentro de una etiequta html, por lo que no lo detecta aunque este dentro de <table>"
);

console.log(" ");

console.log(
  "4. Crea un documento HTML que conteña un elemento <ul>. Dende JavaScript crea 4 elementos <li> e engádeos á lista <ul>, de tal forma que sexan visibles no navegador."
);

const ul = document.getElementById("ex4");
const li1 = document.createElement("li");
const li2 = document.createElement("li");
const li3 = document.createElement("li");
const li4 = document.createElement("li");

li1.innerText = "ej4";
li2.innerText = "ej4";
li3.innerText = "ej4";
li4.innerText = "ej4";

ul.append(li1);
ul.append(li2);
ul.append(li3);
ul.append(li4);

console.log(" ");

console.log(
  "5. Escribe o código JavaScript para inserir “<li>2</li><li>3</li>” entre os dous <li> seguintes:"
);

const liEx4_4 = document.getElementById("two");
const liEx4_1 = document.getElementById("one");

const liEx4_2 = document.createElement("li");
liEx4_2.innerText = "2";
liEx4_2.id = "twoo";
const liEx4_3 = document.createElement("li");
liEx4_3.innerText = "3";
liEx4_3.id = "three";

liEx4_4.before(liEx4_3);
liEx4_1.after(liEx4_2);

console.log(" ");

console.log("6. ");

let arbore = {
  Fish: {
    trout: {},
    salmon: {},
  },
  Tree: {
    Huge: {
      sequoia: {},
      oak: {},
    },
    Flowering: {
      "apple tree": {},
      magnolia: {},
    },
  },
};
