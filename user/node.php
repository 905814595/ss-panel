<?php
require_once '_main.php';
$node = new Ss\Node\Node();
$share = new Ss\User\Ss(2);
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                节点列表
                <small>Node List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">我的账号</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>请勿在任何地方公开节点地址！</p>
                            </div><?php
                            $node0 = $node->NodesArray(0);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>&type=1">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>&type=1">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#">加密:</a><code><?php echo $row['node_method']; ?></code><br />
                                                <a class="btn btn-xs bg-red btn-flat margin" href="#">显示:</a>
                                                <a target="_blank" href="node_json.php?id=<?php echo $row['id']; ?>&type=1">json配置</a>/
                                                <a target="_blank" href="node_qr.php?id=<?php echo $row['id']; ?>&type=1">二维码</a><br />
                                                <a class="btn btn-xs bg-blue btn-flat margin" href="#">说明:</a><?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->


                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">公共账号</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>公共账号每个月换一次密码<br />
                                   当有人临时借翻墙的时<br />
                                   请不要外传自己的用户名和密码，给公共账号</p>
                            </div>
                            <div>
                                <p>公用shadowsocks的端口：<?php echo $share->get_port();?><br />
                                   公用shadowsocks的密码：<?php echo $share->get_pass();?></p>
                                <p>anyconnect服务器地址同shadowsocks，端口999 <br />
                                   在服务器地址填写 服务器:999的形式 <br />
                                   如127.0.0.1:999（地址往下看勿照抄！）<br />
                                   公用anyconnect的<a href="../ocvpn/share.p12" target="_blank">证书下载</a><br />
                                   公用anyconnect的证书密码：<?php echo $share->get_ac_pass();?></p>
                            </div><?php

                            $node1 = $node->NodesArray(0);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>&type=2">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>&type=2">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#">加密:</a><code><?php echo $row['node_method']; ?></code><br />
                                                <a class="btn btn-xs bg-red btn-flat margin" href="#">显示:</a>
                                                <a target="_blank" href="node_json.php?id=<?php echo $row['id']; ?>&type=2">json配置</a>/
                                                <a target="_blank" href="node_qr.php?id=<?php echo $row['id']; ?>&type=2">二维码</a><br />
                                                <a class="btn btn-xs bg-blue btn-flat margin" href="#">说明:</a><?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                 
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
