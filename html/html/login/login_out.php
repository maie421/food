<?php
  session_start();

  unset ($_SESSION['userid']);

  echo("
          <script>
            location.href='http://study421.dothome.co.kr/';
          </script>
       ");
?>