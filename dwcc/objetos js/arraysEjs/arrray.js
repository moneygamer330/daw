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
console.log(froitas.join(" , "));

froitas.splice(3, 1, "laranxas", "sandías");
console.log(froitas);

function mayus(frase) {
  let salida = [];

  for (const element of array) {
    salida.push(
      element.chatAt(0).toUpperCase() + element.slice(1).tolowerCase()
    );
  }
}

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

const [gk, ...fieldPlayers] = players1;

console.log(gk);
console.log(fieldPlayers);

const allPlayers = [...players1, ...players2];
console.log(allPlayers);

const players1Final = [...players1, "Thiago", "Coutinho", "Perisic"];

console.log(players1Final);

console.log(" ");

console.log("Ejercicio 2 desestructuracion de arrays");

function camelCase(str) {
  for (const element of str) {
    let [first, ...rest] = element.toLowerCase().split("_");
    console.log(first + rest.join("").toLowercase());
  }
}

console.log(" ");

console.log("Ejercicio 3 desestructuracion de arrays");

const flightsInfo =
  "_Delayed_Departure;scq93766109;bio2133758440;11:25+_Arrival;bio0943384722;scq93766109;11:45+_Delayed_Arrival;svq7439299980;scq93766109;12:05+_Departure;scq93766109;svq2323639855;12:30";

function getCode(str) {
  return str.slice(0, 3).toUpperCase;
}

for (const flight of flightsInfo.split("+")) {
  const [type, form, to, time] = flight.split(";");

  const output = `${type.replaceAll("_", " ")} ${getCode(from)} ${getCode(
    to
  )};`;
}
