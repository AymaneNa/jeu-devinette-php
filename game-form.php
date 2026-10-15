
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login-form.php");
    exit;
}

$username = $_SESSION["username"];
$score = $_SESSION['score_correct'] . "/" . $_SESSION['score_total'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Jeu Devinette</title>

<style>
body { font-family: Arial; }

.numbers {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.number {
    width: 40px;
    height: 40px;
    background: lightblue;
    text-align: center;
    line-height: 40px;
    cursor: grab;
    border: 1px solid black;
}

.dropzone {
    width: 50px;
    height: 50px;
    border: 2px dashed black;
    display: inline-block;
    margin-right: 10px;
    text-align: center;
    line-height: 50px;
}

button {
    margin-top: 20px;
}
</style>

</head>
<body>

<h2>🎯 Jeu Devinette</h2>

<p>Date et heure : <span id="time"></span></p>

<script>
setInterval(() => {
    document.getElementById("time").innerHTML = new Date().toLocaleString();
}, 1000);
</script>

<p>Utilisateur : <?php echo $username; ?></p>
<p>Score : <?php echo $score; ?></p>

<?php
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>

<!-- NOMBRES DRAG -->
<div class="numbers">
<?php for ($i = 1; $i <= 12; $i++) { ?>
    <div class="number" draggable="true" ondragstart="drag(event)" id="num<?php echo $i; ?>">
        <?php echo $i; ?>
    </div>
<?php } ?>
</div>

<!-- FORM -->
<form action="game-form-handling.php" method="post" id="gameForm">

    <!-- DROP ZONES -->
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="dropzone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        <input type="hidden" name="numbers[]">
    <?php } ?>

    <br>
    <button type="submit">JOUER</button>
</form>

<br>
<a href="logout.php">SE DÉCONNECTER</a>

<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.innerText);
}

function drop(ev) {
    ev.preventDefault();

    let data = ev.dataTransfer.getData("text");

    // éviter remplacer si déjà rempli
    if (ev.target.innerText !== "") return;

    ev.target.innerText = data;

    // remplir input hidden correspondant
    let index = Array.from(document.getElementsByClassName("dropzone")).indexOf(ev.target);
    document.getElementsByName("numbers[]")[index].value = data;
}
</script>

</body>
</html>