<?php

function printLyrics() {
    $lyrics = [
        "\033[1;31mDan ku berjanji tak akan sakiti ❤️\033[0m", 
        "\033[1;32mKau yang kucinta sepenuh hati 💖\033[0m", 
        "\033[1;34mBiarkan semua manusia jadi saksi nyata 👀\033[0m", 
        "\033[1;35mBahwa memilikimu adalah 🤗\033[0m", 
        "\033[1;33mAnugerah terindah untuk diriku✨\033[0m" 
    ];
    
    $lineDelays = [500000, 500000, 500000, 700000, 500000]; 
    
    foreach ($lyrics as $index => $line) {
        for ($i = 0; $i < strlen(strip_tags($line)); $i++) {
            echo $line[$i];
            usleep(70000); 
        }
        echo "\n\n";
        usleep($lineDelays[$index]); 
    }
}
printLyrics();
?>
