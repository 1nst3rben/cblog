<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <br/>
                    <ol class="breadcrumb">
                      <li><a href="<?=site_url('mailworm')?>">Home</a></li>
                      <li class="active"><?=$lower = strtolower($header)?></li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div  class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i>
                            <span class="break"></span>
                            Table <?=$header?>
                            <div class="pull-right">
                                <button id="addta" class="btn btn-default btn-header" data-toggle="tooltip" data-placement="top" title="Add Gallery !" ><i class="fa fa-plus"></i></button>
                                <span id="tooltip" class="btn btn-default btn-header" data-toggle="collapse" data-target="#panel" rel="tooltip" title="Hide"><i class="fa fa-chevron-up fa-fw" ></i></span>
                                
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div id="panel" class="panel-body collapse in">
                            <div class="masonry">
                            </div>                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->