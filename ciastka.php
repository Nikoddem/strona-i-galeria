<?php
// Sprawdzamy, czy istnieje ciasteczko 'visits'
if (isset($_COOKIE['visits'])) {
    // Jeśli tak, zwiększamy liczbę odwiedzin
    $visits = $_COOKIE['visits'] + 1;
} else {
    // Jeśli ciasteczko nie istnieje, ustawiamy liczbę odwiedzin na 1
    $visits = 1;
}

// Ustawiamy ciasteczko 'visits' z nową liczbą odwiedzin na 30 dni
setcookie('visits', $visits, time() + (30 * 24 * 60 * 60), '/');

// Wyświetlamy liczbę odwiedzin
echo "<h1>Witaj na mojej stronie!</h1>";
echo "<p>Liczba odwiedzin: " . $visits . "</p>";
?>
