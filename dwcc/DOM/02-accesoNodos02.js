console.log("2. O elemento con id “input2”.");

console.log(document.getElementById("input2"));

console.log(" ");

console.log("A colección de parágrafos");

console.log(document.querySelectorAll("p"));

console.log(" ");

console.log("Todos os parágrafos dentro do div con id “lipsum”.");

console.log(document.querySelector("div#lipsum"));

console.log(" ");

console.log("O formulario");

console.log(document.getElementsByTagName("form"));

console.log(" ");

console.log("Todos os inputs");

console.log(document.querySelectorAll("input"));

console.log(" ");

console.log("Só os inputs con nome “sexo”.");

console.log(document.getElementsByName("sexo"));

console.log(" ");

console.log("Os items da lista con clase “important”.");

console.log(document.querySelectorAll("li.important"));
