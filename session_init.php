<?php
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
session_set_cookie_params($lifetime = 0, $path = '/', $domain, $secure = true, $httponly = true);
session_start();