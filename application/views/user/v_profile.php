<!-- section featured -->


<section id="content">
    <div class="container">
        <?= validation_errors(); ?>

        <div class="row">
            <div class="span6">
                <center><img src="<?= base_url('assets/profile/') . $user['gambar'] ?>" width="50%" alt="" class="flyLeft" /></center>
            </div>
            <div class="span6">
                <div class="flyRight">
                    <h4><strong><span class="colored">My Profile</span></strong></h4>
                    <div class="row">
                        <div class="span2">
                            <div>
                                <h4>Nama</h4>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="form-group span">
                                <p><?= $user['nama'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span2">
                            <div>
                                <h4>Email</h4>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="form-group span">
                                <p><?= $user['email'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span2">
                            <div>
                                <h4>No Hp</h4>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="form-group span">
                                <p><?= $user['no_hp'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span7">
                            <div>
                                <h4>Tanggal Menjadi Member</h4>
                            </div>
                        </div>
                        <div class="span12">
                            <div class="form-group span">
                                <?= date('d/m/Y', $user['tgl_buat']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button data-toggle="modal" data-target="#myModal" class="btn btn-sm btn-primary" style="width: 100%;">Edit Profil</button>
        </div>
        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="span6">
                <div class="flyLeft">
                    <h4><strong><span class="colored">Responsive</span> design</strong></h4>
                    <p>
                        Lorem ipsum dolor sit amet, oporteat reformidans mei ut, sea simul intellegat ad. Accusata forensibus sed ne. Eu quas nemore aliquid eam. Lorem munere graeco ad eum.
                    </p>
                    <p>
                        Est ne prima voluptatum, ea nam scripta invidunt petentium. Has ad summo aeterno maiorum. Partiendo scriptorem pri ad, pro choro sadipscing ne, ad usu tempor deleniti. Esse animal qualisque qui id. Sea habemus quaestio delicata an
                    </p>
                    <div class="blankline"></div>
                    <p><a href="#" class="btn btn-success btn-medium">Learn more</a> <a href="#" class="btn btn-theme btn-medium">Live preview</a></p>
                </div>
            </div>
            <div class="span6">
                <img src="img/lp/imac.png" alt="" class="flyRight" />
            </div>

        </div>
        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>
        <div class="row">
            <div class="span12 aligncenter">
                <h3 class="title">What people <strong>saying</strong> about us</h3>
                <div class="blankline30"></div>

                <ul class="bxslider">
                    <li>
                        <blockquote>
                            Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                            feugiat
                        </blockquote>
                        <div class="testimonial-autor">
                            <img src="img/dummies/testimonial/1.png" alt="" />
                            <h4>Hillary Doe</h4>
                            <a href="#">www.companyname.com</a>
                        </div>
                    </li>
                    <li>
                        <blockquote>
                            Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                            feugiat
                        </blockquote>
                        <div class="testimonial-autor">
                            <img src="img/dummies/testimonial/2.png" alt="" />
                            <h4>Michael Doe</h4>
                            <a href="#">www.companyname.com</a>
                        </div>
                    </li>
                    <li>
                        <blockquote>
                            Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                            feugiat
                        </blockquote>
                        <div class="testimonial-autor">
                            <img src="img/dummies/testimonial/3.png" alt="" />
                            <h4>Mark Donovan</h4>
                            <a href="#">www.companyname.com</a>
                        </div>
                    </li>
                    <li>
                        <blockquote>
                            Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
                            feugiat
                        </blockquote>
                        <div class="testimonial-autor">
                            <img src="img/dummies/testimonial/4.png" alt="" />
                            <h4>Marry Doe Elliot</h4>
                            <a href="#">www.companyname.com</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="cta-box">
                    <div class="row">
                        <div class="span8">
                            <div class="cta-text">
                                <h2>Special price in very <span>limited</span> times</h2>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="cta-btn">
                                <a href="#" class="btn btn-theme">Grab it now <i class="icon-angle-right"></i></a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div> -->

    </div>
</section>


<!-- <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Launch demo modal</a> -->

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <form action="<?= base_url('profile/edit') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="span">
                    <div class="form-group"><label for="">Nama</label>
                        <input type="text" class="form-control span5" name="nama" value="<?= $user['nama'] ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">
                    </div>
                </div>
                <div class="span">
                    <div class="form-group"><label for="">Email</label>
                        <input type="text" class="form-control span5" name="email" value="<?= $user['email'] ?>" readonly>
                    </div>
                </div>
                <div class="span">
                    <div class="form-group"><label for="">Password</label>
                        <input type="text" class="form-control span5" name="password" value="<?= $user['password'] ?>">
                    </div>
                </div>
                <div class="span">
                    <div class="form-group"><label for="">No Hp</label>
                        <input type="text" class="form-control span5" name="no_hp" value="<?= $user['no_hp'] ?>">
                    </div>
                </div>
                <div class="span">
                    <label for="">Gambar</label>
                    <div class="span">
                        <div class="row">
                            <div class="span">
                                <img src="<?= base_url('assets/profile/') . $user['gambar'] ?>" width="10%" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar">
                                    <!-- <label class="custom-file-label" for="image">Choose file</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary" type="submit">Save changes</button>
    </div>
    </form>
</div>