<!DOCTYPE html>
<head>
<link rel="stylesheet" href="view/style.css">

<title>IT Jobs</title>

</head>
<body>
    <div class="border">

    <?php
    
    use JobsApp\Firm;
    use JobsApp\Employees;
use JobsApp\Render;

$corporation= new Firm('IT Solution','Tester, Programmers, Managers');
$corporation->addAboutUs('Sveiki mes užsiimame programavimo klaidu taisymu ir štai
musu dabartiniai darbuotojai su profesija');
$jobs0 = new Employees('IT solution', 'Programmer', 'Petras', 'Petraitis', '1458796532', 1547.14);
$jobs1 = new Employees('IT solution', 'Programmer', 'Justas', 'Justaitis', '7816364548', 1547.14);
$jobs2 = new Employees('IT solution', 'Manager', 'Eman', 'Jojo', '7456698140', 2000.89);
$jobs3 = new Employees('IT solution', 'Tester', 'Gvidas', 'Gvidaitis', '7854123697', 1200);
$jobs4 = new Employees('IT solution', 'Vice Manager', 'Kamoto', 'Tajama', '2001326654', 1800.46);

?>

<div class="border">
<section>
<?php

foreach ($corporation->showData() as $corp){
    echo"<div>";
    echo "<h2>$corp</h2>";
    echo"</div>";
}
?>



</section>

<table >
     <tr>
            <th><h3>Imonė</h3></th>
            <th><h3>Profesija</h3></th>
            <th><h3>Vardas</h3></th>
            <th><h3>Pavardė</h3></th>
            <th><h3>Asmens kodas</h3></th>
            <th><h3>Atlygis</h3></th>

        </tr>

<?php
Render::printData($jobs0->showData());
Render::printData($jobs1->showData());
Render::printData($jobs2->showData());
Render::printData($jobs3->showData());
Render::printData($jobs4->showData());

?>
</table>
</div>



</body>
