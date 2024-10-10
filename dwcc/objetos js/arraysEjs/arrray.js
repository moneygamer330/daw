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
