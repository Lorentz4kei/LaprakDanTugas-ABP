<?php

// Set header agar browser tahu ini adalah data JSON
header('Content-Type: application/json');

// Data sederhana (simulasi database)
$data = [
    ['nama' => 'Aditya', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Tegal'],
    ['nama' => 'Afif', 'pekerjaan' => 'Data Scientist', 'lokasi' => 'Slawi'],
    ['nama' => 'Andre', 'pekerjaan' => 'Mobile Developer', 'lokasi' => 'Cilacap']
];

// Ubah array menjadi JSON dan tampilkan
echo json_encode($data);
