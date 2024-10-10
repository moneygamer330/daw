function equivalence(minutos) {
  let totalMinutos = minutos / 60;
  let horas = Math.floor(totalMinutos);
  let minutosRestantes = Math.floor((totalMinutos - horas) * 60);
  return `${horas} horas y ${minutosRestantes} minutos`;
}

console.log(equivalence(1409));
