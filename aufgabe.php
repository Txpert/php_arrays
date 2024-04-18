Aufgabe: Erstelle zufällige Passwörter

Du sollst ein PHP-Script schreiben, das ein Array mit mindestens 10 zufälligen Passwörtern erzeugt. Jedes Passwort soll aus einer zufälligen Kombination von Zeichen bestehen und mindestens 8 Zeichen lang sein.

Hier ein paar einfache Schritte, wie du das machen kannst:

Initialisiere ein leeres Array, um die Passwörter zu speichern.
Benutze eine Schleife, um 10 Mal eine Folge von Operationen auszuführen.
In jeder Iteration der Schleife, benutze random_bytes() um eine Zeichenfolge von zufälligen Bytes zu generieren.
Wandle die Bytes in einen lesbaren Text um, indem du die Funktion bin2hex() benutzt. Dies verdoppelt die Länge der Zeichenfolge, also nimm nur die ersten 8 Zeichen, um das Passwort zu erhalten.
Füge das erzeugte Passwort zum Array hinzu.
Gib am Ende alle Passwörter aus, um zu sehen, was du generiert hast.

<?php
$passwoerter = [];

for ($i = 0; $i < 10; $i++) {
    // Generiere zufällige Bytes und wandle sie in Hexadezimal um
    $rohdaten = random_bytes(8);  // 8 Bytes werden zu 16 Hex-Zeichen
    $passwort = bin2hex($rohdaten);
    $passwort = substr($passwort, 0, 8);  // Kürze das Passwort auf 8 Zeichen

    // Füge das Passwort zum Array hinzu
    $passwoerter[] = $passwort;
}

// Gib die Passwörter aus
print_r($passwoerter);
?>



