<!--<style>-->
<!---->
<!--    .modalbg {-->
<!--        position: fixed;-->
<!---->
<!--        top: 0;-->
<!--        right: 0;-->
<!--        bottom: 0;-->
<!--        left: 0;-->
<!--        background: rgba(0, 0, 0, 0);-->
<!--        z-index: 99999;-->
<!--        -moz-transition: all 2s ease-out;-->
<!--        -webkit-transition: all 2s ease-out;-->
<!--        -o-transition: all 2s ease-out;-->
<!--        transition: all 2s ease-out;-->
<!--        -webkit-transition-delay: 0.2s;-->
<!--        -moz-transition-delay: 0.2s;-->
<!--        -o-transition-delay: 0.2s;-->
<!--        -transition-delay: 0.2s;-->
<!--        display: block;-->
<!--        pointer-events: none;-->
<!--        overflow-y: scroll;-->
<!--    }-->
<!--    .modalbg .dialog {-->
<!--        width: 1000px;-->
<!--        position: relative;-->
<!--        min-height: 500px;-->
<!---->
<!---->
<!---->
<!--        top: -1000px;-->
<!--        margin: 10% auto;-->
<!--        padding: 5px 20px 13px 20px;-->
<!--        -moz-border-radius: 10px;-->
<!---->
<!--        background: #fff;-->
<!--        box-shadow: 0 0 10px #000;-->
<!--        -moz-box-shadow: 0 0 10px #000;-->
<!--        -webkit-box-shadow: 0 0 10px #000;-->
<!--        position: relative;-->
<!--    }-->
<!--    .modalbg .dialog .ie7 {-->
<!--        filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);-->
<!--    }-->
<!--    .modalbg:target {-->
<!--        display: block;-->
<!--        pointer-events: auto;-->
<!--        background: rgba(4, 10, 30, 0.8);-->
<!--        -moz-transition: all 0.5s ease-out;-->
<!--        -webkit-transition: all 0.5s ease-out;-->
<!--        -o-transition: all 0.5s ease-out;-->
<!--        transition: all 0.5s ease-out;-->
<!--    }-->
<!--    .modalbg:target .dialog {-->
<!--        top: -20px;-->
<!--        -moz-transition: all 0.8s ease-out;-->
<!--        -webkit-transition: all 0.8s ease-out;-->
<!--        -o-transition: all 0.8s ease-out;-->
<!--        transition: all 0.8s ease-out;-->
<!--        -webkit-transition-delay: 0.4s;-->
<!--        -moz-transition-delay: 0.4s;-->
<!--        -o-transition-delay: 0.4s;-->
<!--        -transition-delay: 0.4s;-->
<!--    }-->
<!--    .close {-->
<!---->
<!---->
<!--        line-height: 25px;-->
<!--        position: absolute;-->
<!--        right: 2px;-->
<!--        text-align: center;-->
<!--        top: -1px;-->
<!--        width: 24px;-->
<!--        text-decoration: none;-->
<!--        font-weight: bold;-->
<!--        -moz-transition: all 0.5s ease-out;-->
<!--        -webkit-transition: all 0.5s ease-out;-->
<!--        -o-transition: all 0.5s ease-out;-->
<!--        transition: all 0.5s ease-out;-->
<!--        -webkit-transition-delay: 0.2s;-->
<!--        -moz-transition-delay: 0.2s;-->
<!--        -o-transition-delay: 0.2s;-->
<!--        -transition-delay: 0.2s;-->
<!--    }-->
<!--    .close .ie7 {-->
<!--        filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);-->
<!--    }-->
<!--    .close:hover {-->
<!--        color: #2a92bd;-->
<!--        -moz-transition: all 0.5s ease-out;-->
<!--        -webkit-transition: all 0.5s ease-out;-->
<!--        -o-transition: all 0.5s ease-out;-->
<!--        transition: all 0.5s ease-out;-->
<!--    }-->
<!---->
<!--    a {-->
<!--        color: #333;-->
<!--        text-decoration: none;-->
<!--    }-->
<!--    .h2div{-->
<!---->
<!--      width: 50%;-->
<!--    }-->
<!--    .h2div h2{-->
<!--        background: -webkit-linear-gradient(#2a92bd, #416d84);-->
<!--        -webkit-background-clip: text;-->
<!--        -webkit-text-fill-color: transparent;-->
<!--    }-->
<!--    input::placeholder, textarea::placeholder{-->
<!--        color: #333333;-->
<!--    }-->
<!--    .form {-->
<!--        display: grid;-->
<!--        grid-template-columns: 1fr 1fr;-->
<!--        grid-gap: 20px;-->
<!--    }-->
<!---->
<!--    .fullwidth {-->
<!--        grid-column: span 2;-->
<!--    }-->
<!---->
<!--    .submit {-->
<!--        grid-column: 2;-->
<!---->
<!--        width: 150px !important;-->
<!--        padding: 10px;-->
<!--        margin-left: 20px;-->
<!--        /*margin-left: 253px !important;*/-->
<!--    }-->
<!---->
<!--    .add{-->
<!--        width: 150px !important;-->
<!--        padding: 10px;-->
<!---->
<!--    }-->
<!---->
<!--    .contaiiiner {-->
<!---->
<!--        margin: 2vw;-->
<!---->
<!--    }-->
<!---->
<!--    input, .tds-textarea {-->
<!--        padding: 5px;-->
<!--    }-->
<!--    .form-field {-->
<!--        margin-bottom: 34px;-->
<!--        overflow: hidden;-->
<!--        padding-bottom: 2px;-->
<!--    }-->
<!--    .label {-->
<!--        display: block;-->
<!--        position: relative;-->
<!--    }-->
<!--    .label::after {-->
<!--        background: #2a92bd;-->
<!--        bottom: -2px;-->
<!--        content: " ";-->
<!--        display: block;-->
<!--        height: 3px;-->
<!--        left: -360px;-->
<!--        position: absolute;-->
<!--        transition: left 0.3s ease;-->
<!--        width: 360px;-->
<!--        z-index: 10;-->
<!--    }-->
<!---->
<!--    .itenarylabel::after{-->
<!---->
<!--        /*width: 100%;*/-->
<!--    }-->
<!--    .label:focus-within .textarea-clone {-->
<!--        height: 140px;-->
<!--        opacity: 0;-->
<!--    }-->
<!--    .label:focus-within::after {-->
<!--        left: 0;-->
<!--    }-->
<!---->
<!--    .label span {-->
<!--        display: block;-->
<!--        color: gray;-->
<!--        font-size: 12px;-->
<!--        letter-spacing: 1px;-->
<!--        line-height: 1.5em;-->
<!--        padding-bottom: 6px;-->
<!--        text-transform: uppercase;-->
<!--    }-->
<!--    input, .tds-textarea {-->
<!--        border: none;-->
<!--        border-bottom: 1px solid #959292;-->
<!--        display: block;-->
<!--        font-size: 18px;-->
<!--        line-height: 1.5em;-->
<!--        outline: none;-->
<!--        padding: 0 3px;-->
<!--        transition: border 0.3s ease, margin 0.3s ease;-->
<!--        width: 354px;-->
<!--    }-->
<!--    input:focus, .tds-textarea:focus {-->
<!--        color: #000000; !important;-->
<!--    }-->
<!--    .textarea-clone {-->
<!--        border-bottom: 2px solid #000000;-->
<!--        display: none;-->
<!--        line-height: 28px;-->
<!--        height: 27px;-->
<!--        opacity: 1;-->
<!--        overflow: hidden;-->
<!--        padding: 0 3px;-->
<!--        position: absolute;-->
<!--        text-overflow: ellipsis;-->
<!--        top: 24px;-->
<!--        transition: opacity 0.5s ease;-->
<!--        white-space: nowrap;-->
<!--        width: 354px;-->
<!--        z-index: -1;-->
<!--    }-->
<!--    .tds-textarea.solid {-->
<!--        background-image: url("data:image/svg+xml,%3Csvg width='18' height='28' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23DADBDB' d='M0 28h18v-1H0z' fill-rule='evenodd'/%3E%3C/svg%3E");-->
<!--    }-->
<!--    .tds-textarea {-->
<!--        background-attachment: local;-->
<!--        background-color: transparent;-->
<!--        line-height: 28px;-->
<!--        margin: 0;-->
<!--        transition: height 0.5s ease, opacity 0.5s ease 0.1s;-->
<!--    }-->
<!--    .tds-textarea:not(:focus) {-->
<!--        height: 27px;-->
<!--    }-->
<!--    .tds-textarea:not(:focus)::-webkit-scrollbar {-->
<!--        display: none;-->
<!--    }-->
<!---->
<!--    .tds-textarea:focus {-->
<!--        height: 139px;-->
<!--    }-->
<!---->
<!--    ::-webkit-scrollbar-track-->
<!--    {-->
<!--        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);-->
<!--        background-color: #F5F5F5;-->
<!--    }-->
<!---->
<!--    ::-webkit-scrollbar-->
<!--    {-->
<!--        width: 10px;-->
<!--        background-color: #F5F5F5;-->
<!--    }-->
<!---->
<!--    ::-webkit-scrollbar-thumb-->
<!--    {-->
<!--        background-color: #CCCCCC;-->
<!--        border: 2px solid #F4F4F4;-->
<!--    }-->
<!--    .sss{-->
<!--        width: 100%;-->
<!--        justify-content: right;-->
<!---->
<!--    }-->
<!---->
<!--</style>-->
<!---->
<!---->
<!--<div id="openme" class="modalbg">-->
<!--    <div class="dialog">-->
<!--        <a href="#close" title="Close" class="close"><i class="material-icons">close</i></a>-->
<!--        <div class="h2div">-->
<!--            <h2>Quotation Form</h2>-->
<!--        </div>-->
<!--        <section class="contaiiiner">-->
<!--            <div class="daywrapper">-->
<!--                <h5>Day 1</h5>-->
<!--                <form action="" class="form">-->
<!--                    <input type="text" placeholder="Hotel Name">-->
<!--                    <input type="text" placeholder="Destination">-->
<!--                    <input  type="text" placeholder="Hotel Type">-->
<!---->
<!--                    <select  name="" id="">-->
<!--                        <option  value="Something">Hotel Rating</option>-->
<!--                        <option value="Something">1 star</option>-->
<!--                        <option value="Something">2 star</option>-->
<!--                        <option value="Something">3 star</option>-->
<!--                    </select>-->
<!--                    <div class='form-field'>-->
<!--                        <label class="label">-->
<!--                            <span style="color: #333333">Inclusions</span>-->
<!--                            <textarea class='tds-textarea solid'></textarea>-->
<!--                            <div class='textarea-clone'></div>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class='form-field'>-->
<!--                        <label class="label">-->
<!--                            <span style="color: #333333">Exclusions</span>-->
<!--                            <textarea class='tds-textarea solid'></textarea>-->
<!--                            <div class='textarea-clone'></div>-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class='form-field fullwidth'>-->
<!---->
<!--                            <span style="color: #333333">Itenary</span>-->
<!--                            <textarea style="width: 100% !important;" class='tds-textarea solid'></textarea>-->
<!--                            <div  class='textarea-clone'></div>-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <input  type="text" placeholder="Vehicle Availibilty">-->
<!--                    <input  type="text" placeholder="Flight Avalibility">-->
<!---->
<!--                    <div class='form-field fullwidth'>-->
<!---->
<!--                        <input  type="text" placeholder="Quotation Price">-->
<!---->
<!--                    </div>-->
<!--                    <div class="flex sss">-->
<!--                        <button id="addbtn" class="add">Add</button>-->
<!--                        <button class="submit">Submit</button>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--    </div>-->
<!---->
<!---->
<!---->
<!---->
<!--            </form>-->
<!---->
<!--        </section>-->
<!--        <script>-->
<!---->
<!---->
<!---->
<!--            let addbtn = document.getElementById("addbtn")-->
<!--            addbtn.onclick = function (e){-->
<!--               const parent = document.querySelector(".contaiiiner")-->
<!--                const child = document.createElement("div")-->
<!--                child.classList.add("daywrapper")-->
<!---->
<!--                let form = document.createElement("form")-->
<!--                form.classList.add("form")-->
<!--                let threetextinputs = ['Hotel Name','Destination','Hotel Type']-->
<!--                for(let i=0;i<threetextinputs.length;i++)-->
<!--                {-->
<!--                   let input = document.createElement("INPUT")-->
<!--                    input.setAttribute("type","text")-->
<!--                    input.placeholder = threetextinputs[i]-->
<!--                    form.appendChild(input)-->
<!--                }-->
<!---->
<!--                let array = ["1 star","2 star","3 star",];-->
<!---->
<!--                //Create and append select list-->
<!--                        let selectList = document.createElement("select");-->
<!---->
<!---->
<!---->
<!--                //Create and append the options-->
<!--                for (let i = 0; i < array.length; i++)-->
<!--                 {-->
<!--                       let option = document.createElement("option");-->
<!--                        option.value = array[i];-->
<!--                        option.text = array[i];-->
<!--                        selectList.appendChild(option);-->
<!--                 }-->
<!---->
<!--                //creating inclusion-->
<!--                const d = document.createElement("div")-->
<!--                d.classList.add("form-field")-->
<!--                const l =document.createElement("label")-->
<!---->
<!--                const s  =document.createElement("span")-->
<!--                s.style.color = "#333333"-->
<!--                s.innerText = "Inclusions"-->
<!--                l.appendChild(s)-->
<!--                const t = document.createElement("textarea")-->
<!--                t.classList.add("solid")-->
<!--                l.appendChild(t)-->
<!--                const dd = document.createElement("div")-->
<!--                dd.classList.add("textarea-clone")-->
<!---->
<!--                l.appendChild(dd)-->
<!--                d.appendChild(l)-->
<!--                //creating exclusions-->
<!--                const d2 = document.createElement("div")-->
<!--                d2.classList.add("form-field")-->
<!--                const l2 =document.createElement("label")-->
<!---->
<!--                const s2  =document.createElement("span")-->
<!--                s2.style.color = "#333333"-->
<!--                s2.innerText = "Exlusions"-->
<!--                l2.appendChild(s2)-->
<!--                const t2 = document.createElement("textarea")-->
<!--                t2.classList.add("solid")-->
<!--                l2.appendChild(t2)-->
<!--                const dd2 = document.createElement("div")-->
<!--                dd2.classList.add("textarea-clone")-->
<!---->
<!---->
<!---->
<!---->
<!--                l2.appendChild(dd2)-->
<!--                d2.appendChild(l2)-->
<!---->
<!--                //creating itenary-->
<!--                const d3 = document.createElement("div")-->
<!--                d3.classList.add("form-field")-->
<!--                d3.classList.add("fullwidth")-->
<!--                const l3 =document.createElement("label")-->
<!---->
<!--                const s3  =document.createElement("span")-->
<!--                s3.style.color = "#333333"-->
<!--                s3.innerText = "Itenary"-->
<!--                l3.appendChild(s3)-->
<!--                const t3 = document.createElement("textarea")-->
<!--                t3.classList.add("solid")-->
<!--                l3.appendChild(t3)-->
<!--                const dd3 = document.createElement("div")-->
<!--                dd3.classList.add("textarea-clone")-->
<!---->
<!--                form.appendChild(d2)-->
<!--                form.appendChild(d)-->
<!---->
<!--                form.appendChild(selectList);-->
<!--                let h5 = document.createElement("h5")-->
<!--                h5.innerText = "Day 1"-->
<!--                child.appendChild(h5)-->
<!--                child.appendChild(form)-->
<!--                parent.appendChild(child)-->
<!--            }-->
<!--        </script>-->
<!--</div>-->
<style>



     .modal-main:after {
        content: "";
        display: none;
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9998;

    }
    .modal-main.opened:after {
        display: block;
    }
    .modal-main .modal-form {



        width: 100%;
        max-width: 900px;
        top: 0;
        position: fixed;
        border-radius: 3px;
        background: #ffffff;
        z-index: 9999;
        left: 59%;
        top: 59%;
        transform: translate(-50%, -50%);
    }
    .modal-main .modal-form .modal-head, .modal-main .modal-form .modal-content, .modal-main .modal-form .modal-footer {
        position: relative;
        padding: 10px 20px;

    }
    .modal-main .modal-form .modal-head {
        border-bottom: 1px solid #e6e6e6;
        display: flex;
        flex-flow: column;
    }
    .modal-main .modal-form .modal-head .modal-btn-close {
        position: absolute;
        right: 0;
        margin-right: 20px;
        cursor: pointer;
        color: rgba(34, 34, 34, 0.5);
    }
    .modal-main .modal-form .modal-head .title {

        font-weight: 700;
        font-size: 16px;
        text-align: center;
        margin: 10px 0;
    }
    .modal-main .modal-form .modal-head .subtitle {
        font-size: 0.8rem;
        text-align: center;
        color: #222222;
    }
    .opened{
        display: block;
    }
    .hide{
        display: none;
    }
    .modal-main .modal-form .modal-contented .form-main {
        display: flex;
        flex-flow: column;
        align-items: center;
        width: 100%;

    }
    .modal-main .modal-form .modal-contented .form-main .form__group {
        position: relative;
        padding: 15px 0 0;
        margin-top: 10px;
        width: 90%;
    }
    .modal-main .modal-form .modal-contented .form-main .form__field {
        font-family: inherit;
        width: 100%;
        border: 0;
        border-bottom: 1px solid #d2d2d2;
        outline: 0;
        font-size: 16px;
        color: #212121;
        padding: 7px 0;
        background: transparent;
        transition: border-color 0.2s;
    }
    .modal-main .modal-form .modal-contented .form-main .form__field::placeholder {
        color: transparent;
    }
    .modal-main .modal-form .modal-contented .form-main .form__field:placeholder-shown ~ .form__label {
        font-size: 16px;
        cursor: text;
        top: 20px;
    }
    .modal-main .modal-form .modal-contented .form-main .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 12px;
        color: #9b9b9b;
    }
    .modal-main .modal-form .modal-contented .form-main .form__field:focus {
        padding-bottom: 6px;
        border-bottom: 2px solid #2a92bd;
        font-weight: 700;
    }
    .modal-main .modal-form .modal-contented .form-main .form__field:focus ~ .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 12px;
        color: #2a92bd;
    }
    .modal-main .modal-form .modal-footer {
        display: flex;
    }
    .modal-main .modal-form .modal-footer .submit-box {
        display: flex;
        flex-flow: row;
        width: 100%;
        align-items: center;
    }
    .modal-main .modal-form .modal-footer .submit-box .modal-btn, .modal-main .modal-form .modal-footer .submit-box span {
        width: 30%;
    }
    .modal-main .modal-form .modal-footer .submit-box .modal-btn {
        margin-top: 5px;
        padding: 10px;
        background-color: #2a92bd;
        color: #ffffff;
        border: 1px solid #2a92bd;
        font-size: 1rem;
        transition: all 250ms cubic-bezier(0.32, 1, 0.23, 1) 100ms;
    }
    .modal-main .modal-form .modal-footer .submit-box .modal-btn:hover, .modal-main .modal-form .modal-footer .submit-box .modal-btn:focus, .modal-main .modal-form .modal-footer .submit-box .modal-btn:active {
        background-color: #2a92bd;
        font-size: 16px;
    }
    .modal-main .modal-form .modal-footer .submit-box span {
        margin-top: 5px;

        text-align: left;
        color: #222222;
    }
    .contine {
        margin: auto;
            width: 270px;
    }

    .gg-bound-control.hasValue .gg-bound-control-label, .gg-bound-control-input:not([disabled]):focus ~ .gg-bound-control-label {
        transform: scale(0.75) translateY(-39px);
    }

    .gg-bound-control {
        -webkit-tap-highlight-color: transparent;
        box-sizing: content-box;
        width: 100%;
        font-size: 15px;
        outline: none;
    }
    .gg-bound-control-outer {
        box-sizing: inherit;

    }
    .gg-bound-control-inner {
        box-sizing: inherit;
        display: flex;
        position: relative;

    }
    .gg-bound-control-wrapper {
        box-sizing: inherit;
        display: flex;
        flex-grow: 1;
        flex-shrink: 1;
        min-width: 0%;
        position: relative;
    }
    .gg-bound-control-input {
        box-sizing: inherit;
        flex-grow: 1;
        flex-shrink: 1;
        background-color: transparent;
        border: none !important;
        display: block;
        font: 400 17px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
        height: 28px;
        line-height: 24px;
        min-width: 0%;
        outline: none;
        border-radius: 4px;
        color: #202124;

        padding: 13px 15px;
        z-index: 1;
    }
    .gg-bound-control-input:not([disabled]):focus ~ .gg-bound-control-label {
        color: #2a92bd;
    }
    .gg-bound-control-label {
        box-sizing: border-box;
        color: #80868b;
        transform-origin: bottom left;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition-property: color, bottom, transform;
        color: rgba(0, 0, 0, 0.38);

        font-size: 17px;
        pointer-events: none;
        position: absolute;
        bottom: 17px;
        left: 8px;
        padding: 0 8px;
        background: #fff;
        transition: transform 150ms cubic-bezier(0.4, 0, 0.2, 1), opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
        width: auto;
        z-index: 1;
    }
    .gg-bound-control-df-bottom-border {
        box-sizing: border-box;
        width: 100%;
        height: 100%;
        background-color: transparent;
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0;
        border: 1px solid #dadce0;
        border-radius: 4px;
    }
    .gg-bound-control-df-bottom-border:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: -2px;
        left: 0;
        right: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0);
        pointer-events: none;
    }
    .gg-bound-control-ef-bottom-border {
        box-sizing: content-box;
        -webkit-animation: quantumWizPaperInputRemoveUnderline 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        animation: quantumWizPaperInputRemoveUnderline 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background-color: transparent;
        height: calc(100% - 2*2px);
        width: calc(100% - 2*2px);
        position: absolute;
        bottom: 0;
        left: 0;
        margin: 0;
        padding: 0;
        border-radius: 4px;
        opacity: 0;
        transform: none;
        transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
    }
    .gg-bound-control.active-gg-bound-control .gg-bound-control-ef-bottom-border {
        -webkit-animation: none;
        animation: none;
        transform: scale(1);
        border: 2px solid #2a92bd;
        opacity: 1;
    }
    @-webkit-keyframes quantumWizPaperInputRemoveUnderline {
        0% {
            transform: scaleX(1);
            opacity: 1;
        }
        100% {
            transform: scaleX(1);
            opacity: 0;
        }
    }
    @keyframes quantumWizPaperInputRemoveUnderline {
        0% {
            transform: scaleX(1);
            opacity: 1;
        }
        100% {
            transform: scaleX(1);
            opacity: 0;
        }
    }
    @-webkit-keyframes quantumWizPaperInputAddUnderline {
        0% {
            transform: scaleX(0);
        }
        100% {
            transform: scaleX(1);
        }
    }
    @keyframes quantumWizPaperInputAddUnderline {
        0% {
            transform: scaleX(0);
        }
        100% {
            transform: scaleX(1);
        }
    }

</style>

<div class="modal-main open-modal " id="modal openme">
    <div class="modal-form">
        <div class="modal-head">
        <span class="modal-btn-close">
            <a href="#close" title="Close" class="close "><i class="fas fa-times close-btn"></i></a>
        </span>
            <h2 style=" font-size: 20px !important;" class="title">Quotation Form</h2>

        </div>
        <div class="modal-contented">
            <form class="form-main">
                <div style="width: 100%; margin-left: 0.75rem; margin-right: 0.75rem;padding: 20px";  class="row">
                    <h5 style="margin-bottom: 5px">Day 1</h5>
                    <div style="margin-top: 6px" class="col s4">
                           <div class="contine">
                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                    <div class="gg-bound-control-outer">
                                        <div class="gg-bound-control-inner">
                                            <div class="gg-bound-control-wrapper">
                                                <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">
                                                <div class="gg-bound-control-label">Hotel Name</div>
                                            </div>
                                            <div class="gg-bound-control-df-bottom-border"></div>
                                            <div class="gg-bound-control-ef-bottom-border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div style="margin-top: 6px" class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotel Address">
                                            <div class="gg-bound-control-label">Hotel Address</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px; " class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotel Type">
                                            <div class="gg-bound-control-label">Hotel Type</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px; " class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotel Ratings">
                                            <div class="gg-bound-control-label">Hotel Ratings</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px; " class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Explore ">
                                            <div class="gg-bound-control-label">Explore</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px !important; " class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotel Type">
                                            <div class="gg-bound-control-label">Hotel Type</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px;" class="col s6">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <textarea class="gg-bound-control-input" style="width: 50% !important;"></textarea>
                                            <div class="gg-bound-control-label">Inclusions</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px;" class="col s6">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <textarea class="gg-bound-control-input"></textarea>
                                            <div class="gg-bound-control-label">Exlusions</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px;" class="col s12">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <textarea class="gg-bound-control-input"></textarea>
                                            <div class="gg-bound-control-label">Itenary</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px" class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Vehicle Avalibilty">
                                            <div class="gg-bound-control-label">Vehicle Availilty</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px" class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Vehicle Avalibilty">
                                            <div class="gg-bound-control-label">Vehicle Availilty</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 6px" class="col s4">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input class="gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Vehicle Avalibilty">
                                            <div class="gg-bound-control-label">Vehicle Availilty</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 </form>
        </div>
        <div class="modal-footer">
            <div class="submit-box">
                <button class="modal-btn" type="submit">Send</button>
                <button style="margin-left: 20px !important;" class="modal-btn" type="">Add</button>

            </div>
        </div>
    </div>
</div>
<script>




</script>
