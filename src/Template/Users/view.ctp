<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users view large-9 medium-8 columns content">
  <div class="row justify-content-center">
  		<div class="col-md-8 ">
        <div class="panel panel-default">
          <div class="row panel-heading justify-content-between">
            <div class="col-md-9">
              <h4 >User Profile</h4>
            </div>
            <div class="col-md-2">
              <h4><?= h($user->id) ?></h4>
            </div>

          </div>
          <div class="panel-body">
            <div class="box box-info">
              <div class="box-body">
                <div class="col-sm-5">
                  <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">
                  <hr />
                  <!-- /input-group -->
              </div>
              </div>
              <div class="col-sm-12">
              <h4 style="color:#00b1b1;"><?= h($user->email) ?></h4>
              </div>
              <div class="clearfix"></div>
              <div class="col-sm-8 col-xs-6 tital " ><b>Email: </b><?= h($user->email) ?></div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>
              <div class="col-sm-8 col-xs-6 tital " ><b>Phone: </b><?= h($user->phone) ?></div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>
              <div class="col-sm-8 col-xs-6 tital " ><b>Created: </b><?= h($user->created) ?></div>
              <div class="clearfix"></div>
              <div class="bot-border"></div>
              <div class="col-sm-8 col-xs-6 tital " ><b>Modified:</b>
                <?= $this->Time->timeagoinwords($user->modified)?>
              </div>
              <!-- /.box-body -->

            <!-- /.box -->
          </div>
        </div>
      </div>
  </div>
  </div>
</div>
