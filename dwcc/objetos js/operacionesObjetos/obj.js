console.log("Ejercicio 1 operaciones con objetos");

const television = {
  marca: "LG",
  categoria: "televisores",
  unidades: 4,
  precio: 354.99,
  importe() {
    return this.unidades * this.precio;
  },
};

console.log(television.importe());

console.log(" ");
console.log("Ejercicio 2 operaciones con objetos");

const gamee = {
  odds: {
    team1: 1.33,
    x: 3.25,
    team2: 6.5,
  },
};

// const [team1, draw, team2] = Object.values(gamee.odds);

const { team1, x: draw, team2 } = gamee.odds;

console.log(team1, draw, team2);

console.log(" ");

console.log("Ejercicio 3 operaciones con objetos");

const game = {
  scored: ["Lewandowski", "Gnarby", "Lewandowski", "Hummels"],
};

for (const [key, value] of game.scored.entries()) {
  console.log(`Goal ${key + 1}: ${value}`);
}

console.log(" ");

const scorers = {
  Lewandowski: 2,
  Gnarby: 1,
  Hummels: 1,
};

console.log(" ");

console.log("Ejercicio 1 mapa de objetos");

const gameEvents = new Map([
  [17, "GOAL"],
  [36, "Substitution"],
  [47, "GOAL"],
  [61, "Substitution"],
  [64, "Yellow card"],
  [69, "Red card"],
  [70, "Substitution"],
  [72, "Substitution"],
  [76, "GOAL"],
  [80, "GOAL"],
  [92, "Yellow card"],
]);

const eventos = new Set(gameEvents.values());
console.log(eventos);

for (const [key, value] of gameEvents) {
  if (key < 45) {
    console.log(`[PRIMEIRA PARTE] ${key}: ${value}`);
  }
}
