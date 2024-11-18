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

console.log(
  "6. Crea unha función createTree(data) que devolva unha lista ul/li coma a da imaxe da dereita, para os datos proporcionados."
);

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

function createTree(data) {
  const ulex6 = document.createElement("ul");

  for (const [key, value] of Object.entries(arbore)) {
    const liex6 = document.createElement("li");

    liex6.innerText = key;

    if (Object.keys(value) > 0) {
      const child = createTree(value);
      liex6.append(child);
    }
    ulex6.append(liex6);
  }
  return ulex6;
}

console.log(createTree(arbore));

console.log(" ");

console.log(
  "7. Escribe unha función crearCalendario(elemento, ano, mes) que engada ao elemento pasado como parámetro un calendario do ano e mes indicados. O calendario debe ser unha táboa, onde cada semana é un <tr> e cada día un <td>. A cabeceira da táboa está creada con <th>. Por exemplo, o calendario resultado de chamar á función cos seguintes parámetros vese na imaxe seguinte. Observar que se aplicaron estilos CSS para mellorar o aspecto. crearCalendario(calendario, 2022, 11); "
);


console.log(" ");

console.log(
  "8. Ordena a seguinte táboa pola columna “Nome”. Escribe un código que funcione independentemente do número de filas da táboa."
);

const orderByName = function (name) {
  const tableEx8 = document.getElementById("taboaOrdenar");
  const tbody = tableEx8.querySelector("tbody");
  const rows = Array.from(tbody.rows);

  return rows.sort( 
    (a, b) => a.cells[0].innerText.localeCompare(b.cells[0])
  ).forEach((row) => tbody.append(row)  
  );
};

orderByName("Nome");


console.log("9. Dada unha lista como a seguinte, escribe o código que engada o número de descendentes.");

const ulEx9 = document.getElementById("ex9");
const liEx9 = ulEx9.querySelectorAll("li");

liEx9.forEach((li) => {
  const ul = li.querySelector("ul"); 
  const children = ul ? ul.children.length : 0; 

  li.append(` [${children}]`); 
});
