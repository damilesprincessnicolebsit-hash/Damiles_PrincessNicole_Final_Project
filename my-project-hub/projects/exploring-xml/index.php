<?php
$xmlPath = __DIR__ . '/student_data.xml';
$students = [];
$error = '';
if (is_file($xmlPath)) {
    libxml_use_internal_errors(true);
    $xml = simplexml_load_file($xmlPath);
    if ($xml !== false) {
        foreach ($xml->student as $student) {
            $students[] = [
                'id' => (string)$student->id,
                'name' => (string)$student->name,
                'course' => (string)$student->course,
                'year' => (string)$student->year,
            ];
        }
    } else { $error = 'The XML file could not be parsed.'; }
} else { $error = 'student_data.xml was not found.'; }
function h($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Exploring XML | Project Hub</title><link rel="stylesheet" href="../../assets/css/project.css"></head><body><main class="page"><a class="back" href="../../index.php">← Back to Project Hub</a><section class="hero"><span class="eyebrow">XML ACTIVITY</span><h1>Exploring XML</h1><p>This page reads the supplied <code>student_data.xml</code> file and displays its student records.</p></section><section class="panel"><h2>Student data</h2><?php if ($error): ?><p class="error"><?= h($error) ?></p><?php elseif (!$students): ?><p>No records found.</p><?php else: ?><div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Course</th><th>Year</th></tr></thead><tbody><?php foreach ($students as $student): ?><tr><td><?= h($student['id']) ?></td><td><?= h($student['name']) ?></td><td><?= h($student['course']) ?></td><td><?= h($student['year']) ?></td></tr><?php endforeach; ?></tbody></table></div><?php endif; ?><p class="hint">The original XML file is kept in this project folder. Use a PHP-enabled server such as XAMPP to run this page.</p></section></main></body></html>
