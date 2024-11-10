console.log(
  " 2. Escribe unha expresión regular para comprobar que cada un dos seguintes elementos aparece nunha cadea."
);

console.log(" ");

console.log("a. car e cat");

const regex = /(?=.*\bcar\b)(?=.*\bcat\b)/;
const cadena = "La caravana es un buen lugar para el gato.";

console.log(regex.test(cadena));


console.log("b. pop e prop");

const regex1 = /(?=.*\bpop\b)(?=.*\bprop\b)/;
const cadena1 = "Aquí se usa pop y también prop.";

console.log(regex1.test(cadena1)); 


console.log("c. ferret, ferry e ferrari");

const regex2 = /(?=.*\bferret\b)(?=.*\bferry\b)(?=.*\bferrari\b)/;
const cadena2 = "Vi un ferrari junto a un ferry y un ferret.";

console.log(regex2.test(cadena2));


console.log("d. Calquera palabra rematada en ious");

const regex3 = /\b\w+ious\b/g;
const cadena3 = "Estas palabras son deliciosas y misteriosas.";

const coincidencias3 = cadena3.match(regex3);
console.log(coincidencias3); 

console.log("e. Un espazo seguido de punto, coma, dous puntos ou punto e coma");

const regex4 = / \.| ,| :| ;/g;
const cadena4 = "Este es un ejemplo , con varios ; signos . de puntuación : en medio.";

const coincidencias4 = cadena4.match(regex4);
console.log(coincidencias4);

console.log("f. Unha palabra con máis de 6 letras");

const regex5 = /\b\w{7,}\b/g;
const cadena5 = "Este es un ejemplo con palabras como maravilloso y extraordinario.";

const coincidencias5 = cadena5.match(regex5);
console.log(coincidencias5); 


console.log("g. Unha palabra sen a letra e (ou E).");

const regex6 = /\b[^eE\s]+\b/g;
const cadena6 = "Esta frase tiene palabras sin la letra e, como gato o sol.";

const coincidencias6 = cadena6.match(regex6);
console.log(coincidencias6); 


console.log(" ");

console.log(
  "3. Unha dirección de rede MAC está composta por 6 grupos de dous números hexadecimais separados por ':'. Por exemplo '01:32:54:67:89:AB' Escribe unha expresión regular que comprobe se unha dirección MAC é correcta"
);

const regex7 = /^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/;
const direccionMAC = "01:32:54:67:89:AB";

console.log(regex7.test(direccionMAC)); 


console.log(" ");

console.log(
  "4. Crea unha función que comprobe se un contrasinal é válido, é dicir, cumpre as seguintes condicións:"
);
console.log(" ");

console.log("a. Mínimo 8 caracteres");

function contrasinalValido(contrasinal) {
  const regex = /^.{8,}$/;
  return regex.test(contrasinal);
}

const contrasinal = "miContrasinal123";
console.log(contrasinalValido(contrasinal)); 

console.log("b. Sen espazos en branco");

function esContrasinalSenEspacios(contrasinal) {
  const regex = /^(?!.*\s).+$/; // No permite espacios en blanco
  return regex.test(contrasinal);
}

console.log(" c. Que teña, polo menos, 3 das seguintes tipos de caracteres:");
console.log("i. maiúsculas");
console.log("ii. minúscula");
console.log("iii. números");
console.log("iv. caracteres especiais: ¡!$?%&#@/()=¿?*[];,:._<>+-");

function esContrasinalConDiversosTipos(contrasinal) {
    let tieneMayuscula = /[A-Z]/.test(contrasinal); // Verifica si tiene al menos una mayúscula
    let tieneMinuscula = /[a-z]/.test(contrasinal); // Verifica si tiene al menos una minúscula
    let tieneNumero = /\d/.test(contrasinal); // Verifica si tiene al menos un número
    let tieneEspecial = /[¡!$?%&#@/()=¿?*[\];,:._<>+-]/.test(contrasinal); // Verifica si tiene al menos un carácter especial

    // Suma las condiciones que son verdaderas y si tiene al menos 3 tipos de caracteres, devuelve true
    let tiposDeCaracteres = [tieneMayuscula, tieneMinuscula, tieneNumero, tieneEspecial].filter(Boolean).length;
    return tiposDeCaracteres >= 3;
}

// Ejemplo de uso:
const contrasinal1 = "MiContrasinal123!"; // Ejemplo válido
console.log(esContrasinalSenEspacios(contrasinal1)); // Devuelve true, no tiene espacios
console.log(esContrasinalConDiversosTipos(contrasinal1)); // Devuelve true, tiene mayúsculas, números y caracteres especiales

const contrasinal2 = "contrasinal"; // Ejemplo con solo minúsculas
console.log(esContrasinalSenEspacios(contrasinal2)); // Devuelve true, no tiene espacios
console.log(esContrasinalConDiversosTipos(contrasinal2)); // Devuelve false, solo tiene minúsculas

console.log(" ");
console.log(
  "5. Ás veces é útil eliminar as etiquetas HTML dun texto para evitar que se inclúa código mal intencionado nunha páxina web. /n Crea unha función á que se lle pase un texto e devolva o mesmo texto coas etiquetas HTML eliminadas."
);

// Función que elimina las etiquetas HTML de un texto
function eliminarEtiquetasHTML(texto) {
  const regex = /<[^>]*>/g; // Coincide con cualquier etiqueta HTML
  return texto.replace(regex, ''); // Reemplaza las etiquetas HTML con una cadena vacía
}

// Ejemplo de uso:
const textoConHTML = "<p>Este é un <b>exemplo</b> de <a href='#'>texto</a> con <i>etiquetas</i> HTML.</p>";
const textoSinHTML = eliminarEtiquetasHTML(textoConHTML);

console.log(textoSinHTML); // Devuelve "Este é un exemplo de texto con etiquetas HTML."

console.log(" ");

console.log(
  "6. Dado o seguinte array de insultos, fai un script tal que cada vez que apareza un deles nun texto o substitúa pola primeira letra do insulto e un número de asteriscos igual á lonxitude do insulto - 1"
);

let insultos = [
  "testán",
  "langrán",
  "fervellasverzas",
  "baldreo",
  "lacazán",
  "pillabán",
];


// Función para reemplazar insultos por la primera letra seguida de asteriscos
function sustituirInsultos(texto, insultos) {
  insultos.forEach(insulto => {
    const regex = new RegExp(`\\b${insulto}\\b`, 'gi'); // Regex para coincidir el insulto completo (en minúsculas o mayúsculas)
    const reemplazo = `${insulto[0]}${'*'.repeat(insulto.length - 1)}`; // Primer letra + asteriscos
    texto = texto.replace(regex, reemplazo); // Reemplaza el insulto
  });
  return texto;
}

// Ejemplo de uso:
let texto = "O testán non pode ser tan langrán e fervellasverzas. A pillabán tamén é un lacazán.";
let textoFiltrado = sustituirInsultos(texto, insultos);

console.log(textoFiltrado); 
// Devuelve "O t***** non pode ser tan l***** e f**************. A p****** tamén 