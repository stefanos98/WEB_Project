<?php
session_start();
echo $_SESSION['user_id'];
echo "<br><a href='MainUser.html'>Back</a>";