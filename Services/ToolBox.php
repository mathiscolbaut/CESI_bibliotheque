<?php

class Toolbox
{
    public const COULEUR_ROUGE = "success";
    public const COULEUR_VERTE = "danger";
    public const COULEUR_JAUNE = "warning";

    public static function addAlert($message, $type)
    {
        $_SESSION['alert'] = [
            "message" => $message,
            "type" => $type
        ];
    }

    public static function displayAlert(): void
    {
        if (!empty($_SESSION['alert'])) {
            $alert = $_SESSION['alert'];

            switch ($alert["type"]) {
                case self::COULEUR_ROUGE:
                    echo "<div class='bg-red-300 text-white text-center " . $alert['type'] . "' role='alert'> " . $alert['message'] . "</div>";
                    break;
                case self::COULEUR_VERTE:
                    echo "<div class='bg-green-300 text-white text-center " . $alert['type'] . "' role='alert'> " . $alert['message'] . "</div>";
                    break;
                case self::COULEUR_JAUNE:
                    echo "<div class='bg-yellow-300 text-white text-center " . $alert['type'] . "' role='alert'> " . $alert['message'] . "</div>";
                    break;
            }

            // Clear the alert after displaying it
            unset($_SESSION['alert']);
        }
    }

}