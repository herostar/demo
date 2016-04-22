<?php
return array(
                /*---------------------admin 后台管理-----------------------*/
                'adminmanger' => array(
                                'name'=>'后台管理',
                                'submenu' => array(
                                                'index_1' => array(
                                                                'url' => U('/admin/adminmanger/index',array('ismenu'=>'1','nav_id'=>'adminNavadminmanger_1')),
                                                                'name' => '管理员',

                                                ),
                                                'adminmanger_2' => array(
                                                                'url' => U('/admin/adminmanger/accountchange',array('ismenu'=>'1','nav_id'=>'adminNavadminmanger_2')),
                                                                'name' => '密码修改',
                                                ),

                                                'role_1' => array(
                                                                'url' => U('/admin/role/index',array('ismenu'=>'1','nav_id'=>'adminNavrole_1')),
                                                                'name' => '角色管理',
                                                ),
                                                'adminlist_1' => array(
                                                                'url' => U('/admin/adminlist/index',array('ismenu'=>'1','nav_id'=>'adminNavadminlist_1')),
                                                                'name' => '角色分配',
                                                ),
                                                'node_1' => array(
                                                                'name' => '节点管理',
                                                                'submenu' => array(
                                                                                '1' => array(
                                                                                                'url' => U('/admin/node/index',array('level'=>1,'ismenu'=>'1','nav_id'=>'adminNavnode_1_1')),
                                                                                                'name' => '应用节点',
                                                                                ),
                                                                                '2' => array(
                                                                                                'url' => U('/admin/node/index',array('level'=>2,'ismenu'=>'1','nav_id'=>'adminNavnode_1_2')),
                                                                                                'name' => '控制节点',
                                                                                ),
                                                                                '3' => array(
                                                                                                'url' => U('/admin/node/index',array('level'=>3,'ismenu'=>'1','nav_id'=>'adminNavnode_1_3')),
                                                                                                'name' => '动作节点',
                                                                                ),
                                                                ),
                                                ),

                                                'adminaccesslog_1' => array(
                                                                'url' => U('/admin/adminaccesslog/index',array('ismenu'=>'1','nav_id'=>'adminNavadminaccesslog_1')),
                                                                'name' => '管理员登录记录',
                                                ),



                                ),
                ),

                /*---------------------客户管理-----------------------*/
                'datacollect' => array(
                                'name'=>'客户管理',
                                'submenu' => array(
                                                'datacollect_1' => array(
                                                                'url' => U('/admin/datacollect/index',array('ismenu'=>'1','nav_id'=>'datacollectNavdatacollect_1')),
                                                                'name' => '客户管理',
                                                ),

                                ),
                ),


                /*---------------------数据分析-----------------------*/
                'clientdata' => array(
                                'name'=>'客户数据处理',
                                'submenu' => array(
                                                'clientdata_1' => array(
                                                                'url' => U('/admin/clientdata/index',array('ismenu'=>'1','nav_id'=>'clientdataNavclientdata_1')),
                                                                'name' => '客户数据处理',
                                                ),

                'clientdata_2' => array(
                                                                'url' => U('/admin/clientdata/report',array('ismenu'=>'2','nav_id'=>'clientdataNavclientdata_2')),
                                                                'name' => '分析报表',
                                                ),

                                                'clientdata_3' => array(
                                                                'url' => U('/admin/clientdata/alledit',array('ismenu'=>'3','nav_id'=>'clientdataNavclientdata_3')),
                                                                'name' => '批量修改',
                                                ),
                                ),


                ),



                /*---------------------client-----------------------*/
                'output' => array(
                                'name'=>'数据导出',
                                'submenu' => array(
                                                'output_1' => array(
                                                                'url' => U('/admin/output/index',array('ismenu'=>'1','nav_id'=>'outputNavoutput_1')),
                                                                'name' => '导出',
                                                ),
                                ),
                                'submenu' => array(
                                                'output_1' => array(
                                                                'url' => U('/admin/output/analyze',array('ismenu'=>'1','nav_id'=>'outputNavoutput_2')),
                                                                'name' => '分析导出',
                                                ),
                                ),
                ),

                'promuser' => array(
                                'name'=>'配置',
                                'submenu' => array(
                                                'matchcompanydata_2' => array(
                                                                'url' => U('/admin/matchcompany/index',array('ismenu'=>'2','nav_id'=>'matchcompanydata_2')),
                                                                'name' => '项目去向配置',
                                                ),
                                                'promuser_2' => array(
                                                                'url' => U('/admin/promuser/index',array('ismenu'=>'1','nav_id'=>'promuserNavpromuser_1')),
                                                                'name' => '推广人员配置',
                                                ),
                                ),
                ),


                'sendlog' => array(
                                'name'=>'数据发送记录',
                                'submenu' => array(
                                                'sendlog_1' => array(
                                                                'url' => U('/admin/sendthirdlog/index',array('ismenu'=>'1','nav_id'=>'sendlogNavsendlog_1')),
                                                                'name' => '发送记录',
                                                ),
                                ),
                ),
);
