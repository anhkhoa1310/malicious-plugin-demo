<?php
file_put_contents(__DIR__ . "/hacked.txt", "Trang bị chèn mã độc lúc " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

// Hiển thị alert mỗi khi trang được load
echo "<script>alert('Website đã bị chèn mã độc!');</script>";
?>
