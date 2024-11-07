console.log("1. A táboa con id='age-table' ");

console.log(document.getElementById("age-table"));

console.log(" ");

console.log("Todos os elementos label dentro da táboa (debería haber 3).");

console.log(document.getElementById("age-table").getElementsByTagName("label"));

console.log(" ");

console.log("O primeiro td da táboa.");

console.log(document.getElementById("age-table").querySelector("td"));

console.log(" ");

console.log("O formulario con name='search'.");

console.log(document.forms.search);

console.log(" ");

console.log("O primeiro input do formulario anterior.");

console.log(document.forms.search.querySelector("input"));

console.log(" ");

console.log("O último input do formulario do apartado anterior.");

console.log(document.forms.search.querySelectorAll("input")[1]);
