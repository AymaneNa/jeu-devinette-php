session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // récupérer choix user
    $userNumbers = $_POST['numbers']; // tableau

    // générer 5 nombres uniques
    $random = [];
    while (count($random) < 5) {
        $n = rand(1,12);
        if (!in_array($n, $random)) {
            $random[] = $n;
        }
    }

    // compter correct
    $correct = 0;
    foreach ($userNumbers as $num) {
        if (in_array($num, $random)) {
            $correct++;
        }
    }

    // update score
    $_SESSION['score_correct'] += $correct;
    $_SESSION['score_total'] += 5;

    // message (match obligatoire)
    $message = match(true) {
        $correct == 5 => "🎉 Parfait!",
        $correct > 0 => "👍 Partiel",
        default => "❌ Aucun"
    };

    $_SESSION['message'] = $message;

    header("Location: game-form.php");
    exit;
}