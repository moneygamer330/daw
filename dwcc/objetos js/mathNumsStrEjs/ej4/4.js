function generarNumeroAleatorio() {
  return Math.floor(Math.random() * 4);
}

console.log(generarNumeroAleatorio());

function generarNumeroAleatorio() {
  return Math.floor(Math.random() * 3) + 1;
}

console.log(generarNumeroAleatorio());

let x = 5;
let y = 10;

function numeroAleatorioEntre(x, y) {
  return Math.floor(Math.random() * (x - y + 1)) + y;
}

console.log(numeroAleatorioEntre(x, y));
