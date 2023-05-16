<?php /*a:10:{s:40:"F:\site\ztx\view\admin\demo\general.html";i:1642750854;s:34:"F:\site\ztx\view\admin\layout.html";i:1642750854;s:45:"F:\site\ztx\view\admin\public\breadcrumb.html";i:1651030176;s:41:"F:\site\ztx\view\admin\public\header.html";i:1661162617;s:41:"F:\site\ztx\view\admin\public\css_js.html";i:1650874430;s:45:"F:\site\ztx\view\admin\index\webuploader.html";i:1660828476;s:39:"F:\site\ztx\view\admin\public\left.html";i:1648199940;s:41:"F:\site\ztx\view\admin\public\footer.html";i:1648198182;s:46:"F:\site\ztx\view\admin\public\foot_css_js.html";i:1648736694;s:39:"F:\site\ztx\view\admin\index\index.html";i:1661162848;}*/ ?>

<?php if($system['display_mode'] == 0): if($layer == false): if($pjax == true): if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
            <!-- Main content -->
<section class="content">
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
  <div class="container-fluid">
    <!-- COLOR PALETTE -->
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-tag"></i>
          Color Palette
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5>Theme Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Primary</h4>

            <div class="color-palette-set">
              <div class="bg-primary color-palette"><span>#007bff</span></div>
              <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Secondary</h4>

            <div class="color-palette-set">
              <div class="bg-secondary color-palette"><span>#6c757d</span></div>
              <div class="bg-secondary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Info</h4>

            <div class="color-palette-set">
              <div class="bg-info color-palette"><span>#17a2b8</span></div>
              <div class="bg-info disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Success</h4>

            <div class="color-palette-set">
              <div class="bg-success color-palette"><span>#28a745</span></div>
              <div class="bg-success disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-warning">Warning</h4>

            <div class="color-palette-set">
              <div class="bg-warning color-palette"><span>#ffc107</span></div>
              <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Danger</h4>

            <div class="color-palette-set">
              <div class="bg-danger color-palette"><span>#dc3545</span></div>
              <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Black/White Nuances</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Black</h4>

            <div class="color-palette-set">
              <div class="bg-black color-palette"><span>#000000</span></div>
              <div class="bg-black disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray Dark</h4>

            <div class="color-palette-set">
              <div class="bg-gray-dark color-palette"><span>#343a40</span></div>
              <div class="bg-gray-dark disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray</h4>

            <div class="color-palette-set">
              <div class="bg-gray color-palette"><span>#adb5bd</span></div>
              <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-light">Light</h4>

            <div class="color-palette-set">
              <div class="bg-light color-palette"><span>#1f2d3d</span></div>
              <div class="bg-light disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-indigo">Indigo</h4>

            <div class="color-palette-set">
              <div class="bg-indigo color-palette"><span>#6610f2</span></div>
              <div class="bg-indigo disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lightblue">Lightblue</h4>

            <div class="color-palette-set">
              <div class="bg-lightblue color-palette"><span>#3c8dbc</span></div>
              <div class="bg-lightblue disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-navy">Navy</h4>

            <div class="color-palette-set">
              <div class="bg-navy color-palette"><span>#001f3f</span></div>
              <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-purple">Purple</h4>

            <div class="color-palette-set">
              <div class="bg-purple color-palette"><span>#605ca8</span></div>
              <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-fuchsia">Fuchsia</h4>

            <div class="color-palette-set">
              <div class="bg-fuchsia color-palette"><span>#f012be</span></div>
              <div class="bg-fuchsia disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-pink">Pink</h4>

            <div class="color-palette-set">
              <div class="bg-pink color-palette"><span>#e83e8c</span></div>
              <div class="bg-pink disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-maroon">Maroon</h4>

            <div class="color-palette-set">
              <div class="bg-maroon color-palette"><span>#d81b60</span></div>
              <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-orange">Orange</h4>

            <div class="color-palette-set">
              <div class="bg-orange color-palette"><span>#ff851b</span></div>
              <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lime">Lime</h4>

            <div class="color-palette-set">
              <div class="bg-lime color-palette"><span>#01ff70</span></div>
              <div class="bg-lime disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-teal">Teal</h4>

            <div class="color-palette-set">
              <div class="bg-teal color-palette"><span>#39cccc</span></div>
              <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-olive">Olive</h4>

            <div class="color-palette-set">
              <div class="bg-olive color-palette"><span>#3d9970</span></div>
              <div class="bg-olive disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- START ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-exclamation-triangle"></i>
              Alerts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
              entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Alert!</h5>
              Info alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
              Warning alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Success alert preview. This alert is dismissable.
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Callouts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>I am a danger callout!</h5>

              <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                soul,
                like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="callout callout-info">
              <h5>I am an info callout!</h5>

              <p>Follow the steps to continue to payment.</p>
            </div>
            <div class="callout callout-warning">
              <h5>I am a warning callout!</h5>

              <p>This is a yellow callout.</p>
            </div>
            <div class="callout callout-success">
              <h5>I am a success callout!</h5>

              <p>This is a green callout.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Tabs in Cards</h5>

    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Tabs</h3>
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                </div>
              </li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- ./card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
    <!-- START PROGRESS BARS -->
    <h5 class="mt-4 mb-2">Progress Bars</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p><code>.progress</code></p>

            <div class="progress">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p><code>.progress-sm</code></p>

            <div class="progress progress-sm active">
              <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <p><code>.progress-xs</code></p>

            <div class="progress progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <p><code>.progress-xxs</code></p>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
              or
              <code>.progress-xxs</code> we achieve:</p>

            <div class="progress vertical active">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical progress-sm">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 100%">
                <span class="sr-only">100%</span>
              </div>
            </div>
            <div class="progress vertical progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical progress-xxs">
              <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                   aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> we achieve:</p>

            <div class="progress vertical">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 20%">
                <span class="sr-only">20%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="height: 80%">
                <span class="sr-only">80%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <!-- END PROGRESS BARS -->

    <!-- START ACCORDION & CAROUSEL-->
    <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Collapsible Accordion</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="accordion">
              <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Collapsible Group Danger
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Collapsible Group Success
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Carousel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->

    <!-- START TYPOGRAPHY -->
    <h5 class="mt-4 mb-2">Typography</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Headlines
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h1>h1. Bootstrap heading</h1>

            <h2>h2. Bootstrap heading</h2>

            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Text Emphasis
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="lead">Lead to emphasize importance</p>

            <p class="text-success">Text green to emphasize success</p>

            <p class="text-info">Text aqua to emphasize info</p>

            <p class="text-primary">Text light blue to emphasize info (2)</p>

            <p class="text-danger">Text red to emphasize danger</p>

            <p class="text-warning">Text yellow to emphasize warning</p>

            <p class="text-muted">Text muted to emphasize general</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Primary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Secondary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body clearfix">
            <blockquote class="quote-secondary">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unordered List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Ordered Lists
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ol>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ol>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unstyled List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description Horizontal
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Description lists</dt>
              <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
              <dt class="col-sm-4">Euismod</dt>
              <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
              <dt class="col-sm-4">Malesuada porta</dt>
              <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
              <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus.
              </dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- END TYPOGRAPHY -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
        <?php else: ?>
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
           
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
                <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-default elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo url('Index/index'); ?>" class="brand-link">
		
		<!-- 折腾侠：修改后台logo和名称为动态 -->
            <img src="<?php echo htmlentities((isset($system['backstage_logo']) && ($system['backstage_logo'] !== '')?$system['backstage_logo']:'/static/plugins/AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="<?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?></span>
        </a>
		<!-- 折腾侠：修改后台logo和名称为动态 -->
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="d-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 mb-2">
                <ul class="nav nav-pills no_radius nav-sidebar flex-column nav-child-indent js_left_menu_show" data-widget="treeview" role="menu" data-accordion="true">
                    <li data-item="0" class="nav-header nav-item_0">主导航</li>
                    <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="0" class="nav-item nav-item_0 has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon <?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'fas fa-bars')); ?>"></i>
                            <p>
                                <?php echo htmlentities($vo['title']); ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item <?php if(count($voo['children'])): ?>has-treeview<?php endif; ?>">
                                <a href="<?php if(count($voo['children'])): ?>#<?php else: ?><?php echo htmlentities($voo['href']); ?><?php endif; ?>" class="nav-link">
                                    <i class="<?php echo htmlentities((isset($voo['icon']) && ($voo['icon'] !== '')?$voo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                    <p><?php echo htmlentities($voo['title']); if(count($voo['children'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?></p>
                                </a>
                                <?php if(count($voo['children'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['children']) || $voo['children'] instanceof \think\Collection || $voo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo htmlentities($vooo['href']); ?>" class="nav-link">
                                            <i class="<?php echo htmlentities((isset($vooo['icon']) && ($vooo['icon'] !== '')?$vooo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                            <p><?php echo htmlentities($vooo['title']); ?></p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li data-item="1" class="nav-header nav-item_1" style="display: none">内容管理</li>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="1" class="nav-item nav-item_1 <?php if(count($vo['sub'])): ?>has-treeview<?php endif; ?>" style="display: none">
                        <a href="<?php if(count($vo['sub'])): ?>#<?php else: ?><?php echo url($vo['module']['model_name'].'/index',['cate_id'=>$vo['id']]); ?><?php endif; ?>" class="nav-link">
                            <i class="fas fa-bars nav-icon"></i>
                            <p>
                                <?php echo htmlentities($vo['cate_name']); if(count($vo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                            </p>
                        </a>
                        <?php if(count($vo['sub'])): ?>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item">
                                <a href="<?php echo url($voo['module']['model_name'].'/index',['cate_id'=>$voo['id']]); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <?php echo htmlentities($voo['left_html']); ?>
                                    <p>
                                        <?php echo htmlentities($voo['original_cate_name']); if(count($voo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                                    </p>
                                </a>
                                <?php if(count($voo['sub'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['sub']) || $voo['sub'] instanceof \think\Collection || $voo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo url($vooo['module']['model_name'].'/index',['cate_id'=>$vooo['id']]); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <?php echo htmlentities($vooo['left_html']); ?>
                                            <p>
                                                <?php echo htmlentities($vooo['original_cate_name']); ?>
                                            </p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <script>
        // 主导航、内容管理切换
        $(".js_left_menu li").click(function () {
            // 通过 .index()方法获取元素下标（从0开始）
            var _index = $(this).index();
            // 让左侧菜单第 _index 个显示出来，其他的隐藏起来
            $(".js_left_menu_show > li").hide();
            $(".js_left_menu_show > li.nav-item_" + _index).show();
            // 当前菜单添加选中效果，同级的移除选中效果
            $(this).addClass('active').siblings('li').removeClass('active');
        })

        // 清空缓存
        $(".js_clear_cash").click(function () {
            var url = "<?php echo url('index/clear'); ?>";
            $.modal.confirm('确定要清除缓存吗？', function () {
                $.post(url, {
                    del: true
                }, function (result) {
                    if (result.error == 0) {
                        $.modal.alertSuccess(result.msg, function (index) {
                            layer.close(index);
                            $.pjax.reload('.content-wrapper'); // pjax 重载
                        });
                    } else {
                        $.modal.alertError(result.msg);
                    }
                });
            });
        })

    </script>
            <div class="content-wrapper">
                <?php if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
                <!-- Main content -->
<section class="content">
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
  <div class="container-fluid">
    <!-- COLOR PALETTE -->
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-tag"></i>
          Color Palette
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5>Theme Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Primary</h4>

            <div class="color-palette-set">
              <div class="bg-primary color-palette"><span>#007bff</span></div>
              <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Secondary</h4>

            <div class="color-palette-set">
              <div class="bg-secondary color-palette"><span>#6c757d</span></div>
              <div class="bg-secondary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Info</h4>

            <div class="color-palette-set">
              <div class="bg-info color-palette"><span>#17a2b8</span></div>
              <div class="bg-info disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Success</h4>

            <div class="color-palette-set">
              <div class="bg-success color-palette"><span>#28a745</span></div>
              <div class="bg-success disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-warning">Warning</h4>

            <div class="color-palette-set">
              <div class="bg-warning color-palette"><span>#ffc107</span></div>
              <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Danger</h4>

            <div class="color-palette-set">
              <div class="bg-danger color-palette"><span>#dc3545</span></div>
              <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Black/White Nuances</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Black</h4>

            <div class="color-palette-set">
              <div class="bg-black color-palette"><span>#000000</span></div>
              <div class="bg-black disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray Dark</h4>

            <div class="color-palette-set">
              <div class="bg-gray-dark color-palette"><span>#343a40</span></div>
              <div class="bg-gray-dark disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray</h4>

            <div class="color-palette-set">
              <div class="bg-gray color-palette"><span>#adb5bd</span></div>
              <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-light">Light</h4>

            <div class="color-palette-set">
              <div class="bg-light color-palette"><span>#1f2d3d</span></div>
              <div class="bg-light disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-indigo">Indigo</h4>

            <div class="color-palette-set">
              <div class="bg-indigo color-palette"><span>#6610f2</span></div>
              <div class="bg-indigo disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lightblue">Lightblue</h4>

            <div class="color-palette-set">
              <div class="bg-lightblue color-palette"><span>#3c8dbc</span></div>
              <div class="bg-lightblue disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-navy">Navy</h4>

            <div class="color-palette-set">
              <div class="bg-navy color-palette"><span>#001f3f</span></div>
              <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-purple">Purple</h4>

            <div class="color-palette-set">
              <div class="bg-purple color-palette"><span>#605ca8</span></div>
              <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-fuchsia">Fuchsia</h4>

            <div class="color-palette-set">
              <div class="bg-fuchsia color-palette"><span>#f012be</span></div>
              <div class="bg-fuchsia disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-pink">Pink</h4>

            <div class="color-palette-set">
              <div class="bg-pink color-palette"><span>#e83e8c</span></div>
              <div class="bg-pink disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-maroon">Maroon</h4>

            <div class="color-palette-set">
              <div class="bg-maroon color-palette"><span>#d81b60</span></div>
              <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-orange">Orange</h4>

            <div class="color-palette-set">
              <div class="bg-orange color-palette"><span>#ff851b</span></div>
              <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lime">Lime</h4>

            <div class="color-palette-set">
              <div class="bg-lime color-palette"><span>#01ff70</span></div>
              <div class="bg-lime disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-teal">Teal</h4>

            <div class="color-palette-set">
              <div class="bg-teal color-palette"><span>#39cccc</span></div>
              <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-olive">Olive</h4>

            <div class="color-palette-set">
              <div class="bg-olive color-palette"><span>#3d9970</span></div>
              <div class="bg-olive disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- START ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-exclamation-triangle"></i>
              Alerts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
              entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Alert!</h5>
              Info alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
              Warning alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Success alert preview. This alert is dismissable.
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Callouts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>I am a danger callout!</h5>

              <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                soul,
                like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="callout callout-info">
              <h5>I am an info callout!</h5>

              <p>Follow the steps to continue to payment.</p>
            </div>
            <div class="callout callout-warning">
              <h5>I am a warning callout!</h5>

              <p>This is a yellow callout.</p>
            </div>
            <div class="callout callout-success">
              <h5>I am a success callout!</h5>

              <p>This is a green callout.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Tabs in Cards</h5>

    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Tabs</h3>
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                </div>
              </li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- ./card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
    <!-- START PROGRESS BARS -->
    <h5 class="mt-4 mb-2">Progress Bars</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p><code>.progress</code></p>

            <div class="progress">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p><code>.progress-sm</code></p>

            <div class="progress progress-sm active">
              <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <p><code>.progress-xs</code></p>

            <div class="progress progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <p><code>.progress-xxs</code></p>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
              or
              <code>.progress-xxs</code> we achieve:</p>

            <div class="progress vertical active">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical progress-sm">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 100%">
                <span class="sr-only">100%</span>
              </div>
            </div>
            <div class="progress vertical progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical progress-xxs">
              <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                   aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> we achieve:</p>

            <div class="progress vertical">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 20%">
                <span class="sr-only">20%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="height: 80%">
                <span class="sr-only">80%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <!-- END PROGRESS BARS -->

    <!-- START ACCORDION & CAROUSEL-->
    <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Collapsible Accordion</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="accordion">
              <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Collapsible Group Danger
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Collapsible Group Success
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Carousel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->

    <!-- START TYPOGRAPHY -->
    <h5 class="mt-4 mb-2">Typography</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Headlines
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h1>h1. Bootstrap heading</h1>

            <h2>h2. Bootstrap heading</h2>

            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Text Emphasis
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="lead">Lead to emphasize importance</p>

            <p class="text-success">Text green to emphasize success</p>

            <p class="text-info">Text aqua to emphasize info</p>

            <p class="text-primary">Text light blue to emphasize info (2)</p>

            <p class="text-danger">Text red to emphasize danger</p>

            <p class="text-warning">Text yellow to emphasize warning</p>

            <p class="text-muted">Text muted to emphasize general</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Primary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Secondary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body clearfix">
            <blockquote class="quote-secondary">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unordered List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Ordered Lists
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ol>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ol>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unstyled List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description Horizontal
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Description lists</dt>
              <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
              <dt class="col-sm-4">Euismod</dt>
              <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
              <dt class="col-sm-4">Malesuada porta</dt>
              <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
              <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus.
              </dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- END TYPOGRAPHY -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
            </div>
            <?php if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
        <?php endif; else: ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
           
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
        <div class="content-wrapper">
            <!-- Main content -->
<section class="content">
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
  <div class="container-fluid">
    <!-- COLOR PALETTE -->
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-tag"></i>
          Color Palette
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5>Theme Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Primary</h4>

            <div class="color-palette-set">
              <div class="bg-primary color-palette"><span>#007bff</span></div>
              <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Secondary</h4>

            <div class="color-palette-set">
              <div class="bg-secondary color-palette"><span>#6c757d</span></div>
              <div class="bg-secondary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Info</h4>

            <div class="color-palette-set">
              <div class="bg-info color-palette"><span>#17a2b8</span></div>
              <div class="bg-info disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Success</h4>

            <div class="color-palette-set">
              <div class="bg-success color-palette"><span>#28a745</span></div>
              <div class="bg-success disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-warning">Warning</h4>

            <div class="color-palette-set">
              <div class="bg-warning color-palette"><span>#ffc107</span></div>
              <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Danger</h4>

            <div class="color-palette-set">
              <div class="bg-danger color-palette"><span>#dc3545</span></div>
              <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Black/White Nuances</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Black</h4>

            <div class="color-palette-set">
              <div class="bg-black color-palette"><span>#000000</span></div>
              <div class="bg-black disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray Dark</h4>

            <div class="color-palette-set">
              <div class="bg-gray-dark color-palette"><span>#343a40</span></div>
              <div class="bg-gray-dark disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray</h4>

            <div class="color-palette-set">
              <div class="bg-gray color-palette"><span>#adb5bd</span></div>
              <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-light">Light</h4>

            <div class="color-palette-set">
              <div class="bg-light color-palette"><span>#1f2d3d</span></div>
              <div class="bg-light disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-indigo">Indigo</h4>

            <div class="color-palette-set">
              <div class="bg-indigo color-palette"><span>#6610f2</span></div>
              <div class="bg-indigo disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lightblue">Lightblue</h4>

            <div class="color-palette-set">
              <div class="bg-lightblue color-palette"><span>#3c8dbc</span></div>
              <div class="bg-lightblue disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-navy">Navy</h4>

            <div class="color-palette-set">
              <div class="bg-navy color-palette"><span>#001f3f</span></div>
              <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-purple">Purple</h4>

            <div class="color-palette-set">
              <div class="bg-purple color-palette"><span>#605ca8</span></div>
              <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-fuchsia">Fuchsia</h4>

            <div class="color-palette-set">
              <div class="bg-fuchsia color-palette"><span>#f012be</span></div>
              <div class="bg-fuchsia disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-pink">Pink</h4>

            <div class="color-palette-set">
              <div class="bg-pink color-palette"><span>#e83e8c</span></div>
              <div class="bg-pink disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-maroon">Maroon</h4>

            <div class="color-palette-set">
              <div class="bg-maroon color-palette"><span>#d81b60</span></div>
              <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-orange">Orange</h4>

            <div class="color-palette-set">
              <div class="bg-orange color-palette"><span>#ff851b</span></div>
              <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lime">Lime</h4>

            <div class="color-palette-set">
              <div class="bg-lime color-palette"><span>#01ff70</span></div>
              <div class="bg-lime disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-teal">Teal</h4>

            <div class="color-palette-set">
              <div class="bg-teal color-palette"><span>#39cccc</span></div>
              <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-olive">Olive</h4>

            <div class="color-palette-set">
              <div class="bg-olive color-palette"><span>#3d9970</span></div>
              <div class="bg-olive disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- START ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-exclamation-triangle"></i>
              Alerts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
              entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Alert!</h5>
              Info alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
              Warning alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Success alert preview. This alert is dismissable.
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Callouts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>I am a danger callout!</h5>

              <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                soul,
                like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="callout callout-info">
              <h5>I am an info callout!</h5>

              <p>Follow the steps to continue to payment.</p>
            </div>
            <div class="callout callout-warning">
              <h5>I am a warning callout!</h5>

              <p>This is a yellow callout.</p>
            </div>
            <div class="callout callout-success">
              <h5>I am a success callout!</h5>

              <p>This is a green callout.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Tabs in Cards</h5>

    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Tabs</h3>
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                </div>
              </li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- ./card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
    <!-- START PROGRESS BARS -->
    <h5 class="mt-4 mb-2">Progress Bars</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p><code>.progress</code></p>

            <div class="progress">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p><code>.progress-sm</code></p>

            <div class="progress progress-sm active">
              <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <p><code>.progress-xs</code></p>

            <div class="progress progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <p><code>.progress-xxs</code></p>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
              or
              <code>.progress-xxs</code> we achieve:</p>

            <div class="progress vertical active">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical progress-sm">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 100%">
                <span class="sr-only">100%</span>
              </div>
            </div>
            <div class="progress vertical progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical progress-xxs">
              <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                   aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> we achieve:</p>

            <div class="progress vertical">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 20%">
                <span class="sr-only">20%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="height: 80%">
                <span class="sr-only">80%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <!-- END PROGRESS BARS -->

    <!-- START ACCORDION & CAROUSEL-->
    <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Collapsible Accordion</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="accordion">
              <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Collapsible Group Danger
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Collapsible Group Success
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Carousel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->

    <!-- START TYPOGRAPHY -->
    <h5 class="mt-4 mb-2">Typography</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Headlines
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h1>h1. Bootstrap heading</h1>

            <h2>h2. Bootstrap heading</h2>

            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Text Emphasis
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="lead">Lead to emphasize importance</p>

            <p class="text-success">Text green to emphasize success</p>

            <p class="text-info">Text aqua to emphasize info</p>

            <p class="text-primary">Text light blue to emphasize info (2)</p>

            <p class="text-danger">Text red to emphasize danger</p>

            <p class="text-warning">Text yellow to emphasize warning</p>

            <p class="text-muted">Text muted to emphasize general</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Primary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Secondary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body clearfix">
            <blockquote class="quote-secondary">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unordered List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Ordered Lists
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ol>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ol>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unstyled List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description Horizontal
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Description lists</dt>
              <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
              <dt class="col-sm-4">Euismod</dt>
              <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
              <dt class="col-sm-4">Malesuada porta</dt>
              <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
              <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus.
              </dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- END TYPOGRAPHY -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
        </div>
        <?php if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
    <?php endif; else: if($iframe == true): ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
           
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
        <div class="content-iframe">
            <?php if($layer == false): if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
            <?php endif; ?>
            <!-- Main content -->
<section class="content">
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
  <div class="container-fluid">
    <!-- COLOR PALETTE -->
    <div class="card card-default color-palette-box">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-tag"></i>
          Color Palette
        </h3>
      </div>
      <div class="card-body">
        <div class="col-12">
          <h5>Theme Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Primary</h4>

            <div class="color-palette-set">
              <div class="bg-primary color-palette"><span>#007bff</span></div>
              <div class="bg-primary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Secondary</h4>

            <div class="color-palette-set">
              <div class="bg-secondary color-palette"><span>#6c757d</span></div>
              <div class="bg-secondary disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Info</h4>

            <div class="color-palette-set">
              <div class="bg-info color-palette"><span>#17a2b8</span></div>
              <div class="bg-info disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Success</h4>

            <div class="color-palette-set">
              <div class="bg-success color-palette"><span>#28a745</span></div>
              <div class="bg-success disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-warning">Warning</h4>

            <div class="color-palette-set">
              <div class="bg-warning color-palette"><span>#ffc107</span></div>
              <div class="bg-warning disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Danger</h4>

            <div class="color-palette-set">
              <div class="bg-danger color-palette"><span>#dc3545</span></div>
              <div class="bg-danger disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Black/White Nuances</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Black</h4>

            <div class="color-palette-set">
              <div class="bg-black color-palette"><span>#000000</span></div>
              <div class="bg-black disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray Dark</h4>

            <div class="color-palette-set">
              <div class="bg-gray-dark color-palette"><span>#343a40</span></div>
              <div class="bg-gray-dark disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center">Gray</h4>

            <div class="color-palette-set">
              <div class="bg-gray color-palette"><span>#adb5bd</span></div>
              <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-light">Light</h4>

            <div class="color-palette-set">
              <div class="bg-light color-palette"><span>#1f2d3d</span></div>
              <div class="bg-light disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="col-12">
          <h5 class="mt-3">Colors</h5>
        </div>
        <!-- /.col-12 -->
        <div class="row">
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-indigo">Indigo</h4>

            <div class="color-palette-set">
              <div class="bg-indigo color-palette"><span>#6610f2</span></div>
              <div class="bg-indigo disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lightblue">Lightblue</h4>

            <div class="color-palette-set">
              <div class="bg-lightblue color-palette"><span>#3c8dbc</span></div>
              <div class="bg-lightblue disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-navy">Navy</h4>

            <div class="color-palette-set">
              <div class="bg-navy color-palette"><span>#001f3f</span></div>
              <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-purple">Purple</h4>

            <div class="color-palette-set">
              <div class="bg-purple color-palette"><span>#605ca8</span></div>
              <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-fuchsia">Fuchsia</h4>

            <div class="color-palette-set">
              <div class="bg-fuchsia color-palette"><span>#f012be</span></div>
              <div class="bg-fuchsia disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-pink">Pink</h4>

            <div class="color-palette-set">
              <div class="bg-pink color-palette"><span>#e83e8c</span></div>
              <div class="bg-pink disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-maroon">Maroon</h4>

            <div class="color-palette-set">
              <div class="bg-maroon color-palette"><span>#d81b60</span></div>
              <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-orange">Orange</h4>

            <div class="color-palette-set">
              <div class="bg-orange color-palette"><span>#ff851b</span></div>
              <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-lime">Lime</h4>

            <div class="color-palette-set">
              <div class="bg-lime color-palette"><span>#01ff70</span></div>
              <div class="bg-lime disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-teal">Teal</h4>

            <div class="color-palette-set">
              <div class="bg-teal color-palette"><span>#39cccc</span></div>
              <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 col-md-2">
            <h4 class="text-center bg-olive">Olive</h4>

            <div class="color-palette-set">
              <div class="bg-olive color-palette"><span>#3d9970</span></div>
              <div class="bg-olive disabled color-palette"><span>Disabled</span></div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- START ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Alerts and Callouts</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-exclamation-triangle"></i>
              Alerts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i> Alert!</h5>
              Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
              entire
              soul, like these sweet mornings of spring which I enjoy with my whole heart.
            </div>
            <div class="alert alert-info alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-info"></i> Alert!</h5>
              Info alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
              Warning alert preview. This alert is dismissable.
            </div>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Alert!</h5>
              Success alert preview. This alert is dismissable.
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Callouts
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="callout callout-danger">
              <h5>I am a danger callout!</h5>

              <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                soul,
                like these sweet mornings of spring which I enjoy with my whole heart.</p>
            </div>
            <div class="callout callout-info">
              <h5>I am an info callout!</h5>

              <p>Follow the steps to continue to payment.</p>
            </div>
            <div class="callout callout-warning">
              <h5>I am a warning callout!</h5>

              <p>This is a yellow callout.</p>
            </div>
            <div class="callout callout-success">
              <h5>I am a success callout!</h5>

              <p>This is a green callout.</p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ALERTS AND CALLOUTS -->
    <h5 class="mt-4 mb-2">Tabs in Cards</h5>

    <div class="row">
      <div class="col-12">
        <!-- Custom Tabs -->
        <div class="card">
          <div class="card-header d-flex p-0">
            <h3 class="card-title p-3">Tabs</h3>
            <ul class="nav nav-pills ml-auto p-2">
              <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Tab 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Tab 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" tabindex="-1" href="#">Action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Another action</a>
                  <a class="dropdown-item" tabindex="-1" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" tabindex="-1" href="#">Separated link</a>
                </div>
              </li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- ./card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END CUSTOM TABS -->
    <!-- START PROGRESS BARS -->
    <h5 class="mt-4 mb-2">Progress Bars</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p><code>.progress</code></p>

            <div class="progress">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <p><code>.progress-sm</code></p>

            <div class="progress progress-sm active">
              <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <p><code>.progress-xs</code></p>

            <div class="progress progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <p><code>.progress-xxs</code></p>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress Bars Different Sizes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>, <code>.progress-xs</code>
              or
              <code>.progress-xxs</code> we achieve:</p>

            <div class="progress vertical active">
              <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                   aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical progress-sm">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 100%">
                <span class="sr-only">100%</span>
              </div>
            </div>
            <div class="progress vertical progress-xs">
              <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                   aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical progress-xxs">
              <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="60"
                   aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (left) -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vertical Progress bars</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body text-center">
            <p>By adding the class <code>.vertical</code> we achieve:</p>

            <div class="progress vertical">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="height: 40%">
                <span class="sr-only">40%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="height: 20%">
                <span class="sr-only">20%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="height: 60%">
                <span class="sr-only">60%</span>
              </div>
            </div>
            <div class="progress vertical">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="height: 80%">
                <span class="sr-only">80%</span>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col (right) -->
    </div>
    <!-- /.row -->
    <!-- END PROGRESS BARS -->

    <!-- START ACCORDION & CAROUSEL-->
    <h5 class="mt-4 mb-2">Bootstrap Accordion & Carousel</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Collapsible Accordion</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="accordion">
              <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
              <div class="card card-primary">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-danger">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                      Collapsible Group Danger
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <div class="card-header">
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                      Collapsible Group Success
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Carousel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->

    <!-- START TYPOGRAPHY -->
    <h5 class="mt-4 mb-2">Typography</h5>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Headlines
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <h1>h1. Bootstrap heading</h1>

            <h2>h2. Bootstrap heading</h2>

            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Text Emphasis
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <p class="lead">Lead to emphasize importance</p>

            <p class="text-success">Text green to emphasize success</p>

            <p class="text-info">Text aqua to emphasize info</p>

            <p class="text-primary">Text light blue to emphasize info (2)</p>

            <p class="text-danger">Text red to emphasize danger</p>

            <p class="text-warning">Text yellow to emphasize warning</p>

            <p class="text-muted">Text muted to emphasize general</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Primary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Secondary Block Quotes
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body clearfix">
            <blockquote class="quote-secondary">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unordered List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Ordered Lists
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ol>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ol>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Unstyled List
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-text-width"></i>
              Description Horizontal
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Description lists</dt>
              <dd class="col-sm-8">A description list is perfect for defining terms.</dd>
              <dt class="col-sm-4">Euismod</dt>
              <dd class="col-sm-8">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd class="col-sm-8 offset-sm-4">Donec id elit non mi porta gravida at eget metus.</dd>
              <dt class="col-sm-4">Malesuada porta</dt>
              <dd class="col-sm-8">Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt class="col-sm-4">Felis euismod semper eget lacinia</dt>
              <dd class="col-sm-8">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus.
              </dd>
            </dl>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- END TYPOGRAPHY -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
        </div>
    <?php else: ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($system['label_logo']); ?>" /> <!--折腾侠修改标签页图标为动态自定义--> 
	<!-- ※折腾侠：修改后台页面标题为动态标题，可自定义 -->
    <title><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?> | 控制台</title>

    <!-- layui -->
<link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/google-fonts/google.fonts.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/toastr/toastr.min.css">
<!-- pace-progress -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
<!-- jQuery -->
<script src="/static/plugins/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- layui -->
<script src="/static/plugins/layui/layui.js"></script>
<!-- webuploader -->
<link rel="stylesheet" href="/static/plugins/webuploader-0.1.5/webuploader.css">
<script src="/static/plugins/webuploader-0.1.5/webuploader.min.js"></script>
<script type="text/javascript">
    /**
     * 封装上传组件
     * @param list
     * @param filePicker_image
     * @param image_preview
     * @param image
     * @param more            是否图集
     * @param upload_allowext 格式限制
     * @param size            大小限制
     * @param type            上传类型[file/img]
     */
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext, size, type) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace(/\|/g, ",");
        }
        if (size) {
            size = size * 1024;
        } else {
            size = 10240 * 1024 * 1024;
        }
        type = type || 'img';
	
		//ZTX-005重新设置上传文件目录
		var pathName = window.document.location.pathname;//获取网址目录
		var pos = pathName.lastIndexOf('/');//获取斜杠的最后位置
		var path = encodeURI(pathName.substr(1,pos));//获取地址目录
		//ZTX-005重新设置上传文件目录
        var $list = $("#" + list + "");                                // 这几个初始化全局的百度文档上没说明
        var GUID = WebUploader.Base.guid();                            // 一个GUID
		
        var uploader = WebUploader.create({
		// ZTX-002折腾侠：增加从服务器上删除对应文件的操作,并开启允许重复上传
			duplicate :true,
            auto: true,                                                // 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf',     // 加载swf文件，路径一定要对
            server: '<?php echo url("upload/index"); ?>' + '?upload_type=' + type+'&path='+path, // 文件接收服务端//ZTX-004重新设置上传文件目录：“+'&path='+path”
			
            pick: '#' + filePicker_image,                              // 选择文件的按钮。可选。
            resize: false,                                             // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            chunked: true,                                             // 是否分片
            chunkSize: 5 * 1024 * 1024,                                // 分片大小
            threads: 1,                                                // 上传并发数
            formData: {
                // 由于Http的无状态特征，在往服务器发送数据过程传递一个进入当前页面是生成的GUID作为标示
                GUID: GUID,                                            // 自定义参数
            },
            compress: false,
            fileSingleSizeLimit: size,                                 // 限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,                     // 限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,                           // 允许上传的类型 'gif,jpg,jpeg,bmp,png'
                mimeTypes: '*',                                        // 默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            if (response.code == 0) {
                $.modal.alertError(response.msg);
            }
            var url = response.url;
            if (more == true) {
			// <!-- ZTX-004 设置图片预览   by 折腾侠 -->
			
			if(type=='img'){
			
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-4"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/><input type="text" name="' + image + '_small[]" value="' + response.small + '" class="hide"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					'   <div class="col-4 col-sm-2"><a href="'+ url +'" target="_blank"> <img class="image_preview_info" src="'+ response.small +'"  ></a></div>'+
					
					
                    '</div>';}
			else{
			var images = '' +
                    '<div class="row no-gutters">' +
                    '   <div class="col-4 col-sm-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div>' +
                    '   <div class="col-3 col-sm-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div>' +
                    '   <div class="col-4 col-sm-3">' +
                    '       <div class="btn-group">' +
                    '           <button type="button" class="btn btn-default btn-sm move_up_images"><i class="fa fa-chevron-up"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm move_down_images"><i class="fa fa-chevron-down"></i></button>' +
                    '           <button type="button" class="btn btn-default btn-sm remove_images"><i class="fa fa-times"></i></button>' +
                    '       </div>' +
                    '   </div>' +
					
                    '</div>';
			}
                
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);
				// <!--ZTX-004  设置图片预览   by 折腾侠 -->
	
				
            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
                $("#" + image_preview).parent("a").attr('href', url);
			
            }
        });
        uploader.on('uploadComplete', function (file) {
        //   <!-- ZTX-001-折腾侠：当多个文件上传完成后，原代码把“.progress”元素设置成隐藏，导致第二个文件上传以后的进度条无法显示。 -->
			// <!-- 原代码：$list.find('.progress').fadeOut();  -->
			
            $list.find('.progress').remove();
			
			//  <!-- ZTX-001折腾侠：上传完成后，把“.progress”元素直接删除，下一个文件上传时就会显示进度条。 -->
			
        });
        // 错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                $.modal.alertError('请上传' + upload_allowext + '格式的文件！');
            } else if (type == "F_EXCEED_SIZE") {
                $.modal.alertError('单个文件大小不能超过' + size / 1024 + 'kb！');
            } else if (type == "F_DUPLICATE") {
                $.modal.alertError('请不要重复选择文件');
            } else {
                $.modal.alertError('上传出错！请检查后重新上传！错误代码' + type);
            }
        });
    }
</script>
<?php if($system['editor'] == '1'): ?>
<!-- ueditor -->
<script src="/static/plugins/ueditor/ueditor.config.js"></script>
<script src="/static/plugins/ueditor/ueditor.all.min.js"> </script>
<script src="/static/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<?php else: ?>
<!-- ckeditor4 -->
<script src="/static/plugins/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<!-- Bootstrap Table -->
<link rel="stylesheet" href="/static/plugins/bootstrap-table/bootstrap-table.min.css" />
<!-- layer 弹层组件 -->
<script>
    layui.use('layer',
        function () {
            var layer = layui.layer;
        })
</script>
<!-- zTree 树节点组件 -->
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="/static/plugins/zTree_v3/js/jquery.ztree.excheck.js"></script>
<!-- jQueryTagsInput -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
<script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<script src="/static/plugins/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/codemirror/theme/monokai.css">

<!-- SIYUCMS -->
<link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css?v=20211203">
<script src="/static/plugins/siyu-ui.js?v=20211203"></script>
<script src="/static/plugins/siyucms.js?v=20211203"></script>
<!-- jQuery-ui ZTX-005-->
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.structure.css">
<link rel="stylesheet" href="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.theme.css">
<script src="/static/plugins/jquery-ui-1.13.1.custom/jquery-ui.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary text-sm <?php if($layer == true): ?>layer-body<?php endif; ?>" data-display_mode="<?php echo htmlentities($system['display_mode']); ?>">
<div class="wrapper">

<?php if($iframe == false && $layer == false): ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Left navbar links -->
        <ul class="navbar-nav js_left_menu">
            <li class="nav-item active">
                <a class="nav-link" href="javascript:;">
                    <i class="fas fa-cog"></i>
                    <span>主导航</span>
                </a>
            </li>
            <?php if(count($cates)): ?>
            <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                    <i class="fa fa-th-large"></i>
                    <span>内容管理</span>
                </a>
            </li>
            <?php endif; ?>
           
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- User Account Menu -->
            <li class="nav-item dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                    <span class="d-none d-lg-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">
                        <h5>上次登录时间：<?php echo session('admin.login_time'); ?></h5>
                        <h5>上次登录IP：<?php echo session('admin.login_ip'); ?></h5>
                    </li>
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                        </div>
                    </li>
                </ul>
            </li>
            
            
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button" title="全屏">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" title="自定义">
                    <i class="fas fa-palette"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js_clear_cash" href="javascript:;" title="清空缓存">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo htmlentities($indexUrl); ?>" target="_blank" title="前台首页">
                    <i class="fas fa-home"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->
<?php endif; ?>
            <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-default elevation-4">
        <!-- Brand Logo -->
        <a href="<?php echo url('Index/index'); ?>" class="brand-link">
		
		<!-- 折腾侠：修改后台logo和名称为动态 -->
            <img src="<?php echo htmlentities((isset($system['backstage_logo']) && ($system['backstage_logo'] !== '')?$system['backstage_logo']:'/static/plugins/AdminLTE/dist/img/AdminLTELogo.png')); ?>" alt="<?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo htmlentities((isset($system['backstage_name']) && ($system['backstage_name'] !== '')?$system['backstage_name']:'SIYUCMS')); ?></span>
        </a>
		<!-- 折腾侠：修改后台logo和名称为动态 -->
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo session('admin.image') ?: '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="<?php echo url('Admin/edit',['id'=>session('admin.id')]); ?>" class="d-block"><?php echo session('admin.nickname') ?: session('admin.username'); ?></a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2 mb-2">
                <ul class="nav nav-pills no_radius nav-sidebar flex-column nav-child-indent js_left_menu_show" data-widget="treeview" role="menu" data-accordion="true">
                    <li data-item="0" class="nav-header nav-item_0">主导航</li>
                    <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="0" class="nav-item nav-item_0 has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon <?php echo htmlentities((isset($vo['icon']) && ($vo['icon'] !== '')?$vo['icon']:'fas fa-bars')); ?>"></i>
                            <p>
                                <?php echo htmlentities($vo['title']); ?>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item <?php if(count($voo['children'])): ?>has-treeview<?php endif; ?>">
                                <a href="<?php if(count($voo['children'])): ?>#<?php else: ?><?php echo htmlentities($voo['href']); ?><?php endif; ?>" class="nav-link">
                                    <i class="<?php echo htmlentities((isset($voo['icon']) && ($voo['icon'] !== '')?$voo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                    <p><?php echo htmlentities($voo['title']); if(count($voo['children'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?></p>
                                </a>
                                <?php if(count($voo['children'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['children']) || $voo['children'] instanceof \think\Collection || $voo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo htmlentities($vooo['href']); ?>" class="nav-link">
                                            <i class="<?php echo htmlentities((isset($vooo['icon']) && ($vooo['icon'] !== '')?$vooo['icon']:'far fa-circle')); ?> nav-icon"></i>
                                            <p><?php echo htmlentities($vooo['title']); ?></p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <li data-item="1" class="nav-header nav-item_1" style="display: none">内容管理</li>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li data-item="1" class="nav-item nav-item_1 <?php if(count($vo['sub'])): ?>has-treeview<?php endif; ?>" style="display: none">
                        <a href="<?php if(count($vo['sub'])): ?>#<?php else: ?><?php echo url($vo['module']['model_name'].'/index',['cate_id'=>$vo['id']]); ?><?php endif; ?>" class="nav-link">
                            <i class="fas fa-bars nav-icon"></i>
                            <p>
                                <?php echo htmlentities($vo['cate_name']); if(count($vo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                            </p>
                        </a>
                        <?php if(count($vo['sub'])): ?>
                        <ul class="nav nav-treeview">
                            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                            <li class="nav-item">
                                <a href="<?php echo url($voo['module']['model_name'].'/index',['cate_id'=>$voo['id']]); ?>" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <?php echo htmlentities($voo['left_html']); ?>
                                    <p>
                                        <?php echo htmlentities($voo['original_cate_name']); if(count($voo['sub'])): ?><i class="right fas fa-angle-left"></i><?php endif; ?>
                                    </p>
                                </a>
                                <?php if(count($voo['sub'])): ?>
                                <ul class="nav nav-treeview">
                                    <?php if(is_array($voo['sub']) || $voo['sub'] instanceof \think\Collection || $voo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                                    <li class="nav-item">
                                        <a href="<?php echo url($vooo['module']['model_name'].'/index',['cate_id'=>$vooo['id']]); ?>" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <?php echo htmlentities($vooo['left_html']); ?>
                                            <p>
                                                <?php echo htmlentities($vooo['original_cate_name']); ?>
                                            </p>
                                        </a>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <script>
        // 主导航、内容管理切换
        $(".js_left_menu li").click(function () {
            // 通过 .index()方法获取元素下标（从0开始）
            var _index = $(this).index();
            // 让左侧菜单第 _index 个显示出来，其他的隐藏起来
            $(".js_left_menu_show > li").hide();
            $(".js_left_menu_show > li.nav-item_" + _index).show();
            // 当前菜单添加选中效果，同级的移除选中效果
            $(this).addClass('active').siblings('li').removeClass('active');
        })

        // 清空缓存
        $(".js_clear_cash").click(function () {
            var url = "<?php echo url('index/clear'); ?>";
            $.modal.confirm('确定要清除缓存吗？', function () {
                $.post(url, {
                    del: true
                }, function (result) {
                    if (result.error == 0) {
                        $.modal.alertSuccess(result.msg, function (index) {
                            layer.close(index);
                            $.pjax.reload('.content-wrapper'); // pjax 重载
                        });
                    } else {
                        $.modal.alertError(result.msg);
                    }
                });
            });
        })

    </script>
        <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="600">
            <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
                <div class="nav-item dropdown">
                    <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
                    <div class="dropdown-menu mt-0">
                        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
                        <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
                    </div>
                </div>
                <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
                <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
                <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
                <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
            </div>
            <div class="tab-content">
                <div class="tab-empty">
                    <?php if(isset($page_title) && !empty($page_title)): ?>
<div class="content-header">
    <div class="container-fluid">
       <!-- ZTX-006，修改表格自动以页面标题样式。 -->
		<h1 class="m-0">
                    <?php echo (isset($page_title) && ($page_title !== '')?$page_title:''); ?>
                </h1>
				 <!-- ZTX-006，修改表格自动以页面标题样式。 -->
    </div>
</div>
<?php elseif($breadCrumb): ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?php echo htmlentities($breadCrumb['left']['0']); ?>
                    <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('index/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?php endif; ?>
                    <!--内容开始-->
<section class="content content_main">
    <?php if($indexTips): ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-default-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $indexTips; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!--快捷方式-->
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fa fa-gift"></i> 快捷方式</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <a class="btn btn-app" href="<?php echo url('system/edit',['id'=>1]); ?>"><i class="fa fa-cogs"></i>系统设置</a><a
                                class="btn btn-app" href="<?php echo url('database/database'); ?>"><i class="fa fa-database"></i>数据备份</a><a
                                class="btn btn-app" href="<?php echo url('module/index'); ?>"><i class="fa fa-th-list"></i>模型管理</a><a
                                class="btn btn-app" href="<?php echo url('cate/index'); ?>"><i class="fa fa-th"></i>栏目管理</a><a
                                class="btn btn-app" href="<?php echo url('link/index'); ?>"><i class="fa fa-link"></i>友情链接</a><a
                                class="btn btn-app" href="<?php echo url('ad/index'); ?>"><i class="fa fa-ad"></i>广告管理</a><a
                                class="btn btn-app" href="<?php echo url('debris/index'); ?>"><i class="fa fa-puzzle-piece"></i>碎片管理</a><a
                                class="btn btn-app" href="<?php echo url('template/index'); ?>"><i class="fa fa-code"></i>模板管理</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
            </div>
                <!--数据统计-->
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-chart-bar"></i> 数据统计</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row pt-1 pb-1">
                                <!-- ./col -->
                                <div class="col-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3><?php echo htmlentities($message); ?></h3>
                                            <p>待处理留言</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-android-clipboard"></i>
                                        </div>
                                        <a href="<?php echo htmlentities($messageCatUrl); ?>" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-6">
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3><?php echo htmlentities($user); ?></h3>
                                            <p>一周用户注册</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="<?php echo url('users/index'); ?>" class="small-box-footer">更多信息 <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
            </div>
            </div>
            <div class="row">
                <!--系统信息-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fa fa-cog"></i> 系统信息</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <table class="table table-striped">
                                <tr>
                                    <td>网站域名</td>
                                    <td><?php echo htmlentities($config['url']); ?></td>
                                </tr>
                                <tr>
                                    <td>网站目录</td>
                                    <td><?php echo htmlentities($config['document_root']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统</td>
                                    <td><?php echo htmlentities($config['server_os']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器端口</td>
                                    <td><?php echo htmlentities($config['server_port']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器IP</td>
                                    <td><?php echo htmlentities($config['server_ip']); ?></td>
                                </tr>
                                <tr>
                                    <td>WEB运行环境</td>
                                    <td><?php echo htmlentities($config['server_soft']); ?></td>
                                </tr>
                                <tr>
                                    <td>MySQL数据库版本</td>
                                    <td><?php echo htmlentities($config['mysql_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>运行PHP版本</td>
                                    <td><?php echo htmlentities($config['php_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>最大上传限制</td>
                                    <td><?php echo htmlentities($config['max_upload_size']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <!--版本信息-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-tag"></i> 版本信息</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <table class="table table-bordered">
                                <tr>
                                    <td class="text-center">当前版本</td>
                                    <td>SIYUCMS V<?php echo htmlentities($config['siyu_version']); ?>&ensp;折腾侠修改版</td>
                                </tr>
                                <tr>
                                    <td class="text-center">基于框架</td>
                                    <td>ThinkPHP <?php echo htmlentities($config['version']); ?> + AdminLTE</td>
                                </tr>
                                <tr>
                                    <td valign="middle" class="text-center" style="padding-top:15px">获取授权</td>
                                    <td>
                                        <a href="http://www.siyucms.com" target="_blank" class="btn btn-flat btn-info">获取授权</a>&nbsp;&nbsp;
                                        <a href="https://gitee.com/ruoshuiyx/tp6" target="_blank" class="btn btn-flat btn-warning">查看更新</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="study">
									<div class="card-body">
                                        <a href="https://www.kancloud.cn/ruoshuiyx/siyucms" target="_blank" class="btn btn-app ">SIYUCMS 开发手册</a>
                                        <a href="https://www.kancloud.cn/manual/thinkphp6_0" target="_blank" class="btn btn-app ">ThinkPHP6 开发手册</a>
										<a href="https://www.bootstrap-table.com.cn/doc/api/table-options/" target="_blank" class="btn btn-app ">bootstrap-table 中文文档</a>
										<a href="https://jqueryui.com/autocomplete/" target="_blank" class="btn btn-app ">autocomplete自动完成插件文档</a>
										<a href="https://codemirror.net/doc/manual.html" target="_blank" class="btn btn-app ">CodeMirror用户手册</a>
                                        <a href="https://www.runoob.com/jquery/jquery-tutorial.html "target="_blank" class="btn btn-app ">jQuery 菜鸟教程</a>
                                        <a href="https://phpoffice.github.io/PhpSpreadsheet/namespaces/phpoffice-phpspreadsheet.html" target="_blank" class="btn btn-app ">phpoffice-phpspreadsheet API文档</a>
										</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--推荐-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-bullhorn"></i> 推荐</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body main_ad" style="display: block;">
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--作者-->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header ui-sortable-handle">
                            <h3 class="card-title"><i class="fas fa-bookmark"></i> 作者</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <p class="mb-2">SIYUCMS 基于 ThinkPHP <?php echo htmlentities($config['version']); ?> + AdminLTE-3 开发<br>简单 / 易用 / 响应式 / 低门槛 。</p>
                            <p class="mb-2">请尊重SIYUCMS开发者的劳动成果，未授权前请保留前台 Powered by SIYUCMS ，并不得修改后台版权信息。</p>
                            <p class="mb-1 text-info juanzeng">如果SIYUCMS有帮到您，就请作者喝杯茶吧!</p>
                            <p class="mb-1 text-info ZTX">如果折腾侠有帮到您，就请折腾侠喝点泡沫吧!</p>
                            <small>--<cite class="text-muted">感谢您的使用！</cite></small>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://www.siyucms.com/ad.js?date=<?php echo date('Y-m-d'); ?>"></script>


                    <!--<h2 class="display-4">No tab selected!</h2>-->
                </div>
                <!--<div class="tab-loading">
                    <div>
                        <h2 class="display-4">loading <i class="fa fa-sync fa-spin"></i></h2>
                    </div>
                </div>-->
            </div>
        </div>
    <?php endif; if($layer == false): ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
	
	 <!--折腾侠：修改版权信息为动态，可自定义。原代码如下：
		 
		 <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="https://siyucms.com" target="_blank">siyucms.com</a>.</strong> -->
        <strong>Copyright &copy; 2019-<?php echo date("Y"); ?> <a href="<?php echo htmlentities((isset($system['rights_link']) && ($system['rights_link'] !== '')?$system['rights_link']:'https://siyucms.com')); ?>" target="_blank"><?php echo htmlentities((isset($system['rights']) && ($system['rights'] !== '')?$system['rights']:'siyucms.com')); ?></a>.</strong>
		 <!-- 折腾侠 -->
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> <?php echo config('app.siyu_version'); ?>-折腾侠修改版
        </div>
    </footer>
<?php endif; ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>
<!-- Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/plugins/moment/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/plugins/moment/locale/zh-cn.js"></script>
<script src="/static/plugins/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/static/plugins/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/static/plugins/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/static/plugins/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Toastr -->
<script src="/static/plugins/AdminLTE/plugins/toastr/toastr.min.js"></script>
<!-- pace-progress -->
<script src="/static/plugins/AdminLTE/plugins/pace-progress/pace.min.js"></script>
<!-- Bootstrap Table 表格插件样式 -->
<script src="/static/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/static/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/toolbar/bootstrap-table-toolbar.min.js"></script>
<link rel="stylesheet" href="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.css"/>
<script src="/static/plugins/bootstrap-table/extensions/fixed-columns/bootstrap-table-fixed-columns.min.js"></script>

<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- CodeMirror -->
<script src="/static/plugins/AdminLTE/plugins/codemirror/codemirror.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/css/css.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/xml/xml.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/javascript/javascript.js"></script>
<script src="/static/plugins/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- jquery-treegrid -->
<link rel="stylesheet" href="/static/plugins/jquery-treegrid/css/jquery.treegrid.css">
<script src="/static/plugins/jquery-treegrid/js/jquery.treegrid.js"></script>
<script src="/static/plugins/bootstrap-table/extensions/treegrid/bootstrap-table-treegrid.js"></script>

<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>


<?php if($system['display_mode'] == 0): ?>

<script type="text/javascript">
    $(function () {
        // 跳转页
        $(document).on('pjax:complete', function (event, xhr, textStatus, options) {
            var url = xhr.getResponseHeader('X-PJAX-URL');
            if (url) {
                $.pjax({url: url, container: '.content-wrapper'})
            }
        });

        // a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');

        // form 表单
        $(document).on('submit', 'form[data-pjax]', function (event) {
            $.pjax.submit(event, '.content-wrapper');
        });

        // 阻止超时导致的链接跳转(ajax默认超时时间650毫秒，超时后强制刷新整个页面)
        $(document).on('pjax:timeout', function (event) {
            event.preventDefault()
        });

        // 重新加载
        //$.pjax.reload('.content-wrapper');
    
	
	
	
	
	
	
	
	
	
	
	
	
	
	})
	
	
	
	
	
	
	
	
</script>





<?php endif; ?>
</body>
</html>
<?php endif; ?>



