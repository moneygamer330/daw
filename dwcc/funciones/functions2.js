//TODO acabar ejs

// console.log(".reduce()");

// console.log(" ");

// console.log(
//   "Suma os valores da propiedade price do seguinte array de obxectos:"
// );
// const objects = [{ price: 1 }, { price: 2 }, { price: 3 }];

// function reducer(accumulator, index) {
//   const returns = accumulator + { price };
//   console.log(
//     `accumulator: ${accumulator}, currentValue: ${currentValue}, index: ${index},
//     returns: ${returns}`
//   );
//   return returns;
// }

// const suma = objects.reduce(reducer);

// console.log(suma);

// console.log(" ");

// console.log(
//   "Utilizando a función reduce, obtén o valor mínimo dun array de números."
// );

console.log(" ");
console.log(" ");

const persoas = [
  { nome: "aaron", idade: 65, id: 1 },
  { nome: "beth", idade: 2, id: 2 },
  { nome: "ánxeles", idade: 13, id: 3 },
  { nome: "daniel", idade: 3, id: 4 },
  { nome: "ada", idade: 25, id: 5 },
  { nome: "erea", idade: 1, id: 6 },
  { nome: "navia", idade: 43, id: 7 },
];

console.log(
  "a. Crea un novo array que conteña só as persoas maiores de idade."
);

const maiorIdade = persoas.filter((elemento) => elemento.idade >= 18);

console.log(maiorIdade);

console.log(" ");

console.log(
  "b. Crea un novo array que conteña os nomes (só os nomes) de todas as persoas"
);

const nomePersoas = persoas.map((persoa) => persoas.nome);

console.log(" ");

console.log(
  "c. Crea un novo array que conteña, en maiúsculas, os nomes das persoas maioresº de idade."
);

const nomesMaius = persoas
  .filter((elemento) => elemento.idade <= 18)
  .map((person) => nome.toUpperCase);

console.log(" ");

console.log(
  "d. Crea un novo array que conteña obxectos só co id e o nome das persoas."
);

console.log(" ");

console.log("2.a ");

const diasemanaM = diasemana.filter((dia) => dia.substirng(0, 1) === "m");
console.log(diasemanaM);

console.log(" ");

console.log("2.b ");

const comezaS = diasemana.some(dia);

//TODO REPASAR TODO JS,
//TODO IMPORTANTE, IMPORTANTE, IMPORTANTE, hacer apuntes a mano, etc
