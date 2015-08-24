<?php
// This file is generated by scripts/gen-autoload.php, do not adjust manually
// @codingStandardsIgnoreFile
global $wgAutoloadClasses;

$wgAutoloadClasses += array(
	'ApiEchoMarkRead' => __DIR__ . '/includes/api/ApiEchoMarkRead.php',
	'ApiEchoMarkReadTest' => __DIR__ . '/tests/phpunit/api/ApiEchoMarkReadTest.php',
	'ApiEchoMarkSeen' => __DIR__ . '/includes/api/ApiEchoMarkSeen.php',
	'ApiEchoNotifications' => __DIR__ . '/includes/api/ApiEchoNotifications.php',
	'ApiEchoNotificationsTest' => __DIR__ . '/tests/phpunit/api/ApiEchoNotificationsTest.php',
	'BatchRowUpdateTest' => __DIR__ . '/tests/phpunit/BatchRowUpdateTest.php',
	'CallbackFilterIterator' => __DIR__ . '/includes/iterator/CallbackFilterIterator.php',
	'ContainmentSetTest' => __DIR__ . '/tests/phpunit/ContainmentSetTest.php',
	'EchoAbstractEntity' => __DIR__ . '/includes/model/AbstractEntity.php',
	'EchoAbstractMapper' => __DIR__ . '/includes/mapper/AbstractMapper.php',
	'EchoAbstractMapperStub' => __DIR__ . '/tests/phpunit/mapper/AbstractMapperTest.php',
	'EchoAbstractMapperTest' => __DIR__ . '/tests/phpunit/mapper/AbstractMapperTest.php',
	'EchoArrayList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoAttributeManager' => __DIR__ . '/includes/AttributeManager.php',
	'EchoAttributeManagerTest' => __DIR__ . '/tests/phpunit/AttributeManagerTest.php',
	'EchoBasicFormatter' => __DIR__ . '/includes/formatters/BasicFormatter.php',
	'EchoBatchRowIterator' => __DIR__ . '/includes/BatchRowUpdate.php',
	'EchoBatchRowUpdate' => __DIR__ . '/includes/BatchRowUpdate.php',
	'EchoBatchRowWriter' => __DIR__ . '/includes/BatchRowUpdate.php',
	'EchoCachedList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoCallbackIterator' => __DIR__ . '/includes/iterator/CallbackIterator.php',
	'EchoCatchableFatalErrorException' => __DIR__ . '/includes/exception/CatchableFatalErrorException.php',
	'EchoCommentFormatter' => __DIR__ . '/includes/formatters/CommentFormatter.php',
	'EchoContainmentList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoContainmentSet' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoDataOutputFormatter' => __DIR__ . '/includes/DataOutputFormatter.php',
	'EchoDeferredMarkAsReadUpdate' => __DIR__ . '/includes/DeferredMarkAsReadUpdate.php',
	'EchoDiffGroup' => __DIR__ . '/includes/DiffParser.php',
	'EchoDiffParser' => __DIR__ . '/includes/DiffParser.php',
	'EchoDiffParserTest' => __DIR__ . '/tests/phpunit/DiffParserTest.php',
	'EchoDiscussionParser' => __DIR__ . '/includes/DiscussionParser.php',
	'EchoDiscussionParserTest' => __DIR__ . '/tests/phpunit/DiscussionParserTest.php',
	'EchoEditFormatter' => __DIR__ . '/includes/formatters/EditFormatter.php',
	'EchoEditUserTalkFormatter' => __DIR__ . '/includes/formatters/EditUserTalkFormatter.php',
	'EchoEmailDecorator' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoEmailDigest' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoEmailFormatter' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoEmailFormatterTest' => __DIR__ . '/tests/phpunit/EmailFormatterTest.php',
	'EchoEmailMode' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoEmailSingle' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoEvent' => __DIR__ . '/includes/model/Event.php',
	'EchoEventMapper' => __DIR__ . '/includes/mapper/EventMapper.php',
	'EchoEventMapperTest' => __DIR__ . '/tests/phpunit/mapper/EventMapperTest.php',
	'EchoExecuteFirstArgumentStub' => __DIR__ . '/tests/phpunit/mapper/NotificationMapperTest.php',
	'EchoFilteredSequentialIterator' => __DIR__ . '/includes/iterator/FilteredSequentialIterator.php',
	'EchoHTMLEmailDecorator' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoHTMLEmailFormatter' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoHooks' => __DIR__ . '/Hooks.php',
	'EchoIteratorDecorator' => __DIR__ . '/includes/iterator/IteratorDecorator.php',
	'EchoLocalCache' => __DIR__ . '/includes/cache/LocalCache.php',
	'EchoMentionFormatter' => __DIR__ . '/includes/formatters/MentionFormatter.php',
	'EchoMultipleIterator' => __DIR__ . '/includes/iterator/MultipleIterator.php',
	'EchoNotRecursiveIterator' => __DIR__ . '/includes/iterator/NotRecursiveIterator.php',
	'EchoNotification' => __DIR__ . '/includes/model/Notification.php',
	'EchoNotificationController' => __DIR__ . '/includes/controller/NotificationController.php',
	'EchoNotificationDeleteJob' => __DIR__ . '/includes/jobs/NotificationDeleteJob.php',
	'EchoNotificationFormatter' => __DIR__ . '/includes/formatters/NotificationFormatter.php',
	'EchoNotificationFormatterTest' => __DIR__ . '/tests/phpunit/formatters/NotificationFormatterTest.php',
	'EchoNotificationJob' => __DIR__ . '/includes/jobs/NotificationJob.php',
	'EchoNotificationMapper' => __DIR__ . '/includes/mapper/NotificationMapper.php',
	'EchoNotificationMapperTest' => __DIR__ . '/tests/phpunit/mapper/NotificationMapperTest.php',
	'EchoNotificationTest' => __DIR__ . '/tests/phpunit/model/NotificationTest.php',
	'EchoNotifier' => __DIR__ . '/Notifier.php',
	'EchoOnWikiList' => __DIR__ . '/includes/ContainmentSet.php',
	'EchoPageLinkFormatter' => __DIR__ . '/includes/formatters/PageLinkFormatter.php',
	'EchoRevisionLocalCache' => __DIR__ . '/includes/cache/RevisionLocalCache.php',
	'EchoRowUpdateGenerator' => __DIR__ . '/includes/BatchRowUpdate.php',
	'EchoSeenTime' => __DIR__ . '/includes/SeenTime.php',
	'EchoSuppressionRowUpdateGenerator' => __DIR__ . '/includes/schemaUpdate.php',
	'EchoTalkPageFunctionalTest' => __DIR__ . '/tests/phpunit/TalkPageFunctionalTest.php',
	'EchoTargetPage' => __DIR__ . '/includes/model/TargetPage.php',
	'EchoTargetPageMapper' => __DIR__ . '/includes/mapper/TargetPageMapper.php',
	'EchoTargetPageMapperTest' => __DIR__ . '/tests/phpunit/mapper/TargetPageMapperTest.php',
	'EchoTargetPageTest' => __DIR__ . '/tests/phpunit/model/TargetPageTest.php',
	'EchoTextEmailDecorator' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoTextEmailFormatter' => __DIR__ . '/includes/EmailFormatter.php',
	'EchoTitleLocalCache' => __DIR__ . '/includes/cache/TitleLocalCache.php',
	'EchoTitleLocalCacheTest' => __DIR__ . '/tests/phpunit/cache/TitleLocalCacheTest.php',
	'EchoUserLocator' => __DIR__ . '/includes/UserLocator.php',
	'EchoUserLocatorTest' => __DIR__ . '/tests/phpunit/UserLocatorTest.php',
	'EchoUserNotificationGateway' => __DIR__ . '/includes/gateway/UserNotificationGateway.php',
	'EchoUserNotificationGatewayTest' => __DIR__ . '/tests/phpunit/gateway/UserNotificationGatewayTest.php',
	'EchoUserRightsFormatter' => __DIR__ . '/includes/formatters/UserRightsFormatter.php',
	'FilteredSequentialIteratorTest' => __DIR__ . '/tests/phpunit/iterator/FilteredSequentialIteratorTest.php',
	'MWEchoDbFactory' => __DIR__ . '/includes/EchoDbFactory.php',
	'MWEchoDbFactoryTest' => __DIR__ . '/tests/phpunit/EchoDbFactoryTest.php',
	'MWEchoEmailBatch' => __DIR__ . '/includes/EmailBatch.php',
	'MWEchoEmailBundler' => __DIR__ . '/includes/EmailBundler.php',
	'MWEchoEventLogging' => __DIR__ . '/includes/EventLogging.php',
	'MWEchoNotifUser' => __DIR__ . '/includes/NotifUser.php',
	'MWEchoNotifUserTest' => __DIR__ . '/tests/phpunit/NotifUserTest.php',
	'MWEchoNotificationEmailBundleJob' => __DIR__ . '/includes/jobs/NotificationEmailBundleJob.php',
	'NotificationControllerTest' => __DIR__ . '/tests/phpunit/controller/NotificationControllerTest.php',
	'NotificationsTest' => __DIR__ . '/tests/NotificationsTest.php',
	'SpecialNotifications' => __DIR__ . '/includes/special/SpecialNotifications.php',
	'SuppressionMaintenanceTest' => __DIR__ . '/tests/phpunit/maintenance/SupressionMaintenanceTest.php',
);
