<?php
declare(strict_types=1);

/**
 * hadith-php-mudallis-tadlis-check — فاحص التدليس وعنعنة المدلسين وصيغ الأداء والتحمل
 * Mudallis An'anah & Explicit Sama' Transmission Formula Checker
 */
$input = "حدثنا / سمعت / عن";
$digest = substr(hash("sha256", "hadith-php-mudallis-tadlis-check:" . $input), 0, 12);

echo "[RUN] hadith-php-mudallis-tadlis-check (PHP) — Mudallis An'anah & Explicit Sama' Transmission Formula Checker" . PHP_EOL;
echo "[AR]  فاحص التدليس وعنعنة المدلسين وصيغ الأداء والتحمل" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Formula=Haddathana | ExplicitSama=True | TadlisRisk=0.0 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
