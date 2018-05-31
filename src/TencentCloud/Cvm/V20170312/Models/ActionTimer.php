<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getTimerAction() 获取定时器名称，目前仅支持销毁一个值：TerminateInstances。
 * @method void setTimerAction(string $TimerAction) 设置定时器名称，目前仅支持销毁一个值：TerminateInstances。
 * @method string getActionTime() 获取执行时间，格式形如：2018/5/29 11:26:40,执行时间必须大于当前时间5分钟。
 * @method void setActionTime(string $ActionTime) 设置执行时间，格式形如：2018/5/29 11:26:40,执行时间必须大于当前时间5分钟。
 * @method Externals getExternals() 获取扩展数据
 * @method void setExternals(Externals $Externals) 设置扩展数据
 */

/**
 *定时任务
 */
class ActionTimer extends AbstractModel
{
    /**
     * @var string 定时器名称，目前仅支持销毁一个值：TerminateInstances。
     */
    public $TimerAction;

    /**
     * @var string 执行时间，格式形如：2018/5/29 11:26:40,执行时间必须大于当前时间5分钟。
     */
    public $ActionTime;

    /**
     * @var Externals 扩展数据
     */
    public $Externals;
    /**
     * @param string $TimerAction 定时器名称，目前仅支持销毁一个值：TerminateInstances。
     * @param string $ActionTime 执行时间，格式形如：2018/5/29 11:26:40,执行时间必须大于当前时间5分钟。
     * @param Externals $Externals 扩展数据
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TimerAction",$param) and $param["TimerAction"] !== null) {
            $this->TimerAction = $param["TimerAction"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }
    }
}
