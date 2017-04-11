<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    2 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    3 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    4 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    6 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    7 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    8 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    9 => 'Topxia\\Service\\Course\\Event\\ClassroomCourseExpiryDateEventSubscriber',
    10 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    11 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    12 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    13 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    14 => 'Topxia\\Service\\User\\Event\\VipMemberEventSubscriber',
    15 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    16 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    17 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    18 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    19 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    20 => 'Topxia\\Service\\Content\\Event\\ContentEventSubscriber',
    21 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    22 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
    23 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    24 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    25 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
  ),
);