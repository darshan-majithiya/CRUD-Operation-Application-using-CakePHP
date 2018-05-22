<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded container-fluid" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1>  <li><a>
                  <?php if($this->request->session()->read('Auth.User.id')) { ?>
                    <?= $this->Html->link('Home', ['controller'=>'users', 'action'=>'index']); ?>
                  <?php } else { ?>
                    <?= $this->Html->link('Home', ['controller'=>'users', 'action'=>'login']); ?>
                  <?php }?>
                  </a></li></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
              <?php if($this->request->session()->read('Auth.User.id')) { ?>
                <li><a>
                      <?= $this->Html->link(__($this->request->session()->read('Auth.User.email')), ['action' => 'view', $this->request->session()->read('Auth.User.id')]) ?>
                </a></li>
                <li><a>
                  <?= $this->Html->link('Logout', ['controller'=>'users', 'action'=>'logout']); ?>
                </a></li>
              <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container-fluid clearfix">
        <?php
        if($this->request->session()->read('Auth.User.id')) {
            $currentViewDetails = strtolower($inflector::singularize($this->name));
            $isUserAuthorized = false;

            if(isset($$currentViewDetails->id) AND $$currentViewDetails->id == $this->request->session()->read('Auth.User.id')){
              $isUserAuthorized = true;
            }

          }

          if($this->request->session()->read('Auth.User.id')) {
          echo $this->element('sidemenu/sidemenu_loggedIn', ['viewName'=>$inflector::singularize($this->name), 'isUserAuthorized'=>$isUserAuthorized]);
          } else {
              echo $this->element('sidemenu/sidemenu_loggedOut');
          }
          echo $this->fetch('content');
        ?>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
