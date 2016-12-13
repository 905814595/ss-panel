<?php
require_once '../lib/config.php';
$node = new Ss\Node\Node();
$nodes = $node->NodesArray(0);
    $oo = new Ss\User\Ss(1); 
$pass = $oo->get_pass();
$port = $oo->get_port();
$rs['port'] = $port;
$rs['pass'] = $pass;
$rs['nodes'] = $nodes;

echo json_encode($rs);