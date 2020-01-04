<?php require view('static/header')?>

<style>
    .text-image{
        background-image: url("https://images.unsplash.com/photo-1577906022799-041a742c2cdb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 5px;
    }



</style>
<div class="row mr-1"  style="margin-left: 3px; margin-bottom: 1000px">
    <div class="col-lg-3  text-image shadow text-center" >
        <img    class="my-3"
                style="box-shadow: 1px 1px 1px #aaaaaa;width: 200px;height: 200px;border-radius: 100%"
                src="https://images.unsplash.com/photo-1577624760632-79aaff32da6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">

    </div>
    <div class="col-lg-9 p-2 p-0">
        <h5 style="">John Doe</h5>
        <h6 style="">@johndoe</h6>
        <p class="text-muted">Lorem ipsum dolor sit amet, magni maiores natus nemo odio quae vel. Commodi exercitationem minima non quas, similique soluta tempora unde veniam!</p>
        <button type="button" class="btn btn-sm " style="background-color: transparent" data-toggle="modal" data-target="#exampleModal">
           <p class="font-weight-bold d-inline-block mb-2"><i class="fas fa-plus"></i> Takip et</p>
        </button>
        <button type="button" class="btn btn-sm " style="background-color: transparent; " data-toggle="modal" data-target="#exampleModal">
           <p class="font-weight-bold d-inline-block mb-2" ><i class="fas fa-pen"></i>Birşeyler yaz</p>
        </button>
    </div>
    <style>
        .pill-nav{
            font-size: 14px;
            border-top-right-radius: 10px!important;
            border-top-left-radius: 10px!important;
            border-bottom-left-radius: 0px!important;
            border-bottom-right-radius: 0px!important;

        }
        .tl{
            text-align: left;
            margin-left: 0px;
        }
    </style>
    <div class="row mt-2 p-2">
        <div class="col-12">

            <ul class="nav nav-pills mb-3 m-0 " id="pills-tab" role="tablist">
                <li class="nav-item tl">
                    <a class="nav-link active  pill-nav" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Yazıları</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pill-nav" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">İlgilendikleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pill-nav" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Beğendikleri</a>
                </li>
            </ul>

        </div>
        <div class="col-12 ml-2">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row mb-3 shadow p-2 ml-flex mr-flex bg ">
                        <div class="col-9 " >
                            <h5>Başlık</h5>
                            <p class="text-muted">Lorem ipsum dra unde veniam unde veniam unde veniam!</p>
                            <small class="">Date 20.01.1998</small>
                            <br>
                            <a href="" class="font-weight-bold d-inline-block mb-2 text-danger " style="font-size: 13px">#tag</a>


                        </div>
                        <div class="col-3 text-image shadow">
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">asdasdasd</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque aut commodi cupiditate dicta doloremque eum eveniet facilis fugit molestias nihil nisi numquam, odio odit officia pariatur perspiciatis quae qui sapiente ut voluptate voluptatem voluptatum. Dolores eaque ipsam soluta! A architecto aspernatur at cupiditate dolore, ducimus ea earum et facere laborum libero minima minus natus nisi odio quae quam quas quidem ratione reiciendis repellat saepe sapiente sed sequi sit tempore tenetur vel? Ab, aperiam aspernatur aut blanditiis dicta distinctio dolor doloribus dolorum enim eos esse ex exercitationem facilis illum in ipsam ipsum labore magnam minima nobis omnis perspiciatis possimus praesentium quam qui rerum sapiente sit soluta temporibus tenetur unde veniam vero vitae! Ab ad aliquid animi aperiam architecto autem consequuntur debitis ducimus ea eius enim eos excepturi expedita facere fuga impedit inventore iure iusto maxime molestiae nemo obcaecati officia officiis pariatur porro quia quibusdam quo repellendus repudiandae rerum sed, tenetur ullam veritatis? Autem consequatur delectus dolor harum illum nam nulla saepe sed soluta veritatis! Aperiam architecto beatae blanditiis ducimus, earum et excepturi id ipsa magni molestiae nemo neque nostrum officiis pariatur perferendis placeat porro provident quaerat quibusdam soluta tempore temporibus tenetur ullam veritatis voluptates? Ab eligendi ex libero ratione repellendus?

                </div>
            </div>
        </div>
    </div>
    <!--
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>
    -->
</div>

<?php require view('static/footer')?>


