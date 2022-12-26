<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<h1>Вработени</h2>
<form action="" method="post">
  <label for="plata">Испечати вработени според избор:</label>
  <select  name="plata" size="3" multiple>
    <option name="minimalna" value="minimalna">Минимална</option>
    <option name="sredna" value="sredna">Средна</option>
    <option  name="visoka" value="visoka">Висока</option>
  </select><br><br>
  <input type="submit" value="Прикажи" name="prikazi">
</form>

<!-- TABELA  1 -->

<?php if(isset($_POST['prikazi'])){
  $selected=$_POST['plata'];
  switch($selected)
  {
    case "minimalna": ?>
 
<table class="table table-bordered table-hover">
    <thead>
    <h2>Студенти на факултет за информатика</h2>
    <tr>
    <th>ID</th>
            <th>Име</th>
            <th>Презиме</th>
            <th>Kод</th>
            <th>Плата</th>
             <th>Телефон</th>
        </tr>
    </thead>
    <tbody>
    
    <?php 
    $connection=mysqli_connect('localhost','root','','vraboteni');
    $query="SELECT * FROM podatoci WHERE plata < 14500";
    $result = mysqli_query($connection,$query);
    
    
    while($row = mysqli_fetch_assoc($result)){


    $id=$row['id'];    
    $ime = $row['ime'];
    $prezime = $row['prezime'];
    $kod = $row['kod'];
    $plata = $row['plata'];
    $telefon = $row['telefon'];
    
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$ime</td>";
    echo "<td>$prezime</td>";
    echo "<td>$kod</td>";
    echo "<td>$plata</td>";
    echo "<td>$telefon</td>";
    echo "</tr>";
    }
    ?>
    
    </tbody>
    </table>
    <?php 
    break;
    case "sredna": ?>
 
<!-- TABELA  2 -->
<table class="table table-bordered table-hover">
    <thead>
        <h2>Студенти на правен факултет</h2>
        <tr>
    <th>ID</th>
            <th>Име</th>
            <th>Презиме</th>
            <th>Kод</th>
            <th>Плата</th>
             <th>Телефон</th>
        </tr>
    </thead>
    <tbody>
    
    <?php 
    $connection=mysqli_connect('localhost','root','','vraboteni');
    $query="SELECT * FROM podatoci WHERE plata>14500 && plata<30000";
    $result = mysqli_query($connection,$query);
    
    
    while($row = mysqli_fetch_assoc($result)){

        $id=$row['id'];    
    $ime = $row['ime'];
    $prezime = $row['prezime'];
    $kod = $row['kod'];
    $plata = $row['plata'];
    $telefon = $row['telefon'];
    
    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$ime</td>";
    echo "<td>$prezime</td>";
    echo "<td>$kod</td>";
    echo "<td>$plata</td>";
    echo "<td>$telefon</td>";
    echo "</tr>";
    }
    ?>
    
    </tbody>
    </table>
<?php break;
 }
}?>


</body>
</html>

<!-- <?php

// $ime=$_POST['ime'];
// $prezime=$_POST['prezime'];
// $indeks=$_POST['indeks'];
// $fakultet=$_POST['fakultet'];
// $nasoka=$_POST['nasoka'];


// $connection=mysqli_connect('localhost','root','','vraboteni');

// $query="INSERT INTO student(ime,prezime,indeks,fakultet,nasoka)";
// $query.="VALUES('$ime','$prezime','$indeks','$fakultet','$nasoka')";

// $added_student=mysqli_query($connection,$query);



?> -->