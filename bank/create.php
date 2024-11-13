<?php

//argv is a special varaible that contains an argument of all the arrays

function createAccount(string $name, int $accountNumber, int $initialBalance)
{
    echo "We are creating" . " " . $name . " " . " " .  $accountNumber . " " . $initialBalance;
}
createAccount(name: $argv[1], accountNumber: $argv[2], initialBalance: $argv[3]);
