<?php ?>

<style>

    img {
        height: 100%;
        animation: shake 5s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
    }

    .center{
        text-align: center;
        margin-top: 8%!important;

    }
    .center a{
        font-size: 30px;
        color: #E12729;
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
    <a href="<?= admin_url('')?>">&larr;Anasayfaya Dön</a>
</div>
<div style="width: 100%; height: 100% ;align-items: center">
    <div class="container6 shake">
        <img class="" src="<?= admin_public_url('images/permission.png') ?>" alt="">
    </div>

</div>
