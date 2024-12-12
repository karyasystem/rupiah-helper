<?php

namespace Karyasystem\RupiahHelper;

use NumberFormatter;

class Rupiah
{
    /**
     * Mengonversi angka menjadi format mata uang rupiah.
     *
     * @param int|float $number Angka yang akan diformat.
     * @param string $prefix Prefix mata uang ('Rp' atau 'IDR').
     * @param int $decimal Jumlah desimal (default: 0).
     * @param string $decimal_separator Pemisah desimal (default: ',').
     * @param string $thousand_separator Pemisah ribuan (default: '.').
     * @return string Format mata uang rupiah.
     */
    public static function IntToRupiah($number, $prefix = 'Rp', $decimal = 0, $decimal_separator = ',', $thousand_separator = '.')
    {
        $formatted = number_format($number, $decimal, $decimal_separator, $thousand_separator);
        return ($prefix ? $prefix . ' ' : '') . $formatted;
    }

    /**
     * Mengonversi format rupiah menjadi angka.
     *
     * @param string $rupiah String format rupiah (misalnya: 'Rp 1.000.000').
     * @return int Angka hasil konversi.
     */
    public static function RupiahToInt($rupiah)
    {
        // Menghapus semua karakter kecuali angka dan tanda minus
        $number = preg_replace('/[^0-9\-]/', '', $rupiah);
        return (int) $number;
    }

    /**
     * Mengonversi angka menjadi teks bahasa Indonesia.
     *
     * @param int|float $number Angka yang akan dikonversi.
     * @param bool $capitalize Apakah teks dimulai dengan huruf kapital (default: true).
     * @return string Teks hasil konversi.
     */
    public static function Terbilang($number, $capitalize = true)
    {
        $formatter = new NumberFormatter('id', NumberFormatter::SPELLOUT);
        $terbilang = $formatter->format($number);

        // Menambahkan 'minus' untuk angka negatif
        if ($number < 0) {
            $terbilang = 'minus ' . $terbilang;
        }

        return $capitalize ? ucfirst($terbilang) . ' rupiah' : $terbilang . ' rupiah';
    }
}
