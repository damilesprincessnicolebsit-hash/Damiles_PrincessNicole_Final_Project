<?php
function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
$score = filter_input(INPUT_POST, 'score', FILTER_VALIDATE_INT);
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($score === false || $score === null || $score < 0 || $score > 100) {
    $result = ['type'=>'error','message'=>'Enter a whole-number score from 0 to 100.'];
  } else {
    if ($score >= 90) { $ifResult = 'Excellent'; }
    else { $ifResult = 'Keep practicing'; }
    if ($score >= 75) { $ifElseResult = 'Passed'; }
    else { $ifElseResult = 'Needs improvement'; }
    if ($score >= 90) { $grade = 'A'; }
    elseif ($score >= 80) { $grade = 'B'; }
    elseif ($score >= 75) { $grade = 'C'; }
    else { $grade = 'F'; }
    switch ($grade) {
      case 'A': $gradeDescription = 'Excellent'; break;
      case 'B': $gradeDescription = 'Very good'; break;
      case 'C': $gradeDescription = 'Satisfactory'; break;
      default: $gradeDescription = 'Below passing level';
    }
    $result = ['type'=>'success','score'=>$score,'if'=>$ifResult,'ifelse'=>$ifElseResult,'grade'=>$grade,'switch'=>$gradeDescription];
  }
}
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP Conditional Statements</title><link rel="stylesheet" href="../../assets/css/project.css"></head><body><main class="page"><a class="back" href="../../index.php">← Back to Project Hub</a><section class="hero"><span class="eyebrow">PHP ACTIVITY</span><h1>Conditional Statements</h1><p>Practice <code>if</code>, <code>if...else</code>, <code>if...elseif...else</code>, and <code>switch</code> using a sample score.</p></section><section class="panel"><form method="post"><label for="score">Sample score (0–100)</label><div class="form-row"><input id="score" name="score" type="number" min="0" max="100" step="1" required value="<?= $score !== false && $score !== null ? h($score) : '' ?>"><button type="submit">Evaluate statements</button></div></form><?php if ($result): ?><div class="result <?= h($result['type']) ?>"><?php if ($result['type']==='error'): ?><strong><?= h($result['message']) ?></strong><?php else: ?><h2>Results for <?= h($result['score']) ?></h2><ul><li><strong>if:</strong> <?= h($result['if']) ?></li><li><strong>if...else:</strong> <?= h($result['ifelse']) ?></li><li><strong>if...elseif...else:</strong> Grade <?= h($result['grade']) ?></li><li><strong>switch:</strong> <?= h($result['switch']) ?></li></ul><?php endif; ?></div><?php endif; ?><p class="hint">This is a new sample demonstration based on the conditional statements listed in your uploaded assignment PDF. Its sample grading thresholds are illustrative.</p></section></main></body></html>
