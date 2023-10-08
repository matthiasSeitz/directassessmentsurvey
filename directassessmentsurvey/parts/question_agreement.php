<div class="center">
  <div>
<?php
$question = 'declaration of consent';
echo '<br><h3 class="align-center">'. $question. '</h3>';
?>

<div style="padding:10px">
<p class="align-left" style="font-size:100%; color:black; font-style:italic">


I agree to participate in the study. My participation is voluntary and I understand that I have the option to discontinue my participation in this study at any time, for any reason, without penalty.
<br>
Privacy clause:
<br>
I declare that I consent to the recording of study data and its use in anonymized form that occurs as part of the study.
<br>

<form action="" method="post">
  <input type="hidden" value="break.php" name="fnavi">
  <input type="hidden" value="declarationOfConsens" name="fquestion">

  <input type="submit" name="fanswer" value='I agree'>
</form>

</p>
</div>

</div>
</div>
