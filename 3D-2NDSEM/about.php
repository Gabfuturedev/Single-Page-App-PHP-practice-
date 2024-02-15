
<div class="p1"></div>
<style>
    .p1 {
        position: relative;
        background-image: url("prod1.png");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 700px;
        overflow: hidden;
    }.p1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)); /* Adjust the transparency values as needed */
        z-index: 1;
    }
</style>