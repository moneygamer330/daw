//TODO continuear ejs js.

console.log(
  "Ejercicio 1: Crea unha función frecha que devolva o cubo dun número pasado como parámetro."
);

const cubo = (num) => num ** 3;

console.log(cubo(3));

console.log(" ");

console.log(
  "Ejercicio 2: Crea unha función frecha á que se lle pase un array e devolva como resultado un array cos elementos impares do array de entrada"
);

const arrayEntrada = [10, 2, 3, 5, 7, 8, 23, 50];

const impares = (arrayEntrada) => {};

console.log(impares(arrayEntrada));

console.log(" ");

console.log(
  "Ejercicio 3: Crea unha función frecha que sume todos os valores pasados como parámetros, sendo estes un número indeterminado."
);

const suma = (numeros) => {};

console.log(" ");

console.log(
  "Ejercicio 4: Crea unha función á que se lle pasen varios números como parámetros (un número indeterminado de parámetros) e que devolva a media deses números."
);

const media = (num) => {
  num + num.lenght / num;
};

console.log(media(1, 2, 3, 4, 5));

console.log(" ");

console.log(
  "Ejercicio 5: Crea unha función frecha chamada minMax() que reciba como parámetro un array de números e devolva un obxecto co valor mínimo e máximo do array de entrada:"
);

const minMax = (array) => {
  return { min: Math.min(...array), max: Math.max(...array) };
};

console.log(minMax([1, 0, 3, 7, 5]));

console.log(" ");

console.log(
  "Ejercicio 6: Crea unha función autoinvocada á que se lle pase a lonxitude e ancho dun rectángulo. A función debe mostrar por consola unha mensaxe indicando o valor da área do rectángulo."
);

const area = (function (lonxitude = 3, ancho = 4) {
  const area1 = lonxitude * ancho;
  return area1;
})();

console.log(`A area do rectangulo e: ${area}`);

console.log(" ");

console.log(
  "Exercicio 7: Crea unha función á que se lle pase un DNI (ex: 12345678w ou 87654321T) e devolva se é correcto ou non."
);

const validarDni = function (dni) {
  Dni = dni.toString().toUppercase();
};
