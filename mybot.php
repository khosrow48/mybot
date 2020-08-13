    include("Telegram.php");

    date_default_timezone_set("asia/tehran");

    // Set the bot TOKEN

    $bot_id = "1362637450:AAEgAW-WLV2q6CIjIlyLxPXlOFRdiXmpfxY";

    // Instances the class

    $telegram = new Telegram($bot_id);