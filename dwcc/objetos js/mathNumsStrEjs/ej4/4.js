function generarNumeroAleatorio04() {
  return Math.floor(Math.random() * 4);
}

console.log(generarNumeroAleatorio());

function generarNumeroAleatorio13() {
  return Math.floor(Math.random() * 3) + 1;
}

console.log(generarNumeroAleatorio());

let x = 5;
let y = 10;

function numeroAleatorioEntre(x, y) {
  return Math.ceil(Math.random() * (x - y)) + y;
}

console.log(numeroAleatorioEntre(x, y));
