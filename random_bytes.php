<?php
//string random_bytes ( int $length )

/* In diesem Beispiel wird eine zufällige Bytefolge mit einer Länge von 10 Bytes erzeugt 
und anschließend in einen hexadezimalen String umgewandelt, um sie lesbar zu machen.
Die Funktion bin2hex() wird verwendet, weil die rohen Bytes nicht direkt als lesbare
Zeichen dargestellt werden können. Sie werden typischerweise als Hexadezimalwerte dargestellt,
um sie z.B. in Datenbanken zu speichern oder sicher über das Internet zu übertragen. */

    $bytes = random_bytes(10);
    echo bin2hex($bytes);


 // In diesem Beispiel wird eine zufällige Bytefolge mit einer Länge von 10 Bytes erzeugt 
 // und anschließend in einen hexadezimalen String umgewandelt, um sie lesbar zu machen.
 // Die Funktion bin2hex() wird verwendet, weil die rohen Bytes nicht direkt als lesbare
 // Zeichen dargestellt werden können. Sie werden typischerweise als Hexadezimalwerte 
 // dargestellt,  um sie z.B. in Datenbanken zu speichern oder sicher über das Internet zu übertragen.