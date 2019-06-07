<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="alert alert-success alert-dismissible success_msg_delete hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <div class="alert alert-danger alert-dismissible error_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <div class="alert alert-success alert-dismissible success_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <div class="header">
                <h2>
                    STUDENTS TABLE
                </h2>
<!--                <ul class="header-dropdown m-r--5">-->
<!--                    <li class="dropdown">-->
<!--                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--                            <i class="material-icons">more_vert</i>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu pull-right">-->
<!--                            <li><a href="javascript:void(0);">Action</a></li>-->
<!--                            <li><a href="javascript:void(0);">Another action</a></li>-->
<!--                            <li><a href="javascript:void(0);">Something else here</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Control</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    foreach ($students as $student){ ?>
                        <tr class="tr_<?= $student->user_id ?>">
                            <td><?= $student->full_name ?></td>
                            <td><?= $student->user_email ?></td>
                            <td><?= $student->gender ?></td>
                            <td>

                                <?php  if ($student->approve == 1) {
                                    $color = 'btn-success';
                                    $approve = 'non-active';
                                    $title = 'ACTIVE';
                                } else {
                                    $color = 'btn-warning';
                                    $approve = 'active';
                                    $title = 'DES ACTIVE';
                                }?>

                                <div class="button-demo">
                                    <button data-href = "<?=  $this->route->baseUrl() . 'students/active' ?>" data-user-id="<?= $student->user_id ?>" type="button" class="btn <?=$color?> waves-effect approve_user <?= $approve ?>"><?=$title?></button>
                                    <button data-href = "<?=  $this->route->baseUrl() . 'students/delete' ?>" type="button" id="delete_user" data-user-id="<?= $student->user_id ?>" class="btn bg-red waves-effect delete_user">DELETE</button>
                                    <a target="_blank" href = "<?=  $this->route->baseUrl() . 'students/view/' . $student->user_id ?>" id="view_user" class="btn btn-primary view_user">VIEW</a>
                                </div>`
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->


<!-- Modal -->

<div class="modal fade user_edit_modal" id="user_edit_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLongTitle">Edit incident</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Start alert msg-->
            <div class="alert alert-danger alert-dismissible error_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <div class="alert alert-success alert-dismissible success_msg hidden" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <span class="span_msg"></span>
            </div>
            <!-- End alert msg-->
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="edit_user" >Save changes</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>