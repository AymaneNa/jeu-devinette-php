<?php

$username = $_POST["username"] ?? "";

// test
if ($username === "aymane") {
    echo "<span style='color:red;'>❌ Déjà utilisé</span>";
} else {
    echo "<span style='color:green;'>✅ Disponible</span>";
}