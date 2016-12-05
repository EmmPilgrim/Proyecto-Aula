var horasTotales, horasExtra, horasNormales, sueldoXH, sueldo;

horasTotales = Number( prompt("Ingresa las horas que trabajaste en la semana: ", "") );

sueldoXH = Number( prompt("Ingresa tu sueldo por hora: " ,"") );

if (horasTotales <= 40){

    sueldo = horasTotales * sueldoXH;

    alert("Tu sueldo es: " + sueldo);

} else if (horasTotales >= 41 && horasTotales <= 46){

    horasExtra = horasTotales - 40;

    horasNormales = horasTotales - horasExtra;

    sueldo = ( (horasExtra * 2) * sueldoXH)  + (horasNormales * sueldoXH);

    alert("Tu sueldo es: " + sueldo);

} else if (horasTotales >=46 && horasTotales <= 50){

    horasExtra = horasTotales - 40;

    horasNormales = horasTotales - horasExtra;

    sueldo = ( (horasExtra * 3) * sueldoXH)  + (horasNormales * sueldoXH);

    alert("Tu sueldo es: " + sueldo);

} else if (horasTotales > 50){

    alert("Disculpa no es posible realizar la operacion, ya que es ilegal trabajar mas de 50 horas.");

}
