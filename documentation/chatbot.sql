/*
MySQL Backup
Database: chatbot
Backup Time: 2023-06-21 10:19:06
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `chatbot`.`sb_conversations`;
DROP TABLE IF EXISTS `chatbot`.`sb_messages`;
DROP TABLE IF EXISTS `chatbot`.`sb_reports`;
DROP TABLE IF EXISTS `chatbot`.`sb_settings`;
DROP TABLE IF EXISTS `chatbot`.`sb_users`;
DROP TABLE IF EXISTS `chatbot`.`sb_users_data`;
CREATE TABLE `sb_conversations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `creation_time` datetime NOT NULL,
  `status_code` tinyint(4) DEFAULT 0,
  `department` tinyint(4) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `source` varchar(2) DEFAULT NULL,
  `extra` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_id` (`agent_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `sb_conversations_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `sb_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sb_conversations_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `sb_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `sb_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `creation_time` datetime NOT NULL,
  `status_code` tinyint(4) DEFAULT 0,
  `attachments` text DEFAULT NULL,
  `payload` text DEFAULT NULL,
  `conversation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `conversation_id` (`conversation_id`),
  CONSTRAINT `sb_messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sb_users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sb_messages_ibfk_2` FOREIGN KEY (`conversation_id`) REFERENCES `sb_conversations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
CREATE TABLE `sb_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `value` varchar(191) NOT NULL,
  `creation_time` date NOT NULL,
  `external_id` int(11) DEFAULT NULL,
  `extra` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `sb_settings` (
  `name` varchar(191) NOT NULL,
  `value` longtext DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `sb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `user_type` varchar(10) NOT NULL,
  `creation_time` datetime NOT NULL,
  `token` varchar(50) NOT NULL,
  `last_activity` datetime DEFAULT NULL,
  `typing` int(11) DEFAULT -1,
  `department` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `sb_users_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sb_users_data_index` (`user_id`,`slug`),
  CONSTRAINT `sb_users_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sb_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
BEGIN;
LOCK TABLES `chatbot`.`sb_conversations` WRITE;
DELETE FROM `chatbot`.`sb_conversations`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `chatbot`.`sb_messages` WRITE;
DELETE FROM `chatbot`.`sb_messages`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `chatbot`.`sb_reports` WRITE;
DELETE FROM `chatbot`.`sb_reports`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `chatbot`.`sb_settings` WRITE;
DELETE FROM `chatbot`.`sb_settings`;
INSERT INTO `chatbot`.`sb_settings` (`name`,`value`) VALUES ('active_agents_conversations', '[[0,1687316605]]'),('cron', '\"04\"'),('emails', '{\"email-subscribe\":[{\"email-subscribe-subject\":[\"\",\"text\"],\"email-subscribe-content\":[\"\",\"textarea\"]},\"multi-input\"],\"email-user\":[{\"email-user-subject\":[\"\",\"text\"],\"email-user-content\":[\"\",\"textarea\"]},\"multi-input\"],\"email-agent\":[{\"email-agent-subject\":[\"\",\"text\"],\"email-agent-content\":[\"\",\"textarea\"]},\"multi-input\"],\"email-signature\":[\"\",\"textarea\"],\"email-header\":[\"\",\"textarea\"]}'),('rich-messages', '{\"rich-messages\":[\"repeater\"]}'),('settings', '{\"chat-login-init\":[false,\"checkbox\"],\"init-dashboard\":[false,\"checkbox\"],\"disable-dashboard\":[false,\"checkbox\"],\"force-one-conversation\":[false,\"checkbox\"],\"chat-timetable-disable\":[false,\"checkbox\"],\"chat-offline-disable\":[false,\"checkbox\"],\"front-auto-translations\":[false,\"checkbox\"],\"auto-open\":[false,\"checkbox\"],\"disable-uploads\":[false,\"checkbox\"],\"close-chat\":[false,\"checkbox\"],\"articles-active\":[false,\"checkbox\"],\"articles-title\":[\"\",\"text\"],\"articles-button-link\":[\"\",\"text\"],\"chat-manual-init\":[false,\"checkbox\"],\"agents-menu\":[{\"agents-menu-active\":[false,\"checkbox\"],\"agents-menu-title\":[\"\",\"text\"]},\"multi-input\"],\"messaging-channels\":[{\"messaging-channels-active\":[false,\"checkbox\"],\"messaging-channels-title\":[\"\",\"text\"],\"messaging-channels-wa\":[\"\",\"text\"],\"messaging-channels-fb\":[\"\",\"text\"],\"messaging-channels-ig\":[\"\",\"text\"],\"messaging-channels-tw\":[\"\",\"text\"],\"messaging-channels-tg\":[\"\",\"text\"],\"messaging-channels-vb\":[\"\",\"text\"],\"messaging-channels-em\":[\"\",\"text\"],\"messaging-channels-tk\":[\"\",\"text\"]},\"multi-input\"],\"chat-timetable\":[{\"chat-timetable-active\":[false,\"checkbox\"],\"chat-timetable-hide\":[false,\"checkbox\"],\"chat-timetable-agents\":[false,\"checkbox\"],\"chat-timetable-type\":[\"\",\"select\"],\"chat-timetable-title\":[\"\",\"text\"],\"chat-timetable-msg\":[\"\",\"textarea\"]},\"multi-input\"],\"privacy\":[{\"privacy-active\":[false,\"checkbox\"],\"privacy-title\":[\"\",\"text\"],\"privacy-msg\":[\"\",\"textarea\"],\"privacy-msg-decline\":[\"\",\"textarea\"],\"privacy-link\":[\"\",\"text\"],\"privacy-link-text\":[\"\",\"text\"],\"privacy-btn-approve\":[\"\",\"text\"],\"privacy-btn-decline\":[\"\",\"text\"]},\"multi-input\"],\"popup-message\":[{\"popup-active\":[false,\"checkbox\"],\"popup-mobile-hidden\":[false,\"checkbox\"],\"popup-image\":[\"\",\"upload-image\"],\"popup-title\":[\"\",\"text\"],\"popup-msg\":[\"\",\"textarea\"]},\"multi-input\"],\"welcome-message\":[{\"welcome-active\":[false,\"checkbox\"],\"welcome-open\":[false,\"checkbox\"],\"welcome-sound\":[false,\"checkbox\"],\"welcome-disable-office-hours\":[false,\"checkbox\"],\"welcome-trigger\":[\"load\",\"select\"],\"welcome-delay\":[\"\",\"number\"],\"welcome-msg\":[\"\",\"textarea\"]},\"multi-input\"],\"follow-message\":[{\"follow-active\":[false,\"checkbox\"],\"follow-disable-office-hours\":[false,\"checkbox\"],\"follow-name\":[false,\"checkbox\"],\"follow-last-name\":[false,\"checkbox\"],\"follow-phone\":[false,\"checkbox\"],\"follow-phone-required\":[false,\"checkbox\"],\"follow-title\":[\"\",\"text\"],\"follow-delay\":[\"\",\"number\"],\"follow-msg\":[\"\",\"textarea\"],\"follow-success\":[\"\",\"textarea\"],\"follow-placeholder\":[\"\",\"text\"]},\"multi-input\"],\"close-message\":[{\"close-active\":[false,\"checkbox\"],\"close-transcript\":[false,\"checkbox\"],\"close-msg\":[\"\",\"textarea\"]},\"multi-input\"],\"subscribe-message\":[{\"subscribe-active\":[false,\"checkbox\"],\"subscribe-sound\":[false,\"checkbox\"],\"subscribe-delay\":[\"\",\"number\"],\"subscribe-name\":[false,\"checkbox\"],\"subscribe-last-name\":[false,\"checkbox\"],\"subscribe-title\":[\"\",\"text\"],\"subscribe-msg\":[\"\",\"textarea\"],\"subscribe-msg-success\":[\"\",\"textarea\"],\"subscribe-placeholder\":[\"\",\"text\"]},\"multi-input\"],\"admin-title\":[\"\",\"text\"],\"login-icon\":[\"\",\"upload-image\"],\"admin-icon\":[\"\",\"upload-image\"],\"login-message\":[\"\",\"text\"],\"collapse\":[false,\"checkbox\"],\"admin-auto-translations\":[false,\"checkbox\"],\"admin-disable-settings-translations\":[false,\"checkbox\"],\"admin-auto-archive\":[false,\"checkbox\"],\"order-by-date\":[false,\"checkbox\"],\"agents\":[{\"agents-users-area\":[false,\"checkbox\"],\"agents-edit-user\":[false,\"checkbox\"],\"agents-tab\":[false,\"checkbox\"],\"agents-delete-conversation\":[false,\"checkbox\"],\"agents-delete-message\":[false,\"checkbox\"]},\"multi-input\"],\"supervisor\":[{\"supervisor-id\":[\"\",\"text\"],\"supervisor-users-area\":[false,\"checkbox\"],\"supervisor-settings-area\":[false,\"checkbox\"],\"supervisor-reports-area\":[false,\"checkbox\"],\"supervisor-edit-user\":[false,\"checkbox\"],\"supervisor-agents-tab\":[false,\"checkbox\"],\"supervisor-delete-conversation\":[false,\"checkbox\"],\"supervisor-delete-message\":[false,\"checkbox\"],\"supervisor-send-message\":[false,\"checkbox\"]},\"multi-input\"],\"rtl-admin\":[false,\"checkbox\"],\"show-profile-images-admin\":[false,\"checkbox\"],\"disable-notes\":[false,\"checkbox\"],\"disable-filters\":[false,\"checkbox\"],\"disable-attachments\":[false,\"checkbox\"],\"transcript\":[{\"transcript-type\":[\"csv\",\"select\"],\"transcript-action\":[\"download\",\"select\"],\"transcript-message\":[\"\",\"textarea\"]},\"multi-input\"],\"grammarly\":[{\"grammarly-active\":[false,\"checkbox\"],\"grammarly-client-id\":[\"\",\"text\"]},\"multi-input\"],\"user-table-extra-columns\":[[],\"repeater\"],\"saved-replies\":[[],\"repeater\"],\"custom-js\":[\"\",\"text\"],\"custom-css\":[\"\",\"text\"],\"manifest-url\":[\"\",\"text\"],\"chat-sound\":[\"n\",\"select\"],\"chat-sound-admin\":[\"n\",\"select\"],\"sound-settings\":[{\"sound-settings-volume\":[\"\",\"select\"],\"sound-settings-volume-admin\":[\"\",\"select\"],\"sound-settings-repeat\":[\"\",\"select\"],\"sound-settings-repeat-admin\":[\"\",\"select\"],\"sound-settings-file-admin\":[\"\",\"text\"]},\"multi-input\"],\"notify-agent-email\":[false,\"checkbox\"],\"notify-user-email\":[false,\"checkbox\"],\"online-users-notification\":[false,\"checkbox\"],\"desktop-notifications\":[\"\",\"select\"],\"flash-notifications\":[\"\",\"select\"],\"push-notifications\":[{\"push-notifications-active\":[false,\"checkbox\"],\"push-notifications-users-active\":[false,\"checkbox\"],\"push-notifications-id\":[\"\",\"text\"],\"push-notifications-key\":[\"\",\"password\"],\"push-notifications-sw-url\":[\"\",\"text\"]},\"multi-input\"],\"sms\":[{\"sms-active-agents\":[false,\"checkbox\"],\"sms-active-users\":[false,\"checkbox\"],\"sms-user\":[\"\",\"text\"],\"sms-token\":[\"\",\"password\"],\"sms-sender\":[\"\",\"text\"],\"sms-message-agent\":[\"\",\"textarea\"],\"sms-message-user\":[\"\",\"textarea\"]},\"multi-input\"],\"email-server\":[{\"email-server-host\":[\"\",\"text\"],\"email-server-user\":[\"\",\"text\"],\"email-server-password\":[\"\",\"password\"],\"email-server-port\":[\"\",\"number\"],\"email-server-from\":[\"\",\"text\"],\"email-sender-name\":[\"\",\"text\"]},\"multi-input\"],\"email-piping\":[{\"email-piping-active\":[false,\"checkbox\"],\"email-piping-host\":[\"\",\"text\"],\"email-piping-user\":[\"\",\"text\"],\"email-piping-password\":[\"\",\"password\"],\"email-piping-port\":[\"110\",\"select\"],\"email-piping-delimiter\":[false,\"checkbox\"],\"email-piping-all\":[false,\"checkbox\"],\"email-piping-disable-cron\":[false,\"checkbox\"],\"email-piping-department\":[\"\",\"number\"]},\"multi-input\"],\"notifications-icon\":[\"\",\"upload-image\"],\"visitors-registration\":[false,\"checkbox\"],\"registration-required\":[\"\",\"select\"],\"registration-timetable\":[false,\"checkbox\"],\"registration-offline\":[false,\"checkbox\"],\"registration-link\":[\"\",\"text\"],\"registration\":[{\"registration-title\":[\"\",\"text\"],\"registration-msg\":[\"\",\"textarea\"],\"registration-success\":[\"\",\"textarea\"],\"registration-btn-text\":[\"\",\"text\"],\"registration-terms-link\":[\"\",\"text\"],\"registration-privacy-link\":[\"\",\"text\"]},\"multi-input\"],\"login\":[{\"login-title\":[\"\",\"text\"],\"login-msg\":[\"\",\"textarea\"]},\"multi-input\"],\"registration-profile-img\":[false,\"checkbox\"],\"registration-last-name\":[false,\"checkbox\"],\"registration-password\":[false,\"checkbox\"],\"registration-email-disable\":[false,\"checkbox\"],\"registration-fields\":[{\"reg-phone\":[false,\"checkbox\"],\"reg-city\":[false,\"checkbox\"],\"reg-country\":[false,\"checkbox\"],\"reg-language\":[false,\"checkbox\"],\"reg-birthday\":[false,\"checkbox\"],\"reg-company\":[false,\"checkbox\"],\"reg-facebook\":[false,\"checkbox\"],\"reg-twitter\":[false,\"checkbox\"],\"reg-linkedin\":[false,\"checkbox\"],\"reg-website\":[false,\"checkbox\"]},\"multi-input\"],\"registration-phone-required\":[false,\"checkbox\"],\"phone-code\":[\"\",\"select\"],\"registration-user-details-success\":[false,\"checkbox\"],\"user-additional-fields\":[[],\"repeater\"],\"registration-extra\":[false,\"checkbox\"],\"visitor-prefix\":[\"\",\"text\"],\"visitor-default-name\":[\"\",\"text\"],\"visitor-autodata\":[false,\"checkbox\"],\"duplicate-emails\":[false,\"checkbox\"],\"bot-name\":[\"\",\"text\"],\"bot-image\":[\"\",\"upload-image\"],\"color-1\":[\"\",\"color\"],\"color-2\":[\"\",\"color\"],\"color-3\":[\"\",\"color\"],\"chat-position\":[\"right\",\"select\"],\"rtl\":[false,\"checkbox\"],\"display-users-thumb\":[false,\"checkbox\"],\"hide-agents-thumb\":[false,\"checkbox\"],\"sender-name\":[\"\",\"select\"],\"header-headline\":[\"\",\"text\"],\"header-msg\":[\"\",\"text\"],\"header-type\":[\"agents\",\"select\"],\"header-name\":[false,\"checkbox\"],\"brand-img\":[\"\",\"upload-image\"],\"header-img\":[\"\",\"upload-image\"],\"chat-icon\":[\"\",\"upload-image\"],\"chat-sb-icons\":[null,\"select-images\"],\"chat-background\":[null,\"select-images\"],\"chat-button-offset\":[{\"chat-button-offset-top\":[\"\",\"number\"],\"chat-button-offset-bottom\":[\"\",\"number\"],\"chat-button-offset-right\":[\"\",\"number\"],\"chat-button-offset-left\":[\"\",\"number\"],\"chat-button-offset-mobile\":[\"all\",\"select\"]},\"multi-input\"],\"envato-purchase-code\":[\"nguyenhungg127\",\"text\"],\"auto-updates\":[false,\"checkbox\"],\"webhooks\":[{\"webhooks-active\":[false,\"checkbox\"],\"webhooks-url\":[\"\",\"text\"],\"webhooks-key\":[\"\",\"password\"],\"webhooks-allowed\":[\"\",\"text\"]},\"multi-input\"],\"pusher\":[{\"pusher-active\":[false,\"checkbox\"],\"pusher-id\":[\"\",\"text\"],\"pusher-key\":[\"\",\"text\"],\"pusher-secret\":[\"\",\"password\"],\"pusher-cluster\":[\"\",\"text\"]},\"multi-input\"],\"newsletter\":[{\"newsletter-active\":[false,\"checkbox\"],\"newsletter-service\":[\"mailchimp\",\"select\"],\"newsletter-list-id\":[\"\",\"text\"],\"newsletter-key\":[\"\",\"password\"]},\"multi-input\"],\"timetable\":[{\"monday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"tuesday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"wednesday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"thursday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"friday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"saturday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]],\"sunday\":[[\"\",\"\"],[\"\",\"\"],[\"\",\"\"],[\"\",\"\"]]},\"timetable\"],\"timetable-utc\":[\"\",\"number\"],\"departments\":[[],\"repeater\"],\"departments-settings\":[{\"departments-dashboard\":[false,\"checkbox\"],\"departments-images\":[false,\"checkbox\"],\"departments-label\":[\"\",\"text\"],\"departments-single-label\":[\"\",\"text\"],\"departments-title\":[\"\",\"text\"]},\"multi-input\"],\"queue\":[{\"queue-active\":[false,\"checkbox\"],\"queue-concurrent-chats\":[\"\",\"number\"],\"queue-response-time\":[\"\",\"number\"],\"queue-sound\":[false,\"checkbox\"],\"queue-message\":[\"\",\"textarea\"],\"queue-message-success\":[\"\",\"textarea\"]},\"multi-input\"],\"routing\":[false,\"checkbox\"],\"agent-hide-conversations\":[{\"agent-hide-conversations-active\":[false,\"checkbox\"],\"agent-hide-conversations-menu\":[false,\"checkbox\"],\"agent-hide-conversations-routing\":[false,\"checkbox\"],\"agent-hide-conversations-view\":[false,\"checkbox\"]},\"multi-input\"],\"cookie-domain\":[\"\",\"text\"],\"performance\":[{\"performance-phone-codes\":[false,\"checkbox\"],\"performance-minify\":[false,\"checkbox\"],\"performance-reports\":[false,\"checkbox\"]},\"multi-input\"],\"amazon-s3\":[{\"amazon-s3-active\":[false,\"checkbox\"],\"amazon-s3-access-key\":[\"\",\"password\"],\"amazon-s3-secret-access-key\":[\"\",\"password\"],\"amazon-s3-bucket-name\":[\"\",\"text\"],\"amazon-s3-region\":[\"\",\"text\"]},\"multi-input\"],\"logs\":[false,\"checkbox\"]}')
;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `chatbot`.`sb_users` WRITE;
DELETE FROM `chatbot`.`sb_users`;
INSERT INTO `chatbot`.`sb_users` (`id`,`first_name`,`last_name`,`password`,`email`,`profile_image`,`user_type`,`creation_time`,`token`,`last_activity`,`typing`,`department`) VALUES (1, 'Hung', 'Nguyen', '$2y$10$XKAP2GssV8YUoCV1s9UKZeEFovwSxMcRBu8IJTel3rPls5puOVL/S', 'nguyenhungg127@gmail.com', 'http://localhost:8088/supportboard/uploads/21-06-23/7473713.png', 'admin', '2023-06-21 02:55:18', '1a72a77dbc52872bbec6c20d85f3c9bd4612c166', '2023-06-21 03:13:44', -1, NULL),(2, 'Bot', '', '', NULL, 'http://localhost:8088/supportboard/media/user.svg', 'bot', '2023-06-21 02:55:24', 'e8c5459219c29032e077fc5b588fa25d75ad70c9', '2023-06-21 02:55:24', -1, NULL)
;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `chatbot`.`sb_users_data` WRITE;
DELETE FROM `chatbot`.`sb_users_data`;
INSERT INTO `chatbot`.`sb_users_data` (`id`,`user_id`,`slug`,`name`,`value`) VALUES (1, 1, 'browser', 'Browser', 'Chrome'),(3, 1, 'os', 'OS', 'Windows 10'),(4, 1, 'current_url', 'Current URL', 'http://localhost:8088/supportboard/admin.php?area=reports')
;
UNLOCK TABLES;
COMMIT;
