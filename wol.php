<?php
header('Content-Type: application/json');

function ping($ip, $count = 4) {
    // Pastikan $count adalah bilangan bulat positif
    $count = intval($count);
    if ($count <= 0) {
        $count = 4; // Nilai default jika $count tidak valid
    }

    // Escape the IP address to prevent shell injection
    $ip = escapeshellarg($ip);

    // Tentukan opsi ping berdasarkan sistem operasi
    $os = strtoupper(substr(PHP_OS, 0, 3));
    if ($os === 'WIN') {
        // Untuk Windows
        $command = "ping -n $count $ip";
    } else {
        // Untuk Unix-based systems (Linux, MacOS)
        $command = "ping -c $count $ip";
    }

    // Execute the ping command and capture the output and return status
    $output = [];
    $return_var = null;
    exec($command, $output, $return_var);

    // Return the output as a string
    return [
        'output' => implode("\n", $output),
        'status' => $return_var
    ];
}

// Periksa apakah ada parameter 'ip' dalam permintaan
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];
    $count = isset($_GET['count']) ? intval($_GET['count']) : 4;

    // Perform the ping and get the result
    $result = ping($ip, $count);

    // Return the result as JSON
    echo json_encode($result);
} else {
    echo json_encode([
        'error' => 'No IP address provided'
    ]);
}
?>