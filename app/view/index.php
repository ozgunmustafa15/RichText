<?php require  view('static/header')?>
    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 text-danger font-italic font-weight-bold"><?=setting('welcome_title')?></h1>
            <p class="lead my-3 "><?=setting('welcome_text') ?>.</p>
        </div>
    </div>
<h3 class="pb-1 mb-4 font-italic border-bottom">
    Öne Çıkanlar
</h3>
    <div class="row mb-2">

        <div class="col-lg-6 ">
            <div class="row mb-3 shadow p-2 ml-flex mr-flex bg ">
                <div class="col-9 " >
                    <h5>Başlık</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
                    <small class="">Date 20.01.1998</small>

                </div>
                <div class="col-3 text-image shadow">
                </div>
            </div>
        </div>
        <div class="col-lg-6 "  >
            <div class="row mb-3 shadow p-2 ml-flex mr-flex ">
                <div class="col-9" >
                    <h5>Başlık</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
                    <small class="">Date 20.01.1998</small>

                </div>
                <div class="col-3 text-image shadow">
                </div>
            </div>
        </div>
        <div class="col-lg-6 "  >
            <div class="row mb-3 shadow p-2 ml-flex mr-flex ">
                <div class="col-9" >
                    <h5>Başlık</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
                    <small class="">Date 20.01.1998</small>

                </div>
                <div class="col-3 text-image shadow">
                </div>
            </div>
        </div>
        <div class="col-lg-6 "  >
            <div class="row mb-3 shadow p-2 ml-flex mr-flex ">
                <div class="col-9" >
                    <h5>Başlık</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
                    <small class="">Date 20.01.1998</small>

                </div>
                <div class="col-3 text-image shadow">
                </div>
            </div>
        </div>

    </div>
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <style>
                .text-image{
                    background-image: url("https://images.unsplash.com/photo-1577624760632-79aaff32da6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    border-radius: 5px;
                }
                .ml-flex{
                    margin-left: 1px;
                }
                .mr-flex{
                    margin-right: 1px;
                }
                .bg{
                    background-image: url("https://images.unsplash.com/photo-1519120944692-1a8d8cfc107f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }

                .profile-picture{
                    background-image: url("https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    border-radius: 100%;
                }
            </style>
            <h4 class="pb-1 mb-4 font-italic border-bottom">
                Teknoloji
            </h4>

            <div class="row mb-3 shadow p-2 ml-flex">
                <div class="col-9" >
                    <h5>Başlık</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
                    <small class="">Date 20.01.1998</small>

                </div>
                <div class="col-3 text-image shadow">
                </div>
            </div>



            <div class="blog-post">
                <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <h2>Heading</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <pre><code>Example code block</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                </ol>
                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->



        <aside class="col-md-4 blog-sidebar">

            <h4 class="pb-1 mb-4 font-italic border-bottom">
                Öne Çıkan Yazarlar</h4>
            <div class="pl-2  mb-3 bg-light rounded">
                <div class="w-100 bg-white border-left shadow">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 ">
                            <img style="width: 75px;height: 75px;border-radius: 100%" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div>
                                <strong class="d-inline-block mb-2 text-danger">İsim Soyisim</strong>
                            </div>
                            <small>
                                Aliquam animi, asperiores consectetur cumque dignissimos doloremque eu...

                            </small>
                            <div>
                                <small class="text-muted">Yazar</small>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="pl-2  mb-3 bg-light rounded">
                <div class="w-100 bg-white border-left shadow" >
                    <div>
                        <strong class="d-inline-block mb-2 text-danger">Başlık</strong>
                    </div>
                    Aliquam animi, asperiores consectetur cumque dignissimos doloremque eu...
                    <div>
                        <small class="text-muted">Yazar</small>
                    </div>
                </div>

            </div>


            <div class="p-3">
                <h4 class="font-italic">Öne Çıkan Yazarlar</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <?php foreach (menu('footer_menu')as $key => $menu):?>
                       <li><a class="text-muted dark-a" href="<?=$menu['url']?>"><?=$menu['title']?></a></li>
                    <?php endforeach;?>

                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
<?php require  view('static/footer')?>

