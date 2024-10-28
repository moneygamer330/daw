//TODO repasar sintaxis js functions, acabar ejs

console.log(
  "Suma os valores da propiedade price do seguinte array de obxectos:"
);

const objects = [{ price: 1 }, { price: 2 }, { price: 3 }];

function reducer(accumulator, currentValue, index) {
  const returns = accumulator + currentValue;
  console.log(
    `accumulator: ${accumulator}, currentValue: ${currentValue}, index: ${index},
    returns: ${returns}`
  );
  return returns;
}

const suma = objects.reduce(reducer);

console.log(suma);
