<?php
require_once 'header.php';
?>
<!doctype html>
<html lang="en">
<body>
<form action="action_page.php" method="post" style="padding-top:90px;">
    <div style="text-align: center;" class="container">

        <h3 style="color:#E684C3; text-align: center; width: 100%;">Paiement</h3><br>

        <input style="width: 50%;" type="text" placeholder="Titulaire de la carte" name="titulaire" required>

        <input style="width: 50%;" type="text" placeholder="Numéro de carte" name="numero" required>

        <input style="width: 50%;" type="text" placeholder="Date d'expiration" name="date" required>

        <input style="width: 50%;" type="text" placeholder="CVV" name="cvv" required>

        <button style="width: 50%; background-color:#F7DC69!important;" type="submit">Valider</button>

</form>
</body>

</html>
<?php
require_once 'footer.php';
?>


