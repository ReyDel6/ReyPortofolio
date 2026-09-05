<?php
// ============================================================
// DATA RESOLVER — memilih data bahasa sesuai pilihan pengunjung
// (inc/lang.php menetapkan $GLOBALS['LANG'] = 'id' | 'en')
// ============================================================

require_once __DIR__ . '/inc/lang.php';

if (($GLOBALS['LANG'] ?? 'id') === 'en') {
    require_once __DIR__ . '/data_en.php';
} else {
    require_once __DIR__ . '/data_id.php';
}