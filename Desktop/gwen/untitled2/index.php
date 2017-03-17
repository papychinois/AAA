<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App();
$app->get('/testsalle', function ($request,$reponse,$args) {
    $encoders=array(new Symfony\Component\Serializer\Encoder\JsonEncoder());
    $normalizers=array(new Symfony\Component\Serializer\Normalizer\ObjectNormalizer());
    $serializer=array(new Symfony\Component\Serializer\Serializer($normalizers,$encoders));

    $theSalle[0] = new \classeMetier\salle("SIO","doche");
    $theSalle[1] = new \classeMetier\salle("SIO1","doche");
    $theSalle[2] = new \classeMetier\salle("SIO2","doche");
    $theSalle[3] = new \classeMetier\salle("SIO3","doche");

    $JsonContent=$serializer->serialize($theSalle,'json');
    return $reponse->write($JsonContent);

});
$app->run();

/*$con = mysqli_connect('localhost','root','root','PartiesDB');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Joueurs";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>id</th>
<th>pseudo</th>
<th>estActif</th>
<th>heureCreation</th>
<th>centre</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['pseudo'] . "</td>";
    echo "<td>" . $row['estActif'] . "</td>";
    echo "<td>" . $row['heureCreation'] . "</td>";
    echo "<td>" . $row['centre'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);*/
?>
</body>
</html>
