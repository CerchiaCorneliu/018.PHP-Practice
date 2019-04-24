<?php
  function longdate($timestamp)
  {
    return date("l F jS Y", $timestamp);
  }
  echo longdate(time());
  echo "<br>";
  // 17 days × 24 hours × 60 minutes × 60 seconds
  echo longdate(time() - 17 * 24 * 60 * 60);
?>
