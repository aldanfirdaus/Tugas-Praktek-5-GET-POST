<?php
if(isset($variable_cookies)){ //mengecek variable_cookies ada atau tidak
    echo 'Variable cookiesnya "$variable_cookies" nilainya adalah' .$variable_cookies; //jika ada maka tampil teks dengan nilai variable_cookies
}else{
    echo "Variable cookies belum diterapkan"; //jika tidak tampil teks
}
?>