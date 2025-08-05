<?php
// حماية إضافية ممكنة لاحقاً (مثل التحقق من الجلسة أو IP)

// الرابط الحقيقي للتحميل
$downloadUrl = 'https://dlll.apkm.app/wabuss/3.50/WA_Business_Gold_Clone_v3.50.apk';

// إعادة توجيه المستخدم إلى الرابط
header("Location: $downloadUrl");
exit;
?>
