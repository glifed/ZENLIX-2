<?php
function lang_en($phrase){
    static $lang = array(
	    
	    
'cron_navbar' => 'Planner',
'cron_title' => 'Task Scheduler',
'cron_view' => 'View information about the task',
'cron_period' => 'Frequency',
'cron_day' => 'Day',
'cron_week' => 'Week',
'cron_month' => 'Month',
'cron_tab' => 'Schedule',
'cron_do_every' => 'Perform each',
'cron_do_day' => 'day',
'cron_1' => 'Monday',
'cron_2' => 'Tuesday',
'cron_3' => 'Wednesday',
'cron_4' => 'Thursday',
'cron_5' => 'Friday',
'cron_6' => 'Saturday',
'cron_7' => 'Sunday',
'cron_do_week' => 'weekday',
'cron_do_month' => 'of each month',
'cron_ta' => 'Time',
'cron_active' => 'Activate',
'cron_del' => 'Delete the task',
'cron_t_create' => 'Create a task',
'cron_add' => 'Add to Planner',
'cron_info' => 'In this section, you can create a task that will be performed on the selected schedule.',
'cron_title_list' => 'Problems',





    
'mail_msg_ticket_refer'=>'TICKED WAS REDIRECTED',
'mail_msg_ticket_refer_ext'=>'You received this message because the ticket was redirected by the user',
'mail_msg_ticket_to_ext'=>'to',
'mail_msg_ticket_comment'=>'TICKED WAS COMMENTED',
'mail_msg_ticket_comment_ext'=>'You received this message because the ticket was commented by the user',
'mail_msg_ticket_lock'=>'TICKED WAS LOCKED',
'mail_msg_ticket_lock_ext'=>'You received this message because the ticket was commented by the user',
'mail_msg_ticket_unlock'=>'TICKED WAS LOCKED',
'mail_msg_ticket_unlock_ext'=>'You received this message because the ticket was commented by the user',
'mail_msg_ticket_ok'=>'TICKED WAS DONE',
'mail_msg_ticket_ok_ext'=>'You received this message because the ticket was commented by the user',
'mail_msg_ticket_no_ok'=>'TICKED WAS NOT DONE',
'mail_msg_ticket_no_ok_ext'=>'You received this message because the ticket was commented by the user',
'REG_msg'=>'Registration success! You can log in after administrator review.',
'REG_new'=>'Create new account',

'REG_button'=>'Register',
'REG_already'=>'I already have account',


'EXT_stats_refer'=>'Redirected',
'EXT_stats_lock'=>'Locked tickets',
'EXT_stats_unlock'=>'Unlocked',
'EXT_stats_no_ok'=>'Not perform',
'EXT_stats_main'=>'Information about tickets',
'EXT_stats_main_todo'=>'To display statistics about user, specify the user and the period.',

'EXT_stat_title'=>'Register of user actions with ',
'CONF_timezone'=>'Time zone',
'CONF_2noty_info'=>'For e-mail notifications, add a cron string ',
'UPGRADE_title'=>'system Update',
'UPGRADE_title_ext'=>'update Wizard version',
'UPGRADE_version_already'=>'You Have the most recent version!',
'UPGRADE_dbu'=>'backup database',
'UPGRADE_error'=>'the Update was failed. Remove them and try again to update. Or contact support.',
'UPGRADE_success'=>'the Update was successful. You now have the latest version',
'UPGRADE_new'=>'new version is Available',
'UPGRADE_list'=>'List',
'UPGRADE_files'=>'Files which are subject to change',
'UPGRADE_att'=>'make Sure that all of the above files have permissions:',
'UPGRADE_now'=>'Update now!',
'EXT_do_write_message'=>'Compose message', 
'EXT_no_unread_msg'=>'No unread messages',
'EXT_unread_msg1'=>'You',
'EXT_unread_msg2'=>'new messages',
'EXT_all_msgs'=>'All messages',
'MESSAGES_navbar'=>'Messages',

'MESSAGES_us'=>'user Messages',
'MESSAGES_us_ext'=>'Correspondence and personal messages',
'MESSAGES_main'=>'Main chat',
'MESSAGES_fio'=>'user\'s name',
'MESSAGES_with'=>'Correspondence',
'MESSAGES_sel_text'=>'Enter text',







'EXT_for_clients'=>'For client',
'EXT_for_clients_ext'=>'will be available for clients',
'EXT_hello'=>'Hello',
'EXT_fill_msg'=>'Leave a message',
'EXT_client_add_after'=>'The client will be added after moderation by the administrator.',
'EXT_press_tofind'=>'Click to search',
'EXT_news_view_t'=>'View the ticket',
'EXT_ldap_ip'=>'IP address of the LDAP server',
'EXT_ldap_domain'=>'LDAP domain for accounts',
'EXT_pb_noti'=>'PushBullet notifications',
'EXT_pb_api_key'=>'API key',

'EXT_perf_must_ldap'=>'LDAP server must be the same account with the same login',
'EXT_client'=>'Client',
'EXT_client_what'=>'Will see only private tickets.',
'EXT_perf_msg_t'=>' Header of message',
'EXT_t_created'=>'Created tickets',
'EXT_t_locked'=>'In processing',
'EXT_t_oked'=>'Performed',

'EXT_attach_file'=>'Attach files',


'EXT_graph'=>'Reports',
'EXT_graph_user'=>'Report user',
'EXT_graph_user_ext'=>'For a certain period',
'EXT_graph_user_ext2'=>'this section contains the reports for the user for a certain period.',


'EXT_more_info'=>'Go to',
'NAVBAR_news'=>'News',
'STATS_TITLE_ext'=>'Personal schedule',
'VIEWUSER_title'=>'Information about user',
'VIEWUSER_title_ext'=>'Profile',
'MAIN_attention'=>'Attention',

'CLIENTS_name_ext'=>'Search and Editing',
'STATS_TITLE_short'=>'Statistics',

'ticket_login_error'=>'This login has already been',

'NEWS_action_lock'=>'Locked ticket',
'NEWS_action_unlock'=>'Unlocked ticket',
'NEWS_action_ok'=>'performed ticket',
'NEWS_action_no_ok'=>'marked ticket',
'NEWS_action_no_ok2'=>'as not performing',
'NEWS_action_refer'=>'redirected ticket',
'NEWS_action_create'=>'created a new ticket with the code',
'NEWS_action_comment'=>'commented on ticket',
'NEWS_action_ticket_arch'=>'remove to the archive',

'NEWS_text_ticket'=>'The text of the tickets',
'NEWS_text_comment'=>'Comment',


'DASHBOARD_messages'=>'Important announcements',
'DASHBOARD_title_ext'=>'Basic information',

'NEWS_today'=>'today',

'PROFILE_select_image'=>'Select image',
'PROFILE_del_image'=>'Delete',
'NAVBAR_profile_ext'=>'View and edit information',

'ALLSTATS_main'=>'General statistics',    
'ALLSTATS_help'=>'This section contains the statistics of all departments and users that you have permissions.',
'ALLSTATS_unit'=>'Information about tickets of your departments',
'ALLSTATS_unit_free'=>'Free tickets',
'ALLSTATS_unit_lock'=>'Occupied tickets',
'ALLSTATS_unit_ok'=>'Completed tickets',
'ALLSTATS_user'=>'Current information about tickets of your departments’ users',
'ALLSTATS_user_fio'=>'Full Name',
'ALLSTATS_user_free'=>'Free',
'ALLSTATS_user_lock'=>'Unlocked',
'ALLSTATS_user_ok'=>'Performed',
'ALLSTATS_user_out_all'=>'Creating (total)',
'ALLSTATS_user_out_all_not'=>'Creating (not performed)',
    
'NAVBAR_files'=>'Files of tickets',   
'T_from'=>'from',
'FILES_title'=>'Files of tickets',
'FILES_off' =>'Currently uploading files to the tickets is disabled. To activate go to <a href="./config">сюда</a> and activate the upload files to the ticket.',
'FILES_info'=>'In this section you can view all attached files to the tickets and also delete them.',
'FILES_name'=>'Filename',
'FILES_ticket'=>'Ticket',
'FILES_size'=>'Size',
'FILES_del'=>'Delete',
'FILES_down'=>'Download',
'CONF_file_types'=>'Acceptable types of files ',
'CONF_file_size'=>'Maximum size of file',    
 'DEPS_off'=>'Currently the fixed list of tickets is disabled. To activate go to <a href="./config">сюда</a> and select the subjects of tickets "fixed list" .',   
 'CONF_info'=>'This section contains the basic system settings.',
 'CONF_mail'=>'E-mail of administrator',
 'CONF_title'=>'System settings',   
 'CONF_mains'=>'Common settings',   
 'CONF_name'=>'Name of organization',     
 'CONF_title_org'=>'Header of system',     
 'CONF_url'=>'URL system',     
 'CONF_2arch'=>'In how many days the ticket will remove to the archive',     
 'CONF_2arch_info'=>'For automatic move of tickets to the archive, add to cron scheduler this string:',     

 'CONF_subj'=>'Subjects of tickets',     
 'CONF_fix_list'=>'Fixed list',     
 'CONF_subj_text'=>'Input field',     
 'CONF_subj_info'=>'When you create tickets, you can choose the fixed set or the text field that fill in the name of ticket.',     
 'CONF_fup'=>'Upload files to the ticket',     
 'CONF_true'=>'Enable',     
 'CONF_fup_info'=>'Ability to attach a file to a ticket.',     
 'CONF_act_edit'=>'Edit',     
 
 'CONF_mail_name'=>'Email settings',     
 'CONF_mail_status'=>'Email notifications',     
 'CONF_mail_host'=>'Address SMTP-server',     
 'CONF_mail_port'=>'SMTP-server port',     
 'CONF_mail_auth'=>'Authorization',     
 'CONF_mail_type'=>'Type of authorization',     
 'CONF_mail_login'=>'Login',     
 'CONF_mail_pass'=>'Password',     
 'CONF_mail_from'=>'Sender',     
 'CONF_mail_debug'=>'Debugging mode',      
 'CONF_mail_type'=>'Type',
  
 'HELPER_info'=>'This section may contain instructions and documentation for solutions to common problems.',
 'NAVBAR_conf'=>'System settings',  
 'DASHBOARD_TITLE'=>'Dashboard',
 'DASHBOARD_ticket_stats'=>'Statistics tickets',
 'DASHBOARD_ticket_in_desc'=>'Incoming free ticket that you can take',
 'DASHBOARD_ticket_in'=>'Incoming tickets',
 'DASHBOARD_ticket_lock'=>'locked by me',
 'DASHBOARD_ticket_lock_desc'=>'Tickets with which you work',
 'DASHBOARD_ticket_out'=>'Outgoing tickets',
 'DASHBOARD_ticket_out_desc'=>'Tickets are created by you and remain unfulfilled',
 'DASHBOARD_last_news'=>'Recent changes',
 'DASHBOARD_last_help'=>'The last from the Knowledge Center',
 'APPROVED_info' => 'This section contains the user requests the system to change the information on the client (user).',
 'WORKERS_info' => 'This section contains information about the users (clients), you can find and send a request to change information.',
 'DASHBOARD_author'=>'Author',
 'DASHBOARD_last_in'=>'Recent incoming tickets',
 'NEW_title'=>'Creating a new ticket',
 'NEW_ok'=>'The ticket was successfully created!',
 'NEW_ok_1'=>'You can',
 'NEW_ok_2'=>'Share link',
 'NEW_ok_3'=>'on the ticket or',
 'NEW_ok_4'=>'print it',
 'NEW_from'=>'From who',
 'NEW_from_desc'=>'Full Name or login of the user who asked for help',
 'NEW_fio'=>'Full Name or login',
 'NEW_fio_desc'=>'Please fill in this field',
 'NEW_to'=>'To who',
 'NEW_to_desc'=>'Исполнитель заявки - или весь отдел , или опционально конкретного сотрудника.',
 'NEW_to_unit'=>'Department',
 'NEW_to_unit_desc'=>'Specify the destination or department employee',
 'NEW_to_user'=>'Performer',
 'NEW_prio'=>'Priority',
 'NEW_prio_low'=>'Low',
 'NEW_prio_norm'=>'Medium',
 'NEW_prio_high'=>'High',
 'NEW_prio_high_desc'=>'Will be involved in SMS-information',
 'NEW_subj'=>'Subject',
 'NEW_subj_msg'=>'Specify the subject of the ticket',
 'NEW_subj_det'=>'Header of ticket',
 'NEW_MSG'=>'Text',
 'NEW_MSG_msg'=>'Specify in detail the essence of the ticket',
 'NEW_MSG_ph'=>'The essence of the tickets',
 'NEW_MSG_ph_1'=>'If you want to supplement the message by information ',
 'NEW_button_create'=>'Create ticket',
 'NEW_button_reset'=>'Clear fields',
 'LIST_title'=>'List of tickets',
 'LIST_ok_t'=>'performed ticket',
 'LIST_lock_t_i'=>'tickets with which you are working',
 'LIST_lock_t'=>'tickets with which others are working',
 'LIST_lock_n'=>'ticket number',
 'LIST_find_ph'=>'Enter # or the subject of  the ticket, or the text of the ticket, or the text of the comment',
 'LIST_find_button'=>'Search',
 'LIST_in'=>'Incoming',
 'LIST_out'=>'Outgoing',
 'LIST_arch'=>'Archive',
 'LIST_loading'=>'Loading',

 'msg_created_new_user' => 'This will create a new user',
 'CREATE_ACC_already'=>'Your account enable.',
 'CREATE_ACC_error'=>'User with this email address can not be found.',
 'MAIN_TITLE'=>'Tickets System',
 'AUTH_USER'=>'user Authorization',
 'login'=>'Login',
 'pass'=>'Password',
 'remember_me'=>'Remember me',
 'error_auth'=>'Authorization error. <br> Check your login and password.',

'action_auth'=>'To enable',
'log_in'=>'Enter',

'NOTES_single'=>'Record...',
't_LIST_prio'=>'Priority',
't_LIST_subj'=>'Subject',
// <? = lang ('t_LIST_prio');
't_LIST_worker'=>'User',
't_LIST_create'=>'Created',
't_LIST_ago'=>'gone',
't_LIST_init'=>'Author',
't_LIST_to'=>'Performer',
't_LIST_status'=>'Status',
't_LIST_action'=>'Action',
'stats_last_time'=>'Last login: ',
't_list_a_nook'=>'mark as performed',
't_list_a_unlock'=>'unlocked',
't_list_a_lock'=>'locked',
't_list_a_ok'=>'perform',
't_list_a_all'=>'Anyone',
't_list_a_user_ok'=>'Performed',
't_list_a_date_ok'=>'Performed',
't_list_a_p_norm'=>'Medium priority',
't_list_a_p_low'=>'Low priority',
't_list_a_p_high'=>'High priority',
't_list_a_oko'=>'performed',
't_list_a_arch'=>'in the archive',
't_list_a_lock_i'=>'locked by me',
't_list_a_lock_u'=>'работает',
't_list_a_hold'=>'expectations of action',
't_list_a_ok_no'=>'Performed / not performed',

'HELP_desc'=>'Description of problem',
'HELP_do'=>'Solution',
'HELP_save'=>'Save',
'HELP_back'=>'Back',
'HELP_all'=>'All',
'HELP_create'=>'Create',
'MSG_no_records'=>'No records',
'TICKET_name'=>'Ticket',



'WORKER_TITLE'=>'User Info',
'WORKER_fio'=>'Full name',
'WORKER_login'=>'Login',
'WORKER_posada'=>'Office',
'WORKER_unit'=>'Subdivision',
'WORKER_tel'=>'Tel',
'WORKER_tel_full'=>'Phone',
'WORKER_room'=>'Cabinet',
'WORKER_mail'=>'E-mail',
'WORKER_total'=>'tickets',
'WORKER_last'=>'Last',
'WORKER_edit_info'=>'Edit information',
'WORKER_send_approve'=>'Send the change request',

'PROFILE_msg_ok'=>'Information updated successfully.',
'PROFILE_msg_error'=>'Name or e-mail are not the correct format.',
'PROFILE_msg_pass_err'=>'Old password is not correct.',
'PROFILE_msg_pass_err2'=>'New passwords do not match.',
'PROFILE_msg_pass_err3'=>'Password must be at least 4 characters.',
'PROFILE_msg_pass_ok'=>'Password successfully changed. You need <a href=\'index.php\'> go again in system </a>.',
'PROFILE_msg_te'=>'Error',
'PROFILE_priv'=>'Your powers in the system',
'PROFILE_priv_unit'=>'access to the departments',


'TABLE_name'=>'Name',
'TABLE_action'=>'Action',
'PROFILE_msg_send'=>'change Request information about the user sent. Changes will occur only after verification by the administrator.',
'PROFILE_msg_add'=>'User (client) has been successfully added',
'TICKET_msg_OK'=>'Request completed',
'TICKET_msg_OK_error'=>'you Cannot perform. Ticket had been made by the user',
'TICKET_msg_unOK'=>'Ticket not completed',
'TICKET_msg_unOK_error'=>'unable to perform',
'TICKET_msg_lock'=>'Ticket blocked',
'TICKET_msg_lock_error'=>'you Cannot block a proposal. It works ',
'TICKET_msg_unlock'=>'Ticket unlocked',
'TICKET_msg_refer'=>'Request forwarded',
'empty'=>'void',
't_list_a_top'=>'TOP 10 search results',

'TICKET_p_add_client'=>'Add client',
'TICKET_p_edit_client'=>'Edit customer',


'TICKET_status_arch'=>'ticket in the archive',
'TICKET_status_ok'=>'ticket executed by the user',
'TICKET_status_lock'=>'ticket works',
'TICKET_status_new'=>'new ticket, waiting actions',

'TICKET_action_unlock'=>'Restore',
'TICKET_action_lock'=>'Block',
'TICKET_action_ok'=>'Completed',
'TICKET_action_nook'=>'Not implemented',
'TICKET_msg_updated'=>'Ticket has been updated.',

'TICKET_t_from'=>'Author',
'TICKET_t_was_create'=>'created',
'TICKET_t_to'=>'Artist',
'TICKET_t_last_edit'=>'Edited',
'TICKET_t_worker'=>'User',
'TICKET_t_last_up'=>'Last updated',
'TICKET_t_status'=>'Status',
'TICKET_t_prio'=>'Priority',
'TICKET_t_subj'=>'Subject',
'TICKET_t_refer'=>'Redirect',
'TICKET_t_refer_to'=>'Redirects',
'TICKET_t_opt'=>'optional',
'TICKET_t_in_arch'=>'Ticket is in the archive.',
'TICKET_t_ok'=>'Request completed successfully user',
'TICKET_t_ok_1'=>'After some time, the ticket will go into the archive.',
'TICKET_t_lock'=>'currently with the ticket runs, the user',
'TICKET_t_lock_1'=>'So You cannot work with the ticket.',
'TICKET_t_lock_i'=>'now You work with the ticket. So others could work to unlock it.',
'TICKET_t_comment'=>'Comments',
'TICKET_t_history'=>'revision History',
'TICKET_t_your_comment'=>'Your comment',
'TICKET_t_det_ticket'=>'Specify in detail the essence of the proposal',
'TICKET_t_comm_ph'=>'Comment to the ticket',
'TICKET_t_send'=>'Send',
'TICKET_t_date'=>'Date',
'TICKET_t_init'=>'Author',
'TICKET_t_action'=>'Action',
'TICKET_t_desc'=>'Description',
'TICKET_t_a_refer'=>'request forwarded',
'TICKET_t_a_arch'=>'ticket moved to the archive',
'TICKET_t_a_ok'=>'ticket marked as done',
'TICKET_t_a_nook'=>'ticket marked as not executed',
'TICKET_t_a_lock'=>'ticket blocked',
'TICKET_t_a_unlock'=>'ticket unlocked',
'TICKET_t_a_create'=>'ticket was created',
'TICKET_t_a_e_text'=>'the ticket was changed message',
'TICKET_t_a_e_prio'=>'ticket was changed priority',
'TICKET_t_a_e_subj'=>'the ticket has changed the topic',
'TICKET_t_a_com'=>'ticket was commented',
'TICKET_t_no'=>'No such ticket',
'TICKET_error_msg'=>'<strong>Oops!</strong> You Have no permission to add a new customer.',

'CLIENTS_name'=>'Customers',
'CLIENTS_find'=>'Find',
'CLIENTS_find_me'=>'Use the search function to edit...',


'NAVBAR_tickets'=>'Ticket',
'NAVBAR_create_ticket'=>'Create ticket',
'NAVBAR_list_ticket'=>'Ticket List',
'NAVBAR_workers'=>'Customers',
'NAVBAR_helper'=>'Centre of knowledge',
'NAVBAR_notes'=>'Notepad',
'NAVBAR_admin'=>'Administration',
'NAVBAR_users'=>'Users',
'NAVBAR_deps'=>'Departments\' system',
'NAVBAR_approve'=>'Confirm',
'NAVBAR_all_tickets'=>'All tickets',
'NAVBAR_reports'=>'Reports',
'NAVBAR_db'=>'Reference',
'NAVBAR_posads'=>'Posts',
'NAVBAR_units'=>'Management',
'NAVBAR_subjs'=>'Themes ticket',
'NAVBAR_profile'=>'Profile',
'NAVBAR_help'=>'Help',
'NAVBAR_logout'=>'Exit',
'CONF_title_ext'=>'Configuration',

'TICKET_ACTION_refer'=>'forwarded by the user',
'TICKET_ACTION_refer_to'=>'on',
'TICKET_ACTION_ok'=>'completed',
'TICKET_ACTION_nook'=>'not implemented by the user',
'TICKET_ACTION_lock'=>'locked by user',
'TICKET_ACTION_unlock'=>'enabled',
'TICKET_ACTION_create'=>'created user',
'TICKET_ACTION_edit'=>'changed by user',
'TICKET_ACTION_comment'=>'commented on by the user',
'TICKET_ACTION_arch'=>'ticket moved to the archive',
'NOTES_title_ext'=>'Personal notes',
'ALLSTATS_main_ext'=>'departments and users',
'HELPER_title'=>'Centre of knowledge',
'HELPER_title_ext'=>'Popular questions and their solutions',
'HELPER_back'=>'ago',
'HELPER_print'=>'print',
'HELPER_pub'=>'Published',
'HELPER_date'=>'Date',
'HELPER_find'=>'Find',
'HELPER_create'=>'create new account',
'HELPER_desc'=>'description of the problems or questions...',

'USERS_title_ext'=>'Manage accounts',
'NOTES_title'=>'Personal note',
'NOTES_link'=>'Link',
'NOTES_create'=>'create new account',
'NOTES_cr'=>'Add new or select...',


'P_title'=>'Edit information',
'P_main'=>'General information',
'P_login'=>'Login',
'P_mail'=>'E-mail',
'P_mail_desc'=>'is Used only for notifications.',
'P_edit'=>'Save',
'P_passedit'=>'Change password',
'P_pass_old'=>'Old password',
'P_pass_old2'=>'old Password',
'P_pass_new'=>'New password',
'P_pass_new2'=>'new Password',
'P_pass_new_re'=>'Retype new password',
'P_pass_new_re2'=>'new Password (again)',
'P_do_edit_pass'=>'Change password',

'JS_not_found'=>'Not found...',
'JS_ticket'=>'Ticket',
'JS_up'=>'Updated!',
'JS_save'=>'Save',
'JS_pub'=>'Share',
'JS_del'=>'Really want to delete?',
'JS_create'=>'Add new or select...',
'JS_low'=>'Low',
'JS_norm'=>'Average',
'JS_high'=>'High',
'JS_unit'=>'Please fill in box unit',
'JS_probl'=>'Please fill in the description field',
'JS_ok'=>'Completed',
'JS_no_ok'=>'Not implemented',
'JS_unlock'=>'Restore',
'JS_lock'=>'Block',
'NAVBAR_workers_list'=>'client List',
'NAVBAR_workers_add'=>'Create customer',
'LIST_pin' => 'Departments',
'USERS_title'=>'Users',
'USERS_create'=>'Create user',
'USERS_list'=>'Users',
'USERS_profile_priv'=>'Visibility tickets',
'USERS_msg_add'=>'User successfully added!',
'USERS_new'=>'New customer',
'USERS_new_add'=>'New user',
'USERS_fio'=>'name',
'USERS_fio_full'=>'last name, first name and patronymic',
'USERS_login'=>'Login',
'USERS_pass'=>'Password',
'USERS_mail'=>'E-mail',
'USERS_units'=>'Departments',
'USERS_unit'=>'Department',
'USERS_nach1'=>'Head',
'USERS_nach1_desc'=>'can see all entries.',
'USERS_nach'=>'Head of Department',
'USERS_nach_desc'=>'see all the tickets addressed in the selected departments, and addressed to all users of the Department.',
'USERS_wo'=>'Staff',
'USERS_wo_desc'=>'can see all tickets addressed to the Department and the user. Ticket to other users of the Department will not be visible.',
'USERS_make_create'=>'Create user',
'FILES_title_ext'=>'file Management tickets',
'POSADA_title_ext'=>'Manage posts',
'USERS_uid'=>'UID',
'USERS_privs'=>'Privileges',
'USERS_p_1'=>'Beg. Department',
'USERS_p_2'=>'Staff',
'USERS_p_3'=>'Beg. management',
'USERS_p_4'=>'Client',
'USERS_msg_edit_ok'=>'user Data successfully updated!',
'USERS_make_edit'=>'Edit customer data',
'USERS_make_edit_user'=>'Edit user data',
'DEPS_title_ext'=>'Management units',
'USERS_acc'=>'Account',
'USERS_not_active'=>'Off',
'USERS_active'=>'Enabled',
'USERS_editable'=>'Edit data',

'DEPS_title'=>'Departments',
'DEPS_name'=>'Department Name',
'DEPS_add'=>'Add',
'DEPS_n'=>'Name',
'DEPS_action'=>'Action',
'APPROVE_title'=>'Confirmation of change of information',
'APPROVE_info'=>'Information',
'APPROVE_fio'=>'name',
'APPROVE_login'=>'Login',
'APPROVE_posada'=>'Post',
'APPROVE_unit'=>'Unit',
'APPROVE_tel'=>'Tel',
'APPROVE_adr'=>'Address',
'APPROVE_mail'=>'E-mail',
'APPROVE_app'=>'Confirm?',
'APPROVE_orig'=>'Original',
'APPROVE_yes'=>'Yes',
'APPROVE_no'=>'No',
'APPROVE_want_edit'=>'want to change',
'APPROVE_want_add'=>'wants to create a',

'POSADA_title'=>'Posts',
'POSADA_name'=>'Title',
'POSADA_add'=>'Add',
'POSADA_n'=>'Name',
'POSADA_action'=>'Action',


'UNITS_title'=>'client Departments',
'UNITS_title_ext'=>'Management units clients',
'UNITS_name'=>'Name management',
'UNITS_add'=>'Add',
'UNITS_n'=>'Name',
'UNITS_action'=>'Action',


'SUBJ_title'=>'Themes ticket',
'SUBJ_name'=>'topic Title',
'SUBJ_add'=>'Add',
'SUBJ_n'=>'Name',
'SUBJ_action'=>'Action',


'STATS_TITLE'=>'user Statistics',
'STATS_in'=>'Incoming requests',
'STATS_out'=>'Outgoing requests',
'STATS_new'=>'New',
'STATS_lock'=>'working',
'STATS_ok'=>'I',
'STATS_nook'=>'Not implemented',
'STATS_create'=>'Created me',
'STATS_lock_o'=>'Work',
'STATS_ok_o'=>'Completed',
'STATS_help1'=>'<li> new tickets , which are addressed to You or Your Department and You can implement them. </li> <li> Blocked - tickets that You are working on. </li> <li> Made the ticket that You have already completed (after some time, go into the archive and will disappear on track) </li>',
'STATS_help2'=>'<li> Not implemented tickets that you have created, but nobody has yet done. </li> <li> Blocked - demand, over which someone works. </li> <li> Made the ticket that You created and performed </li>',
'STATS_in_now'=>'Incoming tickets at the present time',
'STATS_t'=>'Ticket',
'STATS_t_ok'=>'Completed',
'STATS_t_free'=>'Available',
'STATS_out_all'=>'Outgoing requests for the entire period',
'STATS_t_lock'=>'working',

'DEPS_info'=>'this topic contains departments, including users of the system.<br> When creating the ticket, you can choose one of these departments.',
'SUBJ_info'=>'this section contains topics tickets.<br> When creating the ticket, you can choose the subject of the request.',
'POSADA_info'=>'this section contains the positions of the users (clients).<br> When creating a request, if You have the right to edit/add users (clients), You will be able to specify the position.',
'UNITS_info'=>'this section contains the departments of users (clients).<br> When creating a request, if You have the right to edit/add users (clients), You can specify the Department.',
'DASHBOARD_def_msg'=>'welcome You into the ticket system! </strong> </center> <br> we Recommend the <a href=\'help\' class=\'alert-link\'> </i> instructions </a> on the system. </br> Or <a href=\'create\'class=\'alert-link\'> create a new ticket </a> right now!',

'msg_creted_new_user' => 'Will be opened new user.',
'MAIL_active' => 'account activated',
'MAIL_adr' => 'Address',
'MAIL_active_u' => 'user account activated',
'MAIL_cong' => 'Welcome to the system tickets',
'MAIL_data' => 'Data',
'MAIL_name' => 'ticket System',
'MAIL_new' => 'NEW ticket',
'MAIL_code' => 'ticket Code',
'MAIL_2link' => 'go to ticket',
'MAIL_info' => 'Information',
'MAIL_created' => 'ticket created',
'MAIL_to' => 'Who',
'MAIL_prio' => 'Priority',
'MAIL_worker' => 'Staff',
'MAIL_msg' => 'Message',
'MAIL_subj' => 'Subject',
'MAIL_text' => 'Text',
't_LIST_worker_to' => 'employee',
't_LIST_person' => 'personal',

'HELP_title' => 'instructions how to work with tickets',
'HELP_new' => 'Create ticket',
'HELP_review' => 'Display ticket',
'HELP_edit_user' => 'Change user information',
'HELP_new_text' => '<p>To create an ticket, You must fill out the required fields.
</p>
<ol>
<li><strong>who</strong> - You need to start typing part of the name, name, patronymic name or login. If the worker is already in the system, You will automatically be prompted to select it from the List. If it is not - then it will be created. In the right part of the page, You can optionally specify contact information for the employee. Typically, this contact phone number, address.</li>
<li><strong>Who</strong> - specifies the Department. Be sure to specify the Department, as well as optional performer. If you specify only the Department, the ticket will be seen by all employees of the Department. If you specify another contractor, then the ticket will see only the contractor and the head of his Department.</li>
<li><strong>Priority</strong> - specifies the priority of execution of the ticket. In General, the list of tickets it is possible to see certain notes.</li>
<li><strong>Topic</strong> - specify briefly the subject of the request.</li>
<li><strong>Message</strong> - specifies in detail the essence of the ticket.</li>
</ol>',
'HELP_review_text' => '<p>You are three "directory": "Inbox", "Outbox", "Archive". Details about them below.
</p>
<ul>
<li><strong>Inbox</strong> - this directory contains all bids, addressed directly to You or Your Department.
In the presence of user rights - you see only the tickets addressed to the entire Department or to You directly. (ticket addressed to You and the Department.
If you have administrative head of the Department - you can see all the tickets of Your Department (addressed to You, the users, and Department).
</li>
<li><strong>Outbox</strong> - this directory contains all of the ticket which created You. You can view the status of Your created tickets.
</li>
<li><strong>Archive</strong> - this directory contains all claims that have been made, and after some time moved to the archive. They are sent to the archive automatically.
</li>
</ul>
<p>
In the list of tickets have different colors, in ticket to see their status. If the ticket of the black color is that it has not been read. Blue - waiting for action. Yellow - blocked You. Gray - blocked user. Green - the ticket is executed.
</p>
<center>

</center>
<p>
<strong>as soon As You or Your Department has received a new request</strong>, You need to view it by clicking on the topic and decide:
<ul>
<li><strong>forward to another Department / or user</strong> - If the ticket is not in Your jurisdiction, then you can transfer to another Department or user.
</li>
<li><strong>Block</strong> - to make sure that everyone saw that You are working at this time with the ticket, other users were not able to do anything with the ticket in addition to the Department head.
<li><strong>Run it</strong> means the ticket form completed and after a while it will go to the archive</li>

</ul>
</li>
</ul>
</p>
<p>
You can also leave a comment to the ticket.
</p>',
'HELP_edit_user_text' => '<p>it is Sometimes necessary to Supplement the information about the user or change it.
For this there is a section of Users. Locate the user that you need and change the data. After that, they will be tested by the system administrator and change.
</p>',
'REFER_comment_add'=>'added',






'TICKET_file_upload'=>'select files',
'TICKET_file_startupload'=>'download',
'TICKET_file_notupload'=>'cancel download',
'TICKET_file_notupload_one'=>'cancel',
'TICKET_file_upload_msg'=>'You can transfer files to the page',
'TICKET_file_add'=>'Add file',
'TICKET_file_list'=>'attachments',
'SYSTEM_lang'=>'Language',
'summernote_lang'=> 'uk-UA',
'note_save'=>'Record saved',
'upload_errortypes'=>'file Type not allowed',
'upload_errorsize'=>'large file',
'upload_not_u' => 'You forgot to load files',
'userinfo_ticket'=>'ticket user',
'file_info'=>'File',
'file_info2'=>'uploaded',
'last_more'=>'more',
'ticket_sort_def'=>'Show all',
'ticket_sort_ok'=>'Completed',
'ticket_sort_ilock'=>'Blocked me',
'ticket_sort_lock'=>'Blocked not by me',
''=>''


            );
    return isset($lang[$phrase]) ? $lang[$phrase] : 'undefined';
}
?>
