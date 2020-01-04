<?php require view('static/header')?>


<?php ?>

<style>

    img {
        height: 100%;
        animation: shake 10s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% { transform: translate(-1px, -4px) rotate(0deg); }
        10% { transform: translate(-3px, -6px) rotate(-1deg); }
        20% { transform: translate(-6px, 3px) rotate(1deg); }
        30% { transform: translate(6px, 5px) rotate(0deg); }
        40% { transform: translate(4px, -4px) rotate(1deg); }
        50% { transform: translate(-4px, 5px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(5px, 4px) rotate(-1deg); }
        80% { transform: translate(-5px, -4px) rotate(1deg); }
        90% { transform: translate(3px, 5px) rotate(0deg); }
        100% { transform: translate(2px, -4px) rotate(-1deg); }
    }

    .center{
        text-align: center;
        margin-top: 8%!important;

    }
    .center a{
        font-size: 20px;
        color: #96CDEF;
        text-decoration: none;
    }
    div.container6 {
        height: 60%;
        display: flex;
        align-items: center;
        justify-content: center }
    div.container6 p {
        margin: 0 }
</style>
<div class="center">
   <b><a href="<?= site_url('')?>">404 Not Found</a></b>
</div>
<div style="width: 100%; height: 100% ;align-items: center">
    <div class="container6 shake">
        <img class="" src="<?= public_url('404.png') ?>" style="width: 500px" alt="">
    </div>

</div>



<div class="fixed-bottom">
    <?php require view('static/footer')?>

</div>

