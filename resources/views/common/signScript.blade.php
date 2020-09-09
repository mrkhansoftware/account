  <!--------------------------JquerySign------------------------------------>
  <script src="{{ asset('jQuerySign/modernizr.js') }}"></script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="{{ asset('jQuerySign/flashcanvas.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('jQuerySign/jSignature.min.noconflict.js') }} "></script>
    
    <script type="text/javascript">
        function loadSign(){
        jQuery.noConflict()
        
        var documentSigned;
        (function($) {
            var topics = {};
            $.publish = function(topic, args) {
                if (topics[topic]) {
                    var currentTopic = topics[topic],
                        args = args || {};
                    
                    for (var i = 0, j = currentTopic.length; i < j; i++) {
                        currentTopic[i].call($, args);
                    }
                }
            };
            $.subscribe = function(topic, callback) {
                if (!topics[topic]) {
                    topics[topic] = [];
                }
                topics[topic].push(callback);
                return {
                    "topic": topic,
                    "callback": callback
                };
            };
            $.unsubscribe = function(handle) {
                var topic = handle.topic;
                if (topics[topic]) {
                    var currentTopic = topics[topic];
                    
                    for (var i = 0, j = currentTopic.length; i < j; i++) {
                        if (currentTopic[i] === handle.callback) {
                            currentTopic.splice(i, 1);
                        }
                    }
                }
            };
        })(jQuery);
        
        
        (function($){
            
            $(document).ready(function() {
                
                // This is the part where jSignature is initialized.
                var $sigdiv = $("#signature").jSignature({'UndoButton':true})
                
                // All the code below is just code driving the demo. 
                , $tools = $('#tools')
                , $extraarea = $('#displayarea')
                , pubsubprefix = 'jSignature.demo.'
                
                
                
                $("#signature").bind('change', function(e){
                    formSigned=$sigdiv.jSignature('getData', 'native').length;
                    var data = $sigdiv.jSignature('getData', 'image');//alert();
                    
                    document.getElementById('signHiddenData').value= formSigned==0?'':data[1];
                    //alert(document.getElementById('apexPage:frm:signHiddenData').value);
                });
                if (Modernizr.touch){
                    $('#scrollgrabber').height($('#contentSign').height())       
                }
                
            })
            
        })(jQuery)  }
        loadSign();
    </script>
    
    <style type="text/css">
        
        
        #signatureparent {
        color:darkblue;
        padding:20px 0px;
        }
        
        /*This is the div within which the signature canvas is fitted*/
        #signature {
        border: 2px dotted black;
        }
        
        /* Drawing the 'gripper' for touch-enabled devices */ 
        html.touch #contentSign {
        float:left;
        width:92%;
        }
        html.touch #scrollgrabber {
        float:right;
        width:4%;
        margin-right:2%;
        background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAFCAAAAACh79lDAAAAAXNSR0IArs4c6QAAABJJREFUCB1jmMmQxjCT4T/DfwAPLgOXlrt3IwAAAABJRU5ErkJggg==)
        }
        html.borderradius #scrollgrabber {
        border-radius: 1em;
        }
        
        #tools{
        text-align: center;
        }
        .myClassSIgn{
        padding: 8px;
        box-shadow: 1px 1px 7px 2px #5c99e9;
        }
        .signBtnClass{
        margin:20px !important;
        }
        #plSign{
        background-color:red;
        }
    </style>
    
    <!-------------------------------------------------------------->
    