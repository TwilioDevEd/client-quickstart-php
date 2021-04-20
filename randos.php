<?php

// Generate a random username for the connecting client
function randomUsername() {
    $ADJECTIVES = array(
        'Awesome', 'Bold', 'Creative', 'Dapper', 'Eccentric', 'Fiesty', 'Golden',
        'Holy', 'Ignominious', 'Jolly', 'Kindly', 'Lucky', 'Mushy', 'Natural',
        'Oaken', 'Precise', 'Quiet', 'Rowdy', 'Sunny', 'Tall',
        'Unique', 'Vivid', 'Wonderful', 'Xtra', 'Yawning', 'Zesty',
    );

    $FIRST_NAMES = array(
        'Anna', 'Bobby', 'Cameron', 'Danny', 'Emmett', 'Frida', 'Gracie', 'Hannah',
        'Isaac', 'Jenova', 'Kendra', 'Lando', 'Mufasa', 'Nate', 'Owen', 'Penny',
        'Quincy', 'Roddy', 'Samantha', 'Tammy', 'Ulysses', 'Victoria', 'Wendy',
        'Xander', 'Yolanda', 'Zelda',
    );

    $LAST_NAMES = array(
        'Anchorage', 'Berlin', 'Cucamonga', 'Davenport', 'Essex', 'Fresno',
        'Gunsight', 'Hanover', 'Indianapolis', 'Jamestown', 'Kane', 'Liberty',
        'Minneapolis', 'Nevis', 'Oakland', 'Portland', 'Quantico', 'Raleigh',
        'SaintPaul', 'Tulsa', 'Utica', 'Vail', 'Warsaw', 'XiaoJin', 'Yale',
        'Zimmerman',
    );

    // Choose random components of username and return it
    $adj = $ADJECTIVES[array_rand($ADJECTIVES)];
    $fn = $FIRST_NAMES[array_rand($FIRST_NAMES)];
    $ln = $LAST_NAMES[array_rand($LAST_NAMES)];
    
    return $adj . $fn . $ln;
}
