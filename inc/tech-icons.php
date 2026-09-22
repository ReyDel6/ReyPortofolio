<?php
/**
 * ============================================================
 * HELPER IKON TECH — menampilkan logo brand di tech stack proyek.
 * Sumber utama: $techSkillPills (halaman Skill) + alias tambahan.
 * ============================================================
 */

function techPillKeys(): array
{
    static $keys;
    if ($keys !== null) {
        return $keys;
    }

    $map = [];
    $base = [
        'React.js'              => ['react'],
        'Next.js'               => ['next'],
        'TypeScript'            => ['typescript'],
        'JavaScript'            => ['javascript'],
        'HTML5'                 => ['html'],
        'CSS3'                  => ['css'],
        'TailwindCSS'           => ['tailwind'],
        'Bootstrap'             => ['bootstrap'],
        'Flutter'               => ['flutter'],
        'Kotlin'                => ['kotlin'],
        'Android'               => ['android'],
        'MySQL'                 => ['mysql'],
        'Firebase'              => ['firebase'],
        'Docker'                => ['docker'],
        'Postman'               => ['postman'],
        'Figma'                 => ['figma'],
        'VS Code'               => ['vscode'],
        'Microsoft Office'      => ['office'],
        'Adobe Photoshop'       => ['photoshop'],
        'Adobe Illustrator'     => ['illustrator'],
        'Adobe InDesign'        => ['indesign'],
        'PHP'                   => ['php'],
        'Laravel'               => ['laravel'],
    ];

    foreach (($GLOBALS['techSkillPills'] ?? []) as $pill) {
        $name = $pill['name'];
        foreach (($base[$name] ?? [strtolower($name)]) as $key) {
            $map[$key] = $pill;
        }
    }

    // Teknologi yang muncul di proyek tetapi belum ada di daftar Skill
    foreach ([
        ['name' => 'Vite',             'icon' => 'vite',       'color' => '#646cff', 'keys' => ['vite']],
        ['name' => 'SQLite',           'icon' => 'sqlite',     'color' => '#003b57', 'keys' => ['sqlite']],
        ['name' => 'Dart',             'icon' => 'dart',       'color' => '#0175c2', 'keys' => ['dart']],
        ['name' => 'Node.js',          'icon' => 'nodejs',     'color' => '#539e43', 'keys' => ['node']],
        ['name' => 'Excel',            'icon' => 'excel',      'color' => '#217346', 'keys' => ['excel']],
        ['name' => 'Alpine.js',        'icon' => 'alpinejs',   'color' => '#77c1d4', 'keys' => ['alpine']],
        ['name' => 'Chart.js',         'icon' => 'chartjs',    'color' => '#ff6384', 'keys' => ['chart']],
        ['name' => 'Express',          'icon' => 'express',    'color' => '#ffffff', 'keys' => ['express']],
        ['name' => 'PostgreSQL',       'icon' => 'postgres',   'color' => '#336791', 'keys' => ['postgres', 'postgresql']],
    ] as $alias) {
        foreach ($alias['keys'] as $key) {
            $map[$key] = $alias;
        }
    }

    $keys = $map;
    return $keys;
}

/**
 * Mengembalikan daftar pill (ikon brand) yang cocok dengan string tech proyek.
 * Pencocokan berbasis kata (token) agar tidak salah ambil ikon dari kata yang
 * hanya menyerupai nama brand.
 */
function techMatches(string $tech): array
{
    $tokens = preg_split('/[^a-z0-9]+/', strtolower($tech), -1, PREG_SPLIT_NO_EMPTY);
    $found  = [];
    foreach (techPillKeys() as $key => $pill) {
        if ($key === '') {
            continue;
        }
        foreach ($tokens as $token) {
            if ($token === $key) {
                $found[$pill['name'] . '|' . ($pill['icon'] ?? $key)] = $pill;
                break;
            }
        }
    }
    return array_values($found);
}

/**
 * Merender chip tech proyek lengkap dengan logo brand.
 */
function renderTechChip(string $tech): string
{
    $chips = '';
    foreach (techMatches($tech) as $pill) {
        $src = ($pill['local_icon'] ?? 'https://skillicons.dev/icons?i=' . $pill['icon']);
        $chips .= '<img class="proj-chip-icon" src="' . htmlspecialchars($src) . '" alt="' .
            htmlspecialchars($pill['name']) . '" loading="lazy" onerror="this.style.display=\'none\';">';
    }
    return '<span class="proj-chip proj-chip-tech">' . $chips . '<span>' . htmlspecialchars($tech) . '</span></span>';
}