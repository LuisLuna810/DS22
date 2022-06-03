<h1># DS2022 TP1</h1>
<h3>Alumno: Luis Agustin Luna</h3>
<h4>Catedra: Diseño  de sistemas 2022</h4>
<hr>
<h1>Enunciado</h1>
Se tiene un circulo de sangre RH Negativo donde se busca generar la autoprotección de los asociados,  Existen dos categorías de socios, activos y pasivos, los activos son quienes están en condiciones de donar sangre y se determina por la edad, mayores de 18 hasta 56 años inclusive; los pasivos son los menores de 18 años y mayores a 56 años. Además de la edad, se considera como pasivos a quienes con la edad de una persona activa tenga enfermedad crónica y deba tomar determinados medicamentos de forma permanente. Para poder pertenecer al círculo, las personas se deben asociar y pagar una cuota de manera mensual. Para registrarse, se  deberá presentar la siguiente información: DNI, nombre apellido, fecha de nacimiento, domicilio, localidad, teléfono, email, grupo sanguíneo y factor; además deberá informar si tiene alguna enfermedad crónica y si toma medicación de forma permanente, indicar que medicación.
El banco de Sangre (es una institución que genera pedidos de donación para cubrir a algún socio del circulo) pide esporadicamente donaciones, cuando estos pedidos llegan se busca a los donantes activos que menos donaron, una persona queda excluida sí donó más de 2 veces en el año. Además el banco de sangre avisa semanalmente los asociados que donaron.
Mensualmente se hace un listado de los asociados con cuotas no pagas, además gerencia cada cierto tiempo pide un listado de cuotas pagas mostrado porcentualmente y divido por categorias de asociados.
<hr>
<h1>Diagrama de entidades</h1>
<p>El siguiente diagrama se confecciono para poder crear la base de datos y su relaciones</p>

[![diagrama.jpg](https://i.postimg.cc/7bv2HXVp/diagrama.jpg)](https://postimg.cc/wRVvFXnV)

<hr>
<h1>Prototipo</h1>
<p>Este prototipo se creo para tener una idea de como quedaria la interfaz de usuario y los datos que se ingresaran/mostraran en la misma</p>
<p>1- Home <br>En esta pagina se mostraran aquellos asociados que hayan realizado donaciones en la semana, ademas tambien habra un listado del porcentaje de aquellos asociados que tengan cuotas impagas y estaran divididos segun su tipo (activo / pasivo)  </p>
<<<<<<< Updated upstream

[![1-Home.png](https://i.postimg.cc/tJdX65y0/1-Home.png)](https://postimg.cc/0KQRR7bZ)

<p>2- Registrar/Ingresar <br>En esta pagina se podran registrar aquel usuario que quiera pertenecer al circulo de sangre, ademas con el cuil del mismo se podra ingresar para gestionarlo</p>

[![2-Registrar-Ingresar.png](https://i.postimg.cc/Pf1f0tD6/2-Registrar-Ingresar.png)](https://postimg.cc/238fZN2v)

=======
[![1-Home.png](https://i.postimg.cc/tJdX65y0/1-Home.png)](https://postimg.cc/0KQRR7bZ)
<p>2- Registrar/Ingresar <br>En esta pagina se podran registrar aquel usuario que quiera pertenecer al circulo de sangre, ademas con el cuil del mismo se podra ingresar para gestionarlo</p>
[![2-Registrar-Ingresar.png](https://i.postimg.cc/Pf1f0tD6/2-Registrar-Ingresar.png)](https://postimg.cc/238fZN2v)
>>>>>>> Stashed changes
<p>3- Gestion-Usuario <br>Una vez ingresado el cuil del asociado ya registrado, se lo enviara a esta pagina donde se mostraran todos su datos personales y ademas podra editarlos</p>

[![3-Gestion-Usuario.png](https://i.postimg.cc/cLLsKwbj/3-Gestion-Usuario.png)](https://postimg.cc/7fjvdGDM)

<p>4- Cuotas <br>En esta pagina el asociado podra verificar las cuotas que tiene impagas ademas tambien podra ponerse al dia con la opcion de pagar las mismas</p>

[![4-Cuotas.png](https://i.postimg.cc/650W5YYn/4-Cuotas.png)](https://postimg.cc/N5Kqd7hj)

<p>5- siDonar <br>En esta pagina el asociado podra solicitar la fecha en la que realizara la donacion, solo podra acceder a este apartado aquel asociado que sea de tipo ACTIVO</p>

[![5-si-Donar.png](https://i.postimg.cc/3xf32WMw/5-si-Donar.png)](https://postimg.cc/zyWmrzGm)

<p>5.1- NODonar <br>Esta seccion aparecera para aquel asociado que sea de tipo PASIVO y no este autorizado a realizar donaciones</p>

[![5-1-no-Donar.png](https://i.postimg.cc/X73NbTcn/5-1-no-Donar.png)](https://postimg.cc/vDqw72NK)

<p>6- Solicitar <br>Esta seccion le permitira al asociado realizar una solicitud de donacion y elegir la fecha en la que se llevara a cabo la misma</p>

[![6-Solicitar.png](https://i.postimg.cc/N0yBDYYk/6-Solicitar.png)](https://postimg.cc/KKy6c611)
