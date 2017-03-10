<?php

//打卡记录模型
namespace Home\Model;
use Think\Model;

class ClockRecordModel extends CommonModel{
    protected $fields = ['id', 'name', 'user_id', 'dept_id', 'time_on', 'time_off', 'late_time', 'early_time', 'clock_id'];
    protected $pk = ['id'];
}