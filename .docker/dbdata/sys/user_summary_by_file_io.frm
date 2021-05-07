TYPE=VIEW
query=select if(isnull(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) AS `user`,sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR`) AS `ios`,`sys`.`format_time`(sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT`)) AS `io_latency` from `performance_schema`.`events_waits_summary_by_user_by_event_name` where (`performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` like \'wait/io/file/%\') group by if(isnull(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) order by sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT`) desc
md5=08171b54a594819d1cd686ef84f12e31
updatable=0
algorithm=1
definer_user=mysql.sys
definer_host=localhost
suid=0
with_check_option=0
timestamp=2021-04-16 20:44:18
create-version=1
source=SELECT IF(user IS NULL, \'background\', user) AS user, SUM(count_star) AS ios, sys.format_time(SUM(sum_timer_wait)) AS io_latency  FROM performance_schema.events_waits_summary_by_user_by_event_name WHERE event_name LIKE \'wait/io/file/%\' GROUP BY IF(user IS NULL, \'background\', user) ORDER BY SUM(sum_timer_wait) DESC
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select if(isnull(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) AS `user`,sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`COUNT_STAR`) AS `ios`,`sys`.`format_time`(sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT`)) AS `io_latency` from `performance_schema`.`events_waits_summary_by_user_by_event_name` where (`performance_schema`.`events_waits_summary_by_user_by_event_name`.`EVENT_NAME` like \'wait/io/file/%\') group by if(isnull(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`),\'background\',`performance_schema`.`events_waits_summary_by_user_by_event_name`.`USER`) order by sum(`performance_schema`.`events_waits_summary_by_user_by_event_name`.`SUM_TIMER_WAIT`) desc
