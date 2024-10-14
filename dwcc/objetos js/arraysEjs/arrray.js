console.log("Ejercicio 1 arrays");
let arr = [1, 2, 3, 4, 5, 1];

function indexArray(arr, index) {
  for (let i = 0; i < arr.length; i++) {
    if (i === index) {
      return arr[i];
    }
  }
}
console.log(indexArray(arr, 1));

console.log(" ");

console.log("Ejercicio 2 arrays");
const froitas = ["peras", "mazás", "kiwis", "plátanos", "mandarinas"];

froitas.splice("mazás", 1);
console.log(froitas);

froitas.splice(3, 1, "laranxas", "sandías");
console.log(froitas);

froitas.splice;

console.log(" ");

console.log("Ejercicio 1 desectructuracion de arrays");

const players = [
  [
    "Neuer",
    "Pavard",
    "Martinez",
    "Alaba",
    "Davies",
    "Kimmich",
    "Goretzka",
    "Coman",
    "Muller",
    "Gnarby",
    "Lewandowski",
  ],
  [
    "Burki",
    "Schulz",
    "Hummels",
    "Akanji",
    "Hakimi",
    "Weigl",
    "Witsel",
    "Hazard",
    "Brandt",
    "Sancho",
    "Gotze",
  ],
];

const [players1, players2] = players;

const [portero, ...fieldPlayers] = players1;

console.log(portero);
console.log(fieldPlayers);

const allPlayers = [...players1, ...players2];
console.log(allPlayers);

const players1Final = [...players1, "Thiago", "Coutinho", "Perisic"];

console.log(players1Final);

console.log(" ");

console.log("Ejercicio 2 desestructuracion de arrays");

const [firstName, lastName] = str;
