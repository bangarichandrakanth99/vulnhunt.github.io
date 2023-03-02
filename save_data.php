<?php
$data = array(
	'cve' => $_POST['cve'],
	'cvss' => $_POST['cvss'],
	'cwe' => $_POST['cwe'],
	'reference_links' => $_POST['reference_links'],
	'description' => $_POST['description'],
	'data' => $_POST['data'],
	'vulnerable_identifier_link' => $_POST['vulnerable_identifier_link'],
	'version' => $_POST['version'],
	'language' => $_POST['language']
);

$file = 'data.json';

// Open the file for reading and writing
$current_data = file_get_contents($file);

// Convert the JSON string to an array
$current_data_arr = json_decode($current_data, true);

// Add the new data to the array
$current_data_arr[] = $data;

// Convert the array back to a JSON string
$new_data = json_encode($current_data_arr);

// Save the new data to the file
file_put_contents($file, $new_data);

echo "Data saved successfully.";
?>



