<?php
session_start();
$_SESSION['sqlOpenCommunityUsername'] = '';
session_destroy();
header('Location: ../');
exit(0);