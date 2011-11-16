<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-16 08:07:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ~hawk/crud-kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-16 08:07:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ~hawk/crud-kohana was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 08:10:25 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:10:25 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:10:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:10:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:10:59 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:10:59 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:10:59 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:10:59 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:10:59 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:10:59 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:11:00 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:11:00 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:11:00 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
2011-11-16 08:11:00 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH/libraries/Crud.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:11:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:11:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crud/css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crud/css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crud/css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: crud/css/images/favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:14:44 --- ERROR: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/libraries/Crud.php [ 383 ]
2011-11-16 08:14:44 --- STRACE: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/libraries/Crud.php [ 383 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/home/hawk/publ...', 383, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(383): mkdir('/home/hawk/publ...', 511)
#2 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(68): Crud->create_view()
#3 [internal function]: Controller_Crud->action_generate()
#4 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-16 08:15:47 --- ERROR: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/libraries/Crud.php [ 383 ]
2011-11-16 08:15:47 --- STRACE: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/libraries/Crud.php [ 383 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/home/hawk/publ...', 383, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(383): mkdir('/home/hawk/publ...', 511)
#2 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(68): Crud->create_view()
#3 [internal function]: Controller_Crud->action_generate()
#4 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-16 08:18:20 --- ERROR: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/libraries/Crud.php [ 383 ]
2011-11-16 08:18:20 --- STRACE: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/libraries/Crud.php [ 383 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/home/hawk/publ...', 383, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(383): mkdir('/home/hawk/publ...', 511, true)
#2 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(68): Crud->create_view()
#3 [internal function]: Controller_Crud->action_generate()
#4 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#8 {main}
2011-11-16 08:18:40 --- ERROR: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
2011-11-16 08:18:40 --- STRACE: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/home/haw...', '/home/hawk/publ...', 61, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(61): fopen('/home/hawk/publ...', 'w')
#2 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(274): Crud->create_file('?<?php defined(...', '/classes/contro...')
#3 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(69): Crud->create_controller()
#4 [internal function]: Controller_Crud->action_generate()
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-16 08:20:37 --- ERROR: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
2011-11-16 08:20:37 --- STRACE: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/home/haw...', '/home/hawk/publ...', 61, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(61): fopen('/home/hawk/publ...', 'w+')
#2 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(274): Crud->create_file('?<?php defined(...', '/classes/contro...')
#3 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(69): Crud->create_controller()
#4 [internal function]: Controller_Crud->action_generate()
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-16 08:21:16 --- ERROR: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
2011-11-16 08:21:16 --- STRACE: ErrorException [ 2 ]: fopen(/home/hawk/public_html/crud-kohana/application/classes/controller/admin/member.php): failed to open stream: No such file or directory ~ APPPATH/libraries/Crud.php [ 61 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/home/haw...', '/home/hawk/publ...', 61, Array)
#1 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(61): fopen('/home/hawk/publ...', 'a')
#2 /home/hawk/public_html/crud-kohana/application/libraries/Crud.php(274): Crud->create_file('?<?php defined(...', '/classes/contro...')
#3 /home/hawk/public_html/crud-kohana/application/classes/controller/crud.php(69): Crud->create_controller()
#4 [internal function]: Controller_Crud->action_generate()
#5 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Crud))
#6 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#9 {main}
2011-11-16 08:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:24:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:24:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-11-16 08:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: index.php/admin/member ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-16 08:25:30 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
2011-11-16 08:25:30 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:25:32 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
2011-11-16 08:25:32 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:27:18 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Home' not found ~ APPPATH/classes/controller/admin/home.php [ 4 ]
2011-11-16 08:27:18 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Home' not found ~ APPPATH/classes/controller/admin/home.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:28:20 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 17 ]
2011-11-16 08:28:20 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:30:14 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 17 ]
2011-11-16 08:30:14 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:35:28 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 47 ]
2011-11-16 08:35:28 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:35:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
2011-11-16 08:35:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
--
#0 /home/hawk/public_html/crud-kohana/application/views/admin/member/index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/hawk/publ...', 33, Array)
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(61): include('/home/hawk/publ...')
#2 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hawk/publ...', Array)
#3 /home/hawk/public_html/crud-kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/hawk/public_html/crud-kohana/application/classes/controller/home.php(46): Kohana_Controller_Template->after()
#5 /home/hawk/public_html/crud-kohana/application/classes/controller/admin/home.php(48): Controller_Home->after()
#6 [internal function]: Controller_Admin_Home->after()
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Member))
#8 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 08:36:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
2011-11-16 08:36:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
--
#0 /home/hawk/public_html/crud-kohana/application/views/admin/member/index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/hawk/publ...', 33, Array)
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(61): include('/home/hawk/publ...')
#2 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hawk/publ...', Array)
#3 /home/hawk/public_html/crud-kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/hawk/public_html/crud-kohana/application/classes/controller/home.php(46): Kohana_Controller_Template->after()
#5 /home/hawk/public_html/crud-kohana/application/classes/controller/admin/home.php(48): Controller_Home->after()
#6 [internal function]: Controller_Admin_Home->after()
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Member))
#8 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 08:36:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
2011-11-16 08:36:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
--
#0 /home/hawk/public_html/crud-kohana/application/views/admin/member/index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/hawk/publ...', 33, Array)
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(61): include('/home/hawk/publ...')
#2 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hawk/publ...', Array)
#3 /home/hawk/public_html/crud-kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/hawk/public_html/crud-kohana/application/classes/controller/home.php(46): Kohana_Controller_Template->after()
#5 /home/hawk/public_html/crud-kohana/application/classes/controller/admin/home.php(48): Controller_Home->after()
#6 [internal function]: Controller_Admin_Home->after()
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Member))
#8 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 08:36:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
2011-11-16 08:36:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: current_user ~ APPPATH/views/admin/member/index.php [ 33 ]
--
#0 /home/hawk/public_html/crud-kohana/application/views/admin/member/index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/hawk/publ...', 33, Array)
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(61): include('/home/hawk/publ...')
#2 /home/hawk/public_html/crud-kohana/system/classes/kohana/view.php(343): Kohana_View::capture('/home/hawk/publ...', Array)
#3 /home/hawk/public_html/crud-kohana/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /home/hawk/public_html/crud-kohana/application/classes/controller/home.php(46): Kohana_Controller_Template->after()
#5 /home/hawk/public_html/crud-kohana/application/classes/controller/admin/home.php(48): Controller_Home->after()
#6 [internal function]: Controller_Admin_Home->after()
#7 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Member))
#8 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#11 {main}
2011-11-16 08:39:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-16 08:39:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 08:47:09 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
2011-11-16 08:47:09 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Admin_Home' not found ~ APPPATH/classes/controller/admin/member.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-16 08:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-16 08:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 08:50:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-11-16 08:50:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/member was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /home/hawk/public_html/crud-kohana/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /home/hawk/public_html/crud-kohana/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /home/hawk/public_html/crud-kohana/index.php(109): Kohana_Request->execute()
#3 {main}
2011-11-16 08:50:10 --- ERROR: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 40 ]
2011-11-16 08:50:10 --- STRACE: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH/classes/controller/admin/home.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}