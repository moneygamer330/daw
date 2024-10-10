num = 2;

function writePowers(num) {
  let powers = [];
  for (let i = 2; i <= 20; i++) {
    console.log(num + " elevado a " + i + " es " + Math.pow(num, i));
  }
}

console.log(writePowers(num));
