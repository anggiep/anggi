        <?php 
        $page_id = null;
        $comp_model = new SharedController;
        ?>
        <div  class=" py-5">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 comp-grid">
                        <div class="">
                            <div class="fadeIn animated mb-4">
                                <div class="text-capitalize">
                                    <h2 class="text-capitalize">Welcome To <?php echo SITE_NAME ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 comp-grid">
                        <?php $this :: display_page_errors(); ?>
                        
                        <div  class="bg-light p-3 animated fadeIn page-content">
                            <div>
                                <h4><i class="fa fa-key"></i> User Login</h4>
                                <hr />
                                <?php 
                                $this :: display_page_errors(); 
                                ?>
                                <form name="loginForm" action="<?php print_link('index/login/?csrf_token=' . Csrf::$token); ?>" class="needs-validation form page-form" method="post">
                                    <div class="input-group form-group">
                                        <input placeholder="Username Or Email" name="username"  required="required" class="form-control" type="text"  />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group form-group">
                                        <input  placeholder="Password" required="required" v-model="user.password" name="password" class="form-control " type="password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                                        </div>
                                    </div>
                                    <div class="row clearfix mt-3 mb-3">
                                        <div class="col-6">
                                            <label class="">
                                                <input value="true" type="checkbox" name="rememberme" />
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <a href="<?php print_link('passwordmanager') ?>" class="text-danger"> Reset Password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-primary btn-block btn-md" type="submit"> 
                                            <i class="load-indicator">
                                                <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader> 
                                            </i>
                                            Login <i class="fa fa-key"></i>
                                        </button>
                                    </div>
                                    <hr />
                                    <div class="text-center">
                                        Don't Have an Account? <a href="<?php print_link("index/register") ?>" class="btn btn-success">Register
                                        <i class="fa fa-user"></i></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">
                        <?php $rec_count = $comp_model->getcount_role();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("role/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Role</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                        <?php $rec_count = $comp_model->getcount_pengguna();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("users/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Pengguna</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                        <?php $rec_count = $comp_model->getcount_passwordresets();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("password_resets/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Password Resets</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 comp-grid">
                    </div>
                    <div class="col-md-6 comp-grid">
                        <?php $rec_count = $comp_model->getcount_users();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("users/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Users</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                        <?php $rec_count = $comp_model->getcount_buku();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("buku/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Buku</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                        <a  class="btn btn-primary" href="<?php print_link("index") ?>">
                            Button 
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">
                        <button data-toggle="modal" data-target="#Modal-1-Page1" class="btn btn-primary">  Open Modal</button>
                        <div data-backdrop="true" class="modal fade" id="Modal-1-Page1" tabindex="-1" role="dialog" aria-labelledby="Modal2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">  Modal Contents</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0 reset-grids">
                                        <div id="Comp-1-Accordion-Group" role="tablist" class="accordion-group">
                                            <div class="card">
                                                <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page1" role="tab">
                                                    Title 1 <span class="expand text-muted">+</span>
                                                </div>
                                                <div id="Accordion-1-Page1" class="collapse show" data-parent="#Comp-1-Accordion-Group">
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page2" role="tab">
                                                    Title 2 <span class="expand text-muted">+</span>
                                                </div>
                                                <div id="Accordion-1-Page2" class="collapse show" data-parent="#Comp-1-Accordion-Group">
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page3" role="tab">
                                                    Title 3 <span class="expand text-muted">+</span>
                                                </div>
                                                <div id="Accordion-1-Page3" class="collapse show" data-parent="#Comp-1-Accordion-Group">
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header accordion-header" data-toggle="collapse" data-target="#Accordion-1-Page4" role="tab">
                                                    Title 4 <span class="expand text-muted">+</span>
                                                </div>
                                                <div id="Accordion-1-Page4" class="collapse show" data-parent="#Comp-1-Accordion-Group">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button data-toggle="modal" data-target="#Modal-1-Page2" class="btn btn-primary">  Open Modal</button>
                        <div data-backdrop="true" class="modal fade" id="Modal-1-Page2" tabindex="-1" role="dialog" aria-labelledby="Modal2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">  Modal 2</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body p-0 reset-grids">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=""><div></div>
                        </div><h4 ></h4>
                        <?php $rec_count = $comp_model->getcount_pengguna();  ?>
                        <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("users/") ?>">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="col-10">
                                    <div class="flex-column justify-content align-center">
                                        <div class="title">Pengguna</div>
                                        <small class=""></small>
                                    </div>
                                </div>
                                <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        