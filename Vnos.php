<?php
include './head.php';

if(isset($_POST['poslji'])){
    if(isset($_POST['ime']) && $_POST['priimek']) && $_POST['username']) && $_POST['geslo'])) {
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$username = $_POST['username'];
$geslo = $_POST['geslo'];

$sql = "INSERT INTO uporabniki(ime, priimek, username, password) VALUES ('$ime', '$priimek', '$username', '$geslo');";
        
        $result = pg_query($dbconn3, $sql);
        
        if (!$result) {
            echo "Napaka  pri vnosu v uporabniki.\n";
            exit;
        }
        
        echo "Vnos je uspel";
    }
}
?>

<div id="fr">
<form action="Vnos.php" method="post">
    
    <div class="mb-3">
    <label for="ime" class="form-label">Ime</label>
    <input type="text" class="form-control" name="ime">
    
    <div class="mb-3">
    <label for="priimek" class="form-label">Priimek</label>
    <input type="text" class="form-control" name="priimek">
           
    <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
    
  <div class="mb-3">
    <label for="geslo" class="form-label">Geslo</label>
    <input type="password" class="form-control" name="geslo">
  </div>

  <button type="submit" class="btn btn-primary" name="poslji">Submit</button>
  </form>
</div>
<?php
include './footer.php';
?>