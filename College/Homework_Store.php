//Conección con html para la creación de la página de tiendas 
<?php
for ($i = 0; $i < 5; $i++) {
  // Abre un div con un id único para cada tienda
  echo '<div id="tabla' . ($i + 2) . '">';  
  
  // Añade espacio en blanco
  echo '<br><br>';  
  
  // Abre una tabla con un id "Tabla"
  echo '<table id="Tabla">'; 
  
  // Abre la sección del encabezado de la tabla
  echo '<thead>';  
  
  // Abre una fila en el encabezado
  echo '<tr>';  
  
  // Crea una celda de encabezado que abarca 7 columnas para el nombre de la tienda
  echo '<th style="text-align: center;" colspan="7"><strong>Tienda ' . ($i + 2) . '</strong></th>';  
  
  // Cierra la fila del encabezado
  echo '</tr>';  
  
  // Abre otra fila en el encabezado
  echo '<tr>';  
  
  // Crea una celda de encabezado para "Producto"
  echo '<th>Producto</th>'; 
  
  // Crea una celda de encabezado para "Precio"
  echo '<th>Precio</th>';
  
  // Cierra la fila del encabezado
  echo '</tr>';  
  
  // Cierra la sección del encabezado
  echo '</thead>';  
  
  // Abre la sección del cuerpo de la tabla
  echo '<tbody>';  
  
  // Cierra la sección del cuerpo de la tabla (aunque está vacía)
  echo '</tbody>';  
  
  // Cierra la tabla
  echo '</table>';  
  
  // Cierra el div
  echo '</div>';  
}
?>
