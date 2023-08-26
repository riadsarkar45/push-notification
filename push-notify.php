<?php
// if there is anything to notify, then return the response with data for
// push notification else just exit the code
$webNotificationPayload['title'] = 'Push Notification from PHP';
$webNotificationPayload['body'] = 'PHP to browser web push notification.';
$webNotificationPayload['icon'] = 'http://localhost/push-notification/';
$webNotificationPayload['url'] = 'http://localhost/push-notification/';
echo json_encode($webNotificationPayload);
exit();
?>