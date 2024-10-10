console.log("EJERCICIO 1 DATE");

const date = new Date("2024-07-25");
const daysOfWeek = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
console.log(`Today is ${daysOfWeek[date.getDay()]}`);

console.log(" ");

console.log("EJERCICIO 2 DATE");

function getDaysInMonth(month, year) {
  return new Date(year, month, 0).getDate();
}

console.log(
  `O mes ${(month = 2)} do ano ${(year = 2023)} ten ${getDaysInMonth(
    month,
    year
  )} días.`
);

console.log(" ");

console.log("EJERCICIO 3 DATE");
function isWeekend(date) {
  const day = date.getDay();
  return day === 0 || day === 6;
}

const testDate = new Date("2023-10-14");
console.log(`The ${testDate.toDateString()} is ${isWeekend(testDate)}`);

console.log(" ");

console.log("EJERCICIO 4 DATE");

function pastDays(date) {
  const today = new Date();
  date = new Date("2024-01-01");
  return Math.floor((today - date) / 86400000);
}
console.log(`Days past in 2024 until today: ${pastDays()}`);
