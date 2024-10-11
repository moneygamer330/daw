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

console.log("Ejercicio 3 arrays");

console.log(" ");

console.log("Ejercicio 1 desectructuracion de arrays");

const gk = players[0][0];
const fieldPlayers = [...players[1]];
const allPlayers = [...players[0], ...players[1]];
const players1 = [...players[0], "Thiago", "Coutinho", "Perisic"];

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
