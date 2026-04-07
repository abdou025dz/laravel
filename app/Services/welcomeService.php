<?php

namespace App\Service;

class WelcomeService
{
    public function greet($name){
        $hour = now()->hour;
        if ($hour < 12) {
            $greeting = "Bonjour";
        } elseif ($hour < 18 ) {
            $greeting = "Bon apres-midi";
        }else{
            $greeting = "Bonsoir";
        }
        return "$greeting, $name ! ";
    }
}
