<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

$cakeDescription = 'CakePHP: test application';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-title">
        <h1><?= $cakeDescription ?></h1>
    </div>
</header>
    
<div class="row">
    <div class="columns large-6">
        <h3>Users</h3>
        <ul>
            <li class="bullet cutlery"><?php echo $this->Html->link('Login', '/users/login'); ?></li>
            <li class="bullet cutlery"><?php echo $this->Html->link('New User', '/users/add'); ?></li>
        </ul>
    </div>
    <div class="columns large-6">
        <h3>Appointments</h3>
        <ul>
            <li class="bullet book"><?php echo $this->Html->link('All Appointments', '/appointments'); ?></li>
        </ul>
        <p>
    </div>
</div>

<div class="row">
    <hr />
</div>

</body>
</html>
