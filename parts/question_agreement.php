<?php
$question = 'Declaration of consent';
echo '<h1>'. $question. '</h1>';
?>

I agree to participate in the study. My participation is voluntary and I understand that I have the option to discontinue my participation in this study at any time, for any reason, without penalty.
<br>
Privacy clause:
<br>
I declare that I consent to the recording of study data and its use in anonymized form that occurs as part of the study.
<br>

<form action="" method="post">
  <input type="hidden" value="break.php" name="navi">
  <input type="hidden" value="declarationOfConsens" name="question">

  <input type="submit" name="item01" value='I agree'>
</form>