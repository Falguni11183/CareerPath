<?php
require_once __DIR__ . '/../db_connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['answer'])) {
    header("Location: assessment.php?error=incomplete");
    exit;
}

$answers = $_POST['answer'];

$technical = 0; $business = 0; $management = 0; $design = 0;

foreach ($answers as $questionId => $answer) {
    switch ($answer) {
        case 'A': $technical++; break;
        case 'B': $business++; break;
        case 'C': $management++; break;
        case 'D': $design++; break;
    }
}

$scores = [
    1 => $technical,
    2 => $business,
    3 => $management,
    4 => $design
];

arsort($scores);
$careerId = array_key_first($scores);
$topScore = $scores[$careerId];

$stmt = $conn->prepare("SELECT * FROM career_profiles WHERE id = ?");
$stmt->bind_param("i", $careerId);
$stmt->execute();
$career = $stmt->get_result()->fetch_assoc();

if (!$career) {
    die("Career not found. Check career_profiles table.");
}

$userId = $_SESSION['user_id'];

$insert = $conn->prepare("INSERT INTO results (user_id, career_profile_id, score) VALUES (?, ?, ?)");
$insert->bind_param("iii", $userId, $careerId, $topScore);
$insert->execute();

$_SESSION['career'] = $career;

header("Location: result.php");
exit;
?>