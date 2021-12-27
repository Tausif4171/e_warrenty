<?php


// Database configuration 
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "e_warrenty";

// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection 
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Filter the excel data 
function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls";

// Column names 
$fields = array('Id', 'C_Name', 'C_Email', 'C_Phone', 'C_Address', 'C_City', 'C_Pincode', 'Product_No', 'Product_Model',
 'Product_Year', 'Product_Color', 'roll_no', 'c_image', 'Warrenty_Type', 'Arnour_install', 'Arnour_area', 'Price', 'M_Name', 'I_Name',
  'I_Number',
 'Invoice_no', 'Purchase_Date', 'Expire_Date', 'D_Name', 'D_Email', 'Warrenty_no', 'Extra', 'state', 'uiw',
 'description');

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database 
$query = $db->query("SELECT * FROM e_warrenty ORDER BY id ASC");
if ($query->num_rows > 0) {
    // Output each row of the data 
    while ($row = $query->fetch_assoc()) {
        // $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array(
            $row['Id'], $row['C_Name'], $row['C_Email'], $row['C_Phone'], $row['C_Address'], $row['C_City'], $row['C_Pincode'], $row['Product_No'],
            $row['Product_Model'], $row['Product_Year'], $row['Product_Color'], $row['roll_no'], $row['c_image'], $row['Warrenty_Type'], $row['Arnour_install'],
             $row['Arnour_area'], $row['Price'], $row['M_Name'], $row['I_Name'], $row['I_Number'],
            $row['Invoice_no'], $row['Purchase_Date'],
            $row['Expire_Date'], $row['D_Name'], $row['D_Email'], $row['Warrenty_no'], $row['Extra'], $row['state'], $row['uiw'], $row['description']
        );
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data 
echo $excelData;

exit;
