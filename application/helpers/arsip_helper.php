<?php
function format_date($timestamp)
{
    date_default_timezone_set('Asia/Jakarta');
    $days_in_indonesian = array(
        'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
    );

    $months_in_indonesian = array(
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    $day = $days_in_indonesian[date('w', $timestamp)];
    $month = $months_in_indonesian[date('n', $timestamp) - 1];
    return $day . ', ' . date('j', $timestamp) . ' ' . $month . ' ' . date('Y, H:i', $timestamp) . ' WIB';
}
