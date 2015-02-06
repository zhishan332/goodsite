<?php
/**
 * 时间的工具
 * @author wangqing
 * @since 15-1-26 下午5:28
 */
function time2Units($time)
{
    $year = floor($time / 60 / 60 / 24 / 365);
    $time -= $year * 60 * 60 * 24 * 365;
    $month = floor($time / 60 / 60 / 24 / 30);
    $time -= $month * 60 * 60 * 24 * 30;
    $week = floor($time / 60 / 60 / 24 / 7);
    $time -= $week * 60 * 60 * 24 * 7;
    $day = floor($time / 60 / 60 / 24);
    $time -= $day * 60 * 60 * 24;
    $hour = floor($time / 60 / 60);
    $time -= $hour * 60 * 60;
    $minute = floor($time / 60);
    $time -= $minute * 60;
    $second = $time;
    $elapse = '';

    $unitArr = array('年' => 'year', '个月' => 'month', '周' => 'week', '天' => 'day',
        '小时' => 'hour', '分钟' => 'minute', '秒' => 'second'
    );

    foreach ($unitArr as $cn => $u) {
        if ($$u > 0) {
            $elapse = $$u . $cn;
            break;
        }
    }

    return $elapse;
}
/**获取时间差
 * @param $timeStr 时间字符串 Y-m-d h:i:s
 * @return string
 */
function getDiff($timeStr){
    $past = strtotime($timeStr);
    $diff=time()-$past;
    return time2Units($diff);
}
