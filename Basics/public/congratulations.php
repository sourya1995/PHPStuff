<?php

$availableLanguages = [
    'en' => 'English',
    'ger' => 'German',
    'de' => 'Deutsch'
];

$defaultLanguage = 'en';

$selectedLanguage = $defaultLanguage;

if(isset($_GET['language'])) {
    $selectedLanguage = $_GET['language'];
} elseif(isset($_COOKIE['language'])){
    $selectedLanguage = $_COOKIE['language'];
}

if(!isset($availableLanguages[$selectedLanguage])) {
    $selectedLanguage = $defaultLanguage;
}

setcookie('language', $selectedLanguage);
$messages = [
    'en' => 'Congratulations!',
    'ger' => 'Gratuliere!',
    'de' => 'Gefeliciteerd!'
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
</head>
<body>
    <form method="get">
        <p>
            <label for="language">Language:</label>
            <select id="language" name="language">
                <?php
                foreach($availableLanguages as $key => $value) {
                    ?>
                    <option value="<?php echo htmlspecialchars($key, ENT_QUOTES);?>"
                     <?php if($selectedLanguage === $key) { ?>selected<?php } ?>>
                     <?php echo htmlspecialchars($value, ENT_QUOTES); ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </p>
        <p> <button type="submit">Submit</button></p>
    </form>
    <p class="message">
        <?php echo $messages[$selectedLanguage]; ?>
    </p>
</body>
</html>