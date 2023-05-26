


<?php

//  Create a new thread.
      /* $q = "INSERT INTO threads (lang_id, user_id, subject) VALUES ({$_SESSION['lid']},
        {$_SESSION['user_id']}, '" . mysqli_real_escape_string($dbc, $subject) . "')";
        //  https://stackoverflow.com/questions/3716373/real-escape-string-and-pdo
        //  Use prepared statements. Those keep the data and syntax apart, which removes the need for escaping MySQL data. See e.g. this tutorial. */
        

$sql = "INSERT INTO threads (lang_id, user_id, subject) VALUES (:lang_id, :user_id, :subject)";
//  $r = mysqli_query($dbc, $q);
$stmt = $pdo->prepare($sql);
$r = $stmt->execute(array(
  ':lang_id' => $_SESSION['lid'],
  ':user_id' => (int) $_SESSION['user_id'],
  ':subject' => $subject
));


