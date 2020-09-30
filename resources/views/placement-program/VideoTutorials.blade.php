@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])

@include('common.header',['datas'=>$datas,'title' =>'','page'=>'page'])

{!! Form::open(['action' => 'CloseAccountController@store', 'method' => 'POST', 'data-parsley-validate', 'id' => 'close-account']) !!}
<link rel="stylesheet" href="https://assets.ziggeo.com/v2-stable/ziggeo.css" />
<script src="https://assets.ziggeo.com/v2-stable/ziggeo.js"></script>
<script>
    var ziggeoApp = new ZiggeoApi.V2.Application({
        token: "5a468567d6c000081048db95ef255348"
    });
</script>
<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Video Tutorials</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p>These videos will help guide you step-by-step through your account and creating your online video resume.</p>

    </div>


    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">

        <div class="gaccca-form-element gaccca-form-element-margin">
            <h4><strong> Introduction &amp; Updating Profile</strong> </h4>
            <p>This video will show you how to navigate your account, upload any documents, update your information and change your account login password.</p>
            <div id="replace_me-v2_player1"></div>



            <h4><strong>Scheduling A Call</strong> </h4>
            <p>This video will show you how to schedule any calls and practice interviews with your placement coordinator.</p>
            <div id="replace_me-v2_player2"></div>

            <h4><strong></strong> </h4>
            <p></p>


            <h4><strong>Creating Your Resume</strong> </h4>
            <p>This video will guide you on how to create and update the written portion of your online video resume.</p>
            <div id="replace_me-v2_player3"></div>


            <h4><strong>Write Your Script</strong> </h4>
            <p>This video will guide you on how to write your video script that you will use for the video portion of your online resume.</p>
            <div id="replace_me-v2_player4"></div>


            <h4><strong>Recording Video &amp; Conclusion</strong> </h4>
            <p>This video will explain how to record your video, use the teleprompter function and finish your online video resume.</p>
            <div id="replace_me-v2_player5"></div>




        </div>


    </div>

</div>
<script>
    var player;
    ziggeoApp.on("ready", function() {
        player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player1"),
            attrs: {
                responsive: true,
                showsettings: true,
                disableseeking: false,
                theme: "modern",
                themecolor: "red",
                video: 'a0b2255b9ed645fb6344520df0050bdc'
            }
        });

        player.activate();
    });
    ziggeoApp.on("ready", function() {
        player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player2"),
            attrs: {
                responsive: true,
                showsettings: true,
                disableseeking: false,
                theme: "modern",
                themecolor: "red",
                video: '59f726c31acfe9604e8c6c9c69ed676b'
            }
        });

        player.activate();
    });
    ziggeoApp.on("ready", function() {
        player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player3"),
            attrs: {
                responsive: true,
                showsettings: true,
                disableseeking: false,
                theme: "modern",
                themecolor: "red",
                video: 'bf238ff714007c81fe5243907f5f4cb5'
            }
        });

        player.activate();
    });
    ziggeoApp.on("ready", function() {
        player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player4"),
            attrs: {
                responsive: true,
                showsettings: true,
                disableseeking: false,
                theme: "modern",
                themecolor: "red",
                video: '10ee799a9521047b2edcee2b5aa90572'
            }
        });

        player.activate();
    });
    ziggeoApp.on("ready", function() {
        player = new ZiggeoApi.V2.Player({
            element: document.getElementById("replace_me-v2_player5"),
            attrs: {
                responsive: true,
                showsettings: true,
                disableseeking: false,
                theme: "modern",
                themecolor: "red",
                video: '01143212aec18c1d9090ae67a6acd919'
            }
        });

        player.activate();
    });
</script>




{!! Form::close() !!}
@include('common.footer')


@else
Permission denied. Please contact administrator.
@endif