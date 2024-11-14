console.log("● O número de ligazóns da páxina.");

const count = document.getElementsByTagName("a").length;
const count1 = document.getElementsByTagName("a");
console.log(count);

console.log(" ");

console.log("● A dirección da penúltima ligazón.");

console.log(count1[count1.length - 2].href);

console.log(" ");

console.log("● O número de ligazóns que apuntan a http://proba");

const ligazónsProba = document.querySelectorAll("a[href='http//proba']");

console.log(ligazónsProba.length);

console.log(" ");

console.log(" ● O número de ligazóns do terceiro parágrafo.");

console.log(document.querySelectorAll("p")[2].getElementsByTagName("a").length);

console.log(" ");

console.log(
  "● Modifica o estilo das ligazóns que apuntan a http://proba para que teñan o texto de cor laranxa"
);

console.log(
  Array.from(count)
    .filter((count1) => {
      return /^http:\/\/proba\/$/.test(count.href);
    })
    .forEach((count) => (count.style.color = "orange"))
);
