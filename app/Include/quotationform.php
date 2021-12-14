<style>

    .modalbg {
        position: fixed;

        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0);
        z-index: 99999;
        -moz-transition: all 2s ease-out;
        -webkit-transition: all 2s ease-out;
        -o-transition: all 2s ease-out;
        transition: all 2s ease-out;
        -webkit-transition-delay: 0.2s;
        -moz-transition-delay: 0.2s;
        -o-transition-delay: 0.2s;
        -transition-delay: 0.2s;
        display: block;
        pointer-events: none;
        overflow-y: scroll;
    }
    .modalbg .dialog {
        width: 1000px;
        position: relative;
        min-height: 500px;



        top: -1000px;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        -moz-border-radius: 10px;

        background: #fff;
        box-shadow: 0 0 10px #000;
        -moz-box-shadow: 0 0 10px #000;
        -webkit-box-shadow: 0 0 10px #000;
        position: relative;
    }
    .modalbg .dialog .ie7 {
        filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);
    }
    .modalbg:target {
        display: block;
        pointer-events: auto;
        background: rgba(4, 10, 30, 0.8);
        -moz-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }
    .modalbg:target .dialog {
        top: -20px;
        -moz-transition: all 0.8s ease-out;
        -webkit-transition: all 0.8s ease-out;
        -o-transition: all 0.8s ease-out;
        transition: all 0.8s ease-out;
        -webkit-transition-delay: 0.4s;
        -moz-transition-delay: 0.4s;
        -o-transition-delay: 0.4s;
        -transition-delay: 0.4s;
    }
    .close {


        line-height: 25px;
        position: absolute;
        right: 2px;
        text-align: center;
        top: -1px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -moz-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
        -webkit-transition-delay: 0.2s;
        -moz-transition-delay: 0.2s;
        -o-transition-delay: 0.2s;
        -transition-delay: 0.2s;
    }
    .close .ie7 {
        filter: progid:DXImageTransform.Microsoft.Shadow(color='#000', Direction=135, Strength=3);
    }
    .close:hover {
        color: #2a92bd;
        -moz-transition: all 0.5s ease-out;
        -webkit-transition: all 0.5s ease-out;
        -o-transition: all 0.5s ease-out;
        transition: all 0.5s ease-out;
    }

    a {
        color: #333;
        text-decoration: none;
    }
    .h2div{

      width: 50%;
    }
    .h2div h2{
        background: -webkit-linear-gradient(#2a92bd, #416d84);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    input::placeholder, textarea::placeholder{
        color: #333333;
    }
    .form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }

    .fullwidth {
        grid-column: span 2;
    }

    .submit {
        grid-column: 2;

        width: 150px !important;
        padding: 10px;
        margin-left: 20px;
        /*margin-left: 253px !important;*/
    }

    .add{
        width: 150px !important;
        padding: 10px;

    }

    .contaiiiner {

        margin: 2vw;

    }

    input, textarea {
        padding: 5px;
    }
    .form-field {
        margin-bottom: 34px;
        overflow: hidden;
        padding-bottom: 2px;
    }
    label {
        display: block;
        position: relative;
    }
    label::after {
        background: #2a92bd;
        bottom: -2px;
        content: " ";
        display: block;
        height: 3px;
        left: -360px;
        position: absolute;
        transition: left 0.3s ease;
        width: 360px;
        z-index: 10;
    }

    .itenarylabel::after{

        /*width: 100%;*/
    }
    label:focus-within .textarea-clone {
        height: 140px;
        opacity: 0;
    }
    label:focus-within::after {
        left: 0;
    }

    label span {
        display: block;
        color: gray;
        font-size: 12px;
        letter-spacing: 1px;
        line-height: 1.5em;
        padding-bottom: 6px;
        text-transform: uppercase;
    }
    input, textarea {
        border: none;
        border-bottom: 1px solid #959292;
        display: block;
        font-size: 18px;
        line-height: 1.5em;
        outline: none;
        padding: 0 3px;
        transition: border 0.3s ease, margin 0.3s ease;
        width: 354px;
    }
    input:focus, textarea:focus {
        color: #000000; !important;
    }
    .textarea-clone {
        border-bottom: 2px solid #000000;
        display: none;
        line-height: 28px;
        height: 27px;
        opacity: 1;
        overflow: hidden;
        padding: 0 3px;
        position: absolute;
        text-overflow: ellipsis;
        top: 24px;
        transition: opacity 0.5s ease;
        white-space: nowrap;
        width: 354px;
        z-index: -1;
    }
    textarea.solid {
        background-image: url("data:image/svg+xml,%3Csvg width='18' height='28' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23DADBDB' d='M0 28h18v-1H0z' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
    textarea {
        background-attachment: local;
        background-color: transparent;
        line-height: 28px;
        margin: 0;
        transition: height 0.5s ease, opacity 0.5s ease 0.1s;
    }
    textarea:not(:focus) {
        height: 27px;
    }
    textarea:not(:focus)::-webkit-scrollbar {
        display: none;
    }

    textarea:focus {
        height: 139px;
    }

    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar
    {
        width: 10px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb
    {
        background-color: #CCCCCC;
        border: 2px solid #F4F4F4;
    }
    .sss{
        width: 100%;
        justify-content: right;

    }

</style>


<div id="openme" class="modalbg">
    <div class="dialog">
        <a href="#close" title="Close" class="close"><i class="material-icons">close</i></a>
        <div class="h2div">
            <h2>Quotation Form</h2>
        </div>
        <section class="contaiiiner">

            <h5>Day 1</h5>
            <form action="" class="form">
                <input type="text" placeholder="Hotel Name">
                <input type="text" placeholder="Destination">
                <input  type="text" placeholder="Hotel Type">

                <select  name="" id="">
                    <option  value="Something">Hotel Rating</option>
                    <option value="Something">1 star</option>
                    <option value="Something">2 star</option>
                    <option value="Something">3 star</option>
                </select>
                <div class='form-field'>
                    <label>
                        <span style="color: #333333">Inclusions</span>
                        <textarea class='tds-textarea solid'></textarea>
                        <div class='textarea-clone'></div>
                    </label>
                </div>
                <div class='form-field'>
                    <label>
                        <span style="color: #333333">Exclusions</span>
                        <textarea class='tds-textarea solid'></textarea>
                        <div class='textarea-clone'></div>
                    </label>
                </div>
                <div class='form-field fullwidth'>

                        <span style="color: #333333">Itenary</span>
                        <textarea style="width: 100% !important;" class='tds-textarea solid'></textarea>
                        <div  class='textarea-clone'></div>

                </div>

                <input  type="text" placeholder="Vehicle Availibilty">
                <input  type="text" placeholder="Flight Avalibility">

                <div class='form-field fullwidth'>

                    <input  type="text" placeholder="Quotation Price">

                </div>
                <div class="flex sss">
                    <button class="add">Add</button>
                    <button class="submit">Submit</button>
                </div>

    </div>




            </form>

        </section>
        <script>

            $('.tds-textarea').keyup(function() {
                $(this).next('.textarea-clone').html(this.value.replace(/\n/g, '<br/>'));
            });
        </script>
</div>
