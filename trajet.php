<?php
#Chargment de l'autoload
require_once './vendor/autoload.php';
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\RetryableHttpClient;
#Récupération du client http Symfony
$client = new RetryableHttpClient(HttpClient::create(["verify_peer"=>false,"verify_host"=>false]));
#Requete à notre API pour récupérer les articless
$response = $client->request('GET', 'http://localhost:8000/api/trajets');
#Debbugage de la requete du navigateur
#dump($response->getContent());
#Récupeartion des articles
$trajets = $response->toArray();
require_once 'header.php';
?><div class="container" style="padding-top: 90px">
    <div class="row">
        <div class="col-8 mx-auto">
            <h3>Les tarifs</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Temps (Min)</th>
                    <th scope="col">Cout (€)</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($trajets['hydra:member'] as $trajet) {?>
                    <tr>
                        <td><?php
                            $to_time = strtotime($trajet['finish']);
                            $from_time = strtotime($trajet['start']);
                            $minutes = round(abs($to_time - $from_time) / 60,2);
                            echo $minutes;?></td>
                        <td><?= $cout = 1 + ($minutes) * 0.15;
                            echo substr($cout, strlen($cout), 3);?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>

