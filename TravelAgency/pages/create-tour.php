<?php
include(__DIR__ . '/../bootstrap.php');
include(__DIR__.'/functions/tour-crud.php');


$formErrors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Step 1: normalize the request data:
    $normalizedData = normalize_submitted_data($_POST);
    // Step 2: validate the normalized data
    $formErrors = validate_normalized_data($normalizedData);
  

    // Step 3: save the data if it's valid
    if (count($formErrors) === 0) {
        $toursData = load_all_tours_data();
        $normalizedData['id'] = count($toursData) + 1;
        $toursData[] = $normalizedData;
        save_all_tours($toursData);
        $_SESSION['message'] = 'The new tour was saved successfully';
        header('Location: /list-tours');
        exit;
    }
}

// Convert the tours data to JSON
$jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
// Save the tours data to `data/tours.json`:
file_put_contents($toursJsonFile, $jsonData);

include(__DIR__ . '/../_header.php');

?>
<p><a href="/list-tours">Go back to the list</a></p>
<h1>Create a new tour</h1>
<?php
include(__DIR__.'/snippets/_tour-form.php');

include(__DIR__ . '/../_footer.php');