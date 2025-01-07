<h3>Try catch</h3>

<?php
    try {
        $x = 10 / 'Hello';
    } catch (DivisionByZeroError $e) {
        echo 'Error ไม่สามารถหารด้วย 0 ได้';
    /*}catch (TypeError $e) {
        echo 'Error ไม่สามารถหารด้วยตัวอักษร ได้';
    */}catch (Throwable $e) {
        echo 'เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้' . $e->getMessage();
    }

    echo '<br>';
    try {
        $x = 100 / 0;
    } catch (Throwable $e) {
        echo 'เกิดข้อผิดพลาด ไม่สามารถดำเนินการได้' . $e->getMessage();
    }

?>