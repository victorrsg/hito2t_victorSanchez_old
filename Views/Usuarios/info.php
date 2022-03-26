<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Email</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Estado</th>
    </tr>
    </thead>
    <tbody>
    <?php
        foreach ($resultado as $alumno){
        echo "<tr><td>";
        echo $alumno[0];
        echo "</td><td>";
        echo $alumno[1];
        echo "</td><td>";
        echo $alumno[2];
        echo "</td><td>";
        echo $alumno[3];
        echo "</td></tr>";
        }
    ?>
    </tbody>
</table>

