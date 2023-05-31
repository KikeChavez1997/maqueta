// Obtiene la fecha de término (30 de agosto a las 00:00 horas)
const fechaTermino = new Date('2023-08-30T00:00:00');

// Función para actualizar el contador cada segundo
function actualizarContador() {
  const ahora = new Date();
  const diferencia = fechaTermino - ahora;

  const segundos = Math.floor(diferencia / 1000) % 60;
  const minutos = Math.floor(diferencia / 1000 / 60) % 60;
  const horas = Math.floor(diferencia / 1000 / 60 / 60) % 24;
  const dias = Math.floor(diferencia / 1000 / 60 / 60 / 24);

  document.getElementById('dias').textContent = dias < 10 ? '0' + dias : dias;
  document.getElementById('horas').textContent = horas < 10 ? '0' + horas : horas;
  document.getElementById('minutos').textContent = minutos < 10 ? '0' + minutos : minutos;
  document.getElementById('segundos').textContent = segundos < 10 ? '0' + segundos : segundos;
}

// Inicia el contador
actualizarContador();
//Actualiza el contador cada segundo
setInterval(actualizarContador, 1000);