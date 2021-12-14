<style>
    .modal-window {
        position: fixed;
        background-color: rgba(255, 255, 255, 0.25);
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s;
    }

    .modal-window:target {
        visibility: visible;
        opacity: 1;
        pointer-events: auto;
    }

    .modal-window>div {
        width: 400px;
        position: absolute;
        top: 63%;
        left: 87%;
        transform: translate(-50%, -50%);
        padding: 2em;
        background: white;
    }

    .modal-window header {
        font-weight: bold;
    }

    .modal-window h1 {
        font-size: 150%;
        margin: 0 0 15px;
    }

    .modal-close {
        color: #aaa;
        line-height: 50px;
        font-size: 80%;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        width: 70px;
        text-decoration: none;
    }

    .modal-close:hover {
        color: black;
    }
    /* Demo Styles */



    a {
        color: inherit;
    }


    .modal-window>div {
        border-radius: 1rem;
    }

    .modal-window div:not(:last-of-type) {
        margin-bottom: 15px;
    }

    ._small {
        color: lightgray;
    }

    ._btn {
        background-color: #fe7774;
        color: white;
        padding: 8px 10px;
        border-radius: 5px;
        text-decoration: none;
    }

    ._btn i {
        padding-right: 0.3em;
    }

    .seaarch {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTermmm {
        width: 100%;
        border: 1.5px solid #2a92bd;
        border-right: none;
        padding: 5px;
        height: 37px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #9DBFAF;
    }

    .searchTermmm:focus {
        color: #2a92bd;
    }

    .searchButtonnn {
        width: 40px;
        height: 36px;
        border: 1px solid #2a92bd;
        background: #2a92bd;
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    .dropdowwwnn {
        width: 100%;
        display: inline-block;
        margin-right: 10px;
        position: relative;
    }

    .dropdowwwnn.toggle>input {
        display: none;
    }

    .dropdowwwnn>a,
    .dropdowwwnn.toggle>label {
        border-radius: 2px;
        box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.3);
    }

    .dropdowwwnn>a::after,
    .dropdowwwnn.toggle>label::after {
        content: "";
        float: right;
        margin: 15px 15px 0 0;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 10px solid #CCC;
    }

    .dropdowwwnn ul {
        list-style-type: none;
        display: block;
        margin: 0;
        padding: 0;
        position: absolute;
        width: 100%;
        box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.3);
        overflow: hidden;
    }

    .dropdowwwnn a,
    .dropdowwwnn.toggle>label {
        display: block;
        padding: 0 0 0 10px;
        text-decoration: none;
        line-height: 40px;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: bold;
        color: #999;
        background-color: #FFF;
    }

    .dropdowwwnn li {
        height: 0;
        overflow: hidden;
        transition: all 500ms;
    }

    .dropdowwwnn.hover li {
        transition-delay: 300ms;
    }

    .dropdowwwnn li:first-child a {
        border-radius: 2px 2px 0 0;
    }

    .dropdowwwnn li:last-child a {
        border-radius: 0 0 2px 2px;
    }

    .dropdowwwnn li:first-child a::before {
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #FFF;
        margin: -10px 0 0 30px;
    }

    .dropdowwwnn a:hover,
    .dropdowwwnn.toggle>label:hover,
    .dropdowwwnn.toggle>input:checked~label {
        background-color: #EEE;
        color: #666;
    }

    .dropdowwwnn>a:hover::after,
    .dropdowwwnn.toggle>label:hover::after,
    .dropdowwwnn.toggle>input:checked~label::after {
        border-top-color: #AAA;
    }

    .dropdowwwnn li:first-child a:hover::before {
        border-bottom-color: #EEE;
    }

    .dropdowwwnn.hover:hover li,
    .dropdowwwnn.toggle>input:checked~ul li {
        height: 40px;
    }

    .dropdowwwnn.hover:hover li:first-child,
    .dropdowwwnn.toggle>input:checked~ul li:first-child {
        padding-top: 15px;
    }

    .createbtn,
    .createbtn:link,
    .createbtn:visited {
        background-color: #2a92bd;
        border: none;
        border-radius: 3px;
        box-shadow: 0 -3px 0 rgba(0, 0, 0, 0.15) inset;
        color: #fff;
        letter-spacing: 0.1em;
        cursor: pointer;
        position: relative;
        text-align: center;
        text-transform: uppercase;
        vertical-align: middle;
        white-space: nowrap;
        transition-property: transform;
        transform: translateZ(0);
        transition: box-shadow 0.5s cubic-bezier(0.39, 0.5, 0.15, 1.36);
    }

    .createbtn:hover,
    .createbtn:link:hover,
    .createbtn:visited:hover {
        box-shadow: 0 0 0 28px rgba(0, 0, 0, 0.25) inset;
    }

    .createbtn:active,
    .createbtn:link:active,
    .createbtn:visited:active {
        transform: translateY(3px);
    }
    .interior{
        margin: auto;
      margin-right: 20px!important;
    }
</style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <div class="interior">
        <a class="btn" style="background-color: #fe7774" href="#open-modal"> Give Quotation</a>
    </div>
<div id="open-modal" class="modal-window">
    <div>
        <a href="#" title="Close" class="modal-close">Close</a>
        <h1 style="color: #2a92bd;">FireFly!</h1>
        <div class="seaarch">
            <input type="text" class="searchTermmm " placeholder="Search from an existing id ">
            <button type="submit " class="searchButtonnn ">
                <i class="fa fa-search "></i>
            </button>
        </div>
        <div style="border: 1px solid #2a92bd; " class="dropdowwwnn hover ">
            <a style="color: #2a92bd; " href="# ">Search from recent 15 quotes</a>
            <ul style="z-index: 2;">
                <li><a href="# ">TRIP ID 14</a></li>
                <li><a href="# ">TRIP ID 24</a></li>
                <li><a href="# ">TRIP ID 34</a></li>
                <li><a href="# ">TRIP ID 44</a></li>
                <li><a href="# ">TRIP ID 54</a></li>
                <li><a href="# ">TRIP ID 64</a></li>
                <li><a href="# ">TRIP ID 74</a></li>
            </ul>
        </div>
        <a style=" padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            display: block;
            margin: 20px auto;" href="#openme" class="btn2 createbtn">Create new Quote</a>


    </div>
</div>
