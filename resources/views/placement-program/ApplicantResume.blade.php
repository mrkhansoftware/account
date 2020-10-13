@if (isset($datas['isAccessAble']) && $datas['isAccessAble'])
@include('common.header',['datas'=>$datas,'title' =>'Create your resume','page'=>'ApplicantResume','parent_page'=>'Placement Program'])

<link href="{{ asset('css/ckEditor.css') }}" rel='stylesheet'>

<link href="{{ asset('css/rangeSliderCss.css') }}" rel='stylesheet'>

<script src="{{ asset('js/jqueryRangeSlider.js') }}"></script>



<style>
    body {
        padding: 0px !important;
        background-image: none !important;
    }

    div.page {
        width: auto !important;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) !important;
        margin: 0px 120px 10px 10px !important;
    }

    html {
        overflow-y: scroll !important;
    }

    .vc_message_box {
        margin-right: 14% !important;
        font-size: 14px !important;
    }
</style>

<div class="gaccca-main-containt">
    <h1 class="gaccca-h1-padding">Create Your Resume</h1>
    <div class="gaccca-sky-blue-box gaccca-sky-blue-box-margin">
        <p> Just a few more steps left! </p>

        <p> To get an idea of what a simple but good video and profile look like, please check out the following link: <a target="_blank" href="https://account.iieex.org/ApplicantPDFWithVideo?id=0031I00000jrHqLQAU&isInternal=isInternal"> Sample Template</a> </p>
    </div>
    <!------>

    <div id="page">

        <div id="main" class="sidebar-none sidebar-divider-off">

            <style>
                div.leftColumn h3 {
                    margin-top: 15px;
                    font-size: 1em;
                }

                div.mainContent {
                    margin-left: 1em;
                    margin-right: 1em;
                    padding-top: 3em;
                    padding-left: 1em;
                    padding-right: 1em;
                    text-align: left;
                }

                div.headline {
                    font-size: 3em;
                    margin-bottom: 0.5em;
                }

                div.general_job td.field,
                div.general_job td.field,
                div.personal_note td.field {
                    color: #0070C0;
                    display: block;
                    font-weight: bold;
                }

                div.rightBox {
                    float: right;
                    border-radius: 10px;
                    background-color: #0070c0;
                    width: 16em;
                    /* min-height:14em; */
                    text-align: center;
                    padding: 2em;
                    position: relative;
                    z-index: 10;
                }

                /* */

                div.image.picture[data-url=""] {
                    min-height: 14em;
                }

                div.image.picture {
                    width: 16em;
                    background-image: url(img/gaccca/placeholder.png);
                    background-position: center;
                }

                td.value {
                    display: block;
                }

                div.bottomContainer {
                    background-color: #cdeaff;
                    border-radius: 10px;
                }

                div.bottomContainer h3 {
                    color: #0070C0;
                    display: block;
                    font-weight: bold;
                    font-size: 1.1em;
                }

                div.bottomContainer table .field {
                    width: 145px;
                    vertical-align: top;
                }

                div.bottomContainer table .value p {
                    float: none;
                    clear: left;
                }

                .eline p br {
                    display: none !important;
                }

                .eline p br[data-cke-filler="true"] {
                    display: block !important;
                }

                .displayNone {
                    display: none !important;
                }
            </style>

            <script>
                var isCVSavedFlag = true;
                var isKeyPressedFlag = false;
                var myLastCallFlag = false;
                var myLastCall;
                jQuery(function() {
                    isKeyPressedFlag = true;

                    function checkContainer() {
                        if ($('.eline').is(':visible')) {

                            var element = document.getElementsByClassName("eline");
                            for (var i = 0; i < element.length; i++) {
                                var d = new Date();
                                var rn = d.getTime();
                                element[i].classList.add("ckEditerNew" + i + "_" + rn);
                                addCkEditior(".ckEditerNew" + i + "_" + rn);

                            }
                            if ('{{$datas["profileLocked"]}}' == 'false' || '{{$datas["profileLocked"]}}' == '') {
                                addCkEditior('.skillHeader');
                                addCkEditior('.otherInfo1');
                                addCkEditior('.otherInfoDesc1');
                                addCkEditior('.otherInfo2');
                                addCkEditior('.otherInfoDesc2');
                                addCkEditior('.skill1');
                                addCkEditior('.skill2');
                                addCkEditior('.skill3');
                                addCkEditior('.skill4');
                            }


                        } else {

                            setTimeout(checkContainer, 50);
                        }
                    }
                    checkContainer();


                    initHover();

                    jQuery(document).on('keyup', 'div[contenteditable="false"]', function(e) {
                        resizeMarker();
                    });

                    jQuery("#marker .fa-caret-up").on("click", function() {
                        Record.moveUp(this);
                    });
                    jQuery("#marker .fa-caret-down").on("click", function() {
                        Record.moveDown(this);
                    });

                    jQuery('.memo_sticker[data-lock="0"]').draggable({
                        handle: ".fa-arrows"
                    });

                });
                var currentRecordElement = false;
                var currentSelectedElement = false;

                jQuery.fn.swapWith = function(to) {
                    return this.each(function() {
                        var copy_to = $(to).clone(true);
                        var copy_from = $(this).clone(true);
                        $(to).replaceWith(copy_from);
                        $(this).replaceWith(copy_to);
                    });
                };

                var Record = {
                    moveUp: function(ele) {
                        var before = jQuery(currentSelectedElement).prev();

                        var position1 = jQuery(before).data("position");
                        var position2 = jQuery(currentSelectedElement).data("position");

                        if (before.length > 0) {
                            //ajQuery(currentSelectedElement).swapWith(before);
                            $(currentSelectedElement).insertBefore(before);

                            currentSelectedElement = jQuery(".selected")[0];

                            jQuery(currentSelectedElement).data("position", position1);
                            jQuery(before).data("position", position2);

                            resizeMarker(true);

                            cvData();
                        }
                    },
                    moveDown: function(ele) {
                        var after = jQuery(currentSelectedElement).next();

                        var position1 = jQuery(after).data("position");
                        var position2 = jQuery(currentSelectedElement).data("position");

                        if (after.length > 0) {
                            jQuery(currentSelectedElement).insertAfter(after);
                            currentSelectedElement = jQuery(".selected")[0];

                            jQuery(currentSelectedElement).data("position", position1);
                            jQuery(after).data("position", position2);

                            resizeMarker(true);

                            cvData();
                        }
                    }
                };

                function initHover() {
                    jQuery(document).on("mouseenter", ".part", function(e) {
                        /* Get Sizse and Posotion of current container */
                        moveMarker(this);
                        showAdditionalLinks("box", this);
                    });

                    jQuery(document).on("mouseenter", ".text.field", function(e) {
                        var ele = jQuery(this).parent();
                        /* Get Size and Posotion of current containers */
                        moveMarker(ele);

                        hideAdditionalLinks();
                    });

                    jQuery(document).on("mouseenter", ".part h3", function(e) {
                        var ele = jQuery(this).closest("div.part");

                        /* Get Size and Posotion of currenst container */
                        moveMarker(ele);
                        showAdditionalLinks("box", ele);
                    });

                    jQuery(document).on("mouseenter", ".part table tr.record", function(e) {
                        moveMarker(this);
                        showAdditionalLinks("record", this);
                        e.stopPropagation();
                    });

                    jQuery(document).on("mouseenter", ".part table tr.record div.text", function(e) {
                        currentRecordElement = jQuery(jQuery(this).closest('tr'));
                    });

                }
                /* asds121ssdf1asasdd */
                function hideAdditionalLinks() {
                    jQuery(".rightMarkerAddition").hide();
                    jQuery(".leftMarkerAddition").hide();
                    //     alert(2);
                }

                function showAdditionalLinks(mode, ele) {
                    jQuery(".rightMarkerAddition").show();
                    currentSelectedElement = ele;

                    var links = [];

                    switch (mode) {
                        case "box":
                            var table = jQuery(currentSelectedElement).find('table');
                            if (jQuery(table).data('mover') == '0') {
                                jQuery(".leftMarkerAddition").hide();
                                jQuery(".rightMarkerAddition").hide();
                                return;
                            }
                            links.push("<a href='#' onclick='addBox();return false;'>Add Box</a>");
                            links.push("<a href='#' onclick='delBox();return false;'>Delete Box</a>");
                            break;
                        case "record":
                            var table = jQuery(currentSelectedElement).closest('table');
                            if (jQuery(table).data('mover') == '0') {
                                jQuery(".leftMarkerAddition").hide();
                                jQuery(".rightMarkerAddition").hide();
                                return;
                            }



                            links.push("<a href='#' onclick='addRecord();'>Add Row</a>");
                            var personalnoteVal = jQuery(ele).attr('personalnote');
                            if (jQuery(ele).parent().children().length > 1 && personalnoteVal != 'personalNote') {
                                links.push("<a href='javascript:void(0);' onclick='delRecord();'>Delete Row</a>");
                            }
                            break;
                    }

                    if (jQuery(currentSelectedElement).data("scope") == "general") {
                        jQuery(".leftMarkerAddition").hide();
                    } else {
                        jQuery(".leftMarkerAddition").show();
                        if (mode == "record") {
                            jQuery("#marker .fa-caret-left").hide();
                            jQuery("#marker .fa-caret-right").hide();
                        } else {
                            jQuery("#marker .fa-caret-left").show();
                            jQuery("#marker .fa-caret-right").show();
                        }

                        if (jQuery(currentSelectedElement).data("position") > 0) {
                            jQuery("#marker .fa-caret-up").css("visibility", "visible");
                        } else {
                            jQuery("#marker .fa-caret-up").css("visibility", "visible");
                        }

                        if (jQuery(currentSelectedElement).closest("div.column").data("index") > 0) {
                            jQuery("#marker .fa-caret-left").css("visibility", "visible");
                        } else {
                            jQuery("#marker .fa-caret-left").css("visibility", "hidden");
                        }
                        if (jQuery(currentSelectedElement).closest("div.column").data("index") < jQuery(".container").data("columns") - 1) {
                            jQuery("#marker .fa-caret-right").css("visibility", "visible");
                        } else {
                            jQuery("#marker .fa-caret-right").css("visibility", "hidden");
                        }
                    }

                    jQuery(".rightMarkerAddition").html("<div class='additionLinks'>" + links.join("<br />") + "</div>");
                }

                function delBox() {
                    jQuery(currentSelectedElement).remove();
                    cvData();
                }

                function addBox() {
                    var d = new Date();
                    var randNumber = 'className11' + d.getTime();
                    do {
                        var counter = Math.floor(Math.random() * 100000);
                    } while (jQuery('[data-scope="custom' + counter + ']').length > 0);

                    var $html = '<div class="part custom" data-storage="box-custom' + counter + '" data-scope="custom' + counter + '">';
                    $html += '<h3 data-storagepart="headline"><div class="text"  data-storage="field-custom' + counter + '-headline" id="text1_' + randNumber + '" placeholder="..."><div class="eline row1 ' + randNumber + '">..</div></div></h3>';
                    $html += '<div><table><tbody><tr id="tmp_' + randNumber + '" style="display:none;"></tr></tbody></table></div>';
                    $html += '</div>';

                    jQuery(currentSelectedElement).after($html);
                    addCkEditior("." + randNumber);
                    currentSelectedElement = jQuery("#tmp_" + randNumber);
                    addRecord(false);

                    //    CKEDITOR.inline( 'text1_'  + randNumber);

                    newNode = jQuery(currentSelectedElement).closest("div.part");

                    jQuery("#tmp_" + randNumber).remove();

                    moveMarker(newNode, true);
                    showAdditionalLinks("box", newNode);
                    cvData();

                }

                function resetPositions(ele) {
                    var boxCounter = 0;

                    jQuery("div.part", ele).each(function(index, value) {
                        jQuery(value).data("position", boxCounter);
                        boxCounter++;
                        var recordCounter = 0;

                        jQuery("tr.record", value).each(function(rIndex, rValue) {
                            jQuery(rValue).data("position", recordCounter);
                            recordCounter++;
                        });
                    });
                }
                /* sAS1242sss15 */
                function addRecord(focus) {
                    if (typeof focus == "undefined") focus = true;
                    var d = new Date();
                    var randNumber = 'className' + d.getTime();
                    var randNumber1 = 'className1' + d.getTime();
                    var randNumber2 = 'className2' + d.getTime();
                    var randNumber3 = 'className3' + d.getTime();
                    //  var randNumber = Math.round(Math.random() * 100000);

                    var $html = '<tr class="record" data-position="">';
                    $html += '<td class="field"><div class="text"  id="text1_' + randNumber + '" placeholder="..."><div class="eline row1 ' + randNumber1 + '"> </div></div></td>';
                    $html += '<td class="value"> <div class="text" ><div class="eline row1 ' + randNumber2 + '"> </div><div class="eline row2 ' + randNumber3 + '"> </div></div> </td>';
                    $html += '</tr>';

                    jQuery(currentSelectedElement).after($html);

                    addCkEditior("." + randNumber1);
                    addCkEditior("." + randNumber2);
                    addCkEditior("." + randNumber3);
                    var newNode = jQuery(currentSelectedElement).next();
                    event.preventDefault()
                    resetPositions(jQuery(currentSelectedElement).closest("div.column"));

                    //CKEDITOR.inline( 'text1_'  + randNumber);
                    //CKEDITOR.inline( 'text2_'  + randNumber);
                    if (focus) {
                        moveMarker(newNode, true);
                        showAdditionalLinks("record", newNode);
                    }
                    cvData();
                }

                function delRecord() {
                    var oldCurrent = currentSelectedElement;

                    var newNode = jQuery(currentSelectedElement).prev();

                    if (newNode.length == 0) {
                        newNode = jQuery(currentSelectedElement).next();
                        if (newNode.length == 0) {
                            hideMarker();
                        }
                    }

                    jQuery(currentSelectedElement).remove();

                    if (newNode.length == 1) {
                        moveMarker(newNode.get(0), true);
                        showAdditionalLinks("record", newNode.get(0));
                    }

                    cvData();

                }

                function attachEvents(ckeditorEle) {
                    var ele = ckeditorEle;
                    ele.on('blur', function(e) {
                        cvData();
                    });
                }

                function resetSelection() {
                    jQuery(".selected").removeClass("selected");
                }

                function resizeMarker(animate) {
                    var ele = jQuery(".selected");

                    /* Get Size and sPosition osf current contssaines */
                    var position = ele.offset();
                    var height = ele.height();
                    var width = ele.width();

                    var params = {
                        "top": (position.top - 6) + "px",
                        "left": (position.left - 6) + "px",
                        "height": height + "px",
                        "width": width + "px"
                    };

                    if (!animate || jQuery('#marker').css("display") == "none") {
                        jQuery('#marker').css(params).show();
                    } else {
                        jQuery('#marker').animate(params, 150);
                    }
                }

                function hideMarker() {
                    resetSelection();
                    jQuery(".marker").fadeOut("fast");
                }

                function moveMarker(ele, animate) {
                    if (typeof animate == "undefined") {
                        animate = false;
                    }

                    resetSelection();

                    jQuery(ele).addClass("selected");
                    resizeMarker(animate);
                }
            </script>

            <script type="text/javascript">
                function cvSaved() {
                    isCVSavedFlag = true;
                    if (myLastCallFlag) {
                        myLastCall = setTimeout(function() {
                            lastCallcvSaved()
                        }, 100);
                    }
                }

                function lastCallcvSaved() {
                    myLastCallFlag = false;
                    cvData();
                }

                function cvData() {
                    document.getElementById('hiddenData').value = document.getElementById('cvData').innerHTML;
                    $(document).ready(function() {
                        var cvResumeJSON = {
                            "applicantName": null,
                            "personalNoteTitle": null,
                            "personalNoteDesc": null,
                            "firstHalfData": [],
                            "secondHalfData": [],
                            "skill": null,
                            "otherInfo": []
                        };
                        /*-----CV Content-------*/
                        cvResumeJSON.applicantName = $(".headline .row1").html();
                        //------------------ First Half CV DATA-------------
                        $(".column tr").each(function() {
                            var firstHalfRow = {
                                "titleHeadData": null,
                                "titleDescriptionData": null
                            };
                            var this_row = $(this);
                            var personalNoteDesc = $.trim(this_row.find('td:eq(0)').attr('personalnote'));
                            if (personalNoteDesc == null || personalNoteDesc == '') {
                                firstHalfRow.titleHeadData = $.trim(this_row.find('td:eq(0) .eline').html());
                                firstHalfRow.titleDescriptionData = $.trim(this_row.find('td:eq(1) .eline').html());
                                cvResumeJSON.firstHalfData.push(firstHalfRow);
                            } else {
                                cvResumeJSON.personalNoteTitle = $.trim(this_row.find('td:eq(0) .eline').html());
                                cvResumeJSON.personalNoteDesc = $.trim(this_row.find('td:eq(1) .eline').html());
                            }
                        });
                        //-------------------First Half CV Data-------------

                        //-----------------Next Half CV Data---------------
                        $(".bottomContainer .part").each(function() {
                            var secondHalfRow = {
                                "boxHeaderName": null,
                                "boxRowData": []
                            };
                            var this_row = $(this);
                            secondHalfRow.boxHeaderName = $.trim(this_row.find('h3 .eline').html());
                            this_row.find('tr').each(function(i, el) {
                                var secondHalfRowColumns = {
                                    "rowFirstColumn": null,
                                    "rowSeconfColumn": null,
                                    "rowThirdColumn": null
                                };
                                secondHalfRowColumns.rowFirstColumn = $(this).find('td:eq(0) .eline').html();
                                secondHalfRowColumns.rowSeconfColumn = $(this).find('td:eq(1) .row1').html();
                                secondHalfRowColumns.rowThirdColumn = $(this).find('td:eq(1) .row2').html();
                                secondHalfRow.boxRowData.push(secondHalfRowColumns);
                            });
                            cvResumeJSON.secondHalfData.push(secondHalfRow);
                        });

                        var skillInformation = {
                            "skillTitle": null,
                            "skillList": []
                        };
                        skillInformation.skillTitle = $(".skillHeader").html();
                        var ii = 1;
                        $(".skillName").each(function() {
                            var this_row = $(this);
                            // alert(this_row.text().trim());
                            var skillRange = parseInt($('#rangeCvSlider' + ii).asRange('val')); //alert(skillRange);
                            skillInformation.skillList.push({
                                "skillName": this_row.html(),
                                "skillScale": skillRange
                            });
                            ii++;
                        });
                        cvResumeJSON.skill = skillInformation;
                        cvResumeJSON.otherInfo.push({
                            "title": $(".otherInfo1").html(),
                            "text": $(".otherInfoDesc1").html()
                        });
                        cvResumeJSON.otherInfo.push({
                            "title": $(".otherInfo2").html(),
                            "text": $(".otherInfoDesc2").html()
                        });


                        //-------------------Next Half CV Data----------------
                        //debugger;
                        var jsonDataToSave = JSON.stringify(cvResumeJSON);

                        jsonDataToSave = jsonDataToSave.split('contenteditable="true"');
                        jsonDataToSave = jsonDataToSave.join('');
                        jsonDataToSave = jsonDataToSave.split('<p>');
                        jsonDataToSave = jsonDataToSave.join('');

                        //     document.getElementById('JSONDataTest').innerHTML= jsonDataToSave;
                        document.getElementById('hiddenDataJSON').value = jsonDataToSave;
                        /*-------------------------------*/
                        // //alert(document.getElementById('hiddenData').value);
                        if ('{{$datas["profileLocked"]}}' == 'false' || '{{$datas["profileLocked"]}}' == '') {
                            //  alert();
                            // saveCV();
                        }
                    });
                }

                function initMehtodLoad() {
                    //   initMehtod();
                    if ('{{$datas["profileLocked"]}}' == 'true' || '{{$datas["profileLocked"]}}' == '1') {
                        document.getElementById('cvData').style = 'pointer-events: none';
                    } else {
                        document.getElementById('cvData').style = 'pointer-events: auto';
                    }

                }
            </script>
            <style>
                .cke_table-faked-selection {
                    background: inherit !important;
                    color: black;
                }

                ::-moz-selection {
                    /* Code for Firefox */
                    color: black !important;
                    background: lightgray !important;
                }

                ::selection {
                    color: black !important;
                    background: lightgray !important;
                }

                .selected .value .eline {
                    background: #f2efef !important;
                    border: 1px solid #d1cfcf !important;
                    padding: 0px 5px !important;
                }

                .eline {
                    line-height: 1 !important;
                }

                .selected .field .text {
                    background: #f2efef !important;
                    border: 1px solid #d1cfcf !important;
                    padding: 0px 5px !important;
                    margin-top: 3px !important;
                }

                div.bottomContainer .value .text .row1 {
                    float: left;
                    width: 65% !important;
                }

                div.bottomContainer .value .text .row2 {
                    float: right;
                    width: 30% !important;
                }

                div.column table .row2 {
                    display: none !important;
                }

                #content ol {
                    list-style: decimal inside !important;
                }

                #content ul {
                    list-style: square inside !important;
                }

                div.part td div.text {
                    white-space: unset !important;
                    overflow: hidden !important;
                }

                .eline {
                    border: none !important;
                    box-shadow: none !important;
                }

                .custPopup {
                    left: 90% !important;
                    top: 10% !important;
                }

                .loader {
                    width: 50px !important;
                    height: 50px !important;
                }
            </style>
            <style type="text/css">
                .asRange .asRange-selected {
                    background-color: #0070C0 !important;
                }

                .asRange .asRange-pointer:before {
                    background: #0070C0 !important;
                }

                .asRange {
                    width: auto;
                }

                .slideCv {
                    margin-top: 17px;
                }

                .asRange .asRange-pointer .asRange-tip {
                    background-color: #0070C0 !important;
                    border: 1px solid white !important;
                }

                .asRange .asRange-pointer .asRange-tip:before {
                    background-color: #4C5C71 !important;
                }

                .asRange .asRange-pointer .asRange-tip:after {
                    content: '%';

                }

                .skillFont {
                    color: #0070C0;
                    font-weight: bold;
                    font-size: 1.1em;
                    padding: 2px;
                }

                .skillFont:hover {
                    border: 1px solid;
                    background: #eee;
                }

                .slideCv:hover {
                    border: 1px solid #0070C0;
                    background: #eee;
                }

                .textHover:hover {
                    border: 1px solid #0070C0;
                    background: #eee;
                }

                .content14Px {
                    font-size: 14px;
                }
            </style>
            <script src="{{ asset('js/ckEditorJSFile.js') }}"></script>

            <script>
                function stripHTML(html) {
                    var tmp = document.createElement("DIV");
                    tmp.innerHTML = html;
                    return tmp.textContent || tmp.innerText || "";
                }

                function addCkEditior(ClassName) {
                    // console.log('ClassName'+ClassName);
                    //debugger;
                    var editor1 = InlineEditor.create(document.querySelector(ClassName), {
                        removePlugins: ['Heading'],
                        toolbar: ['bold', 'italic', 'bulletedList', 'numberedList', 'Link']

                    }).then(editor => {
                        //   console.log( editor );
                        editor.model.document.on('change:data', () => {

                            var changedData = editor.getData();
                            if (changedData.includes('<figure class="table">')) {
                                editor.setData(stripHTML(changedData));
                            }
                            // if (isCVSavedFlag) {
                            // alert();
                            myLastCallFlag = true;
                            isCVSavedFlag = false; // to stop recursive call
                            clearTimeout(myLastCall);
                            cvData();
                            //}
                        });

                    }).catch(error => {
                        console.error(error);
                    });

                }
            </script>

            <script language="javascript">
                function designSelected(val) {
                    if ('{{$datas["profileLocked"]}}' == 'true' || '{{$datas["profileLocked"]}}' == '1') {
                        return;
                    }
                    document.getElementById('templateDesign').value = val;
                    saveTemplateInfo();
                }
            </script>
            <apex:inputHidden id="hiddenData" value="{{$datas['cvDatas']}}" />
            <apex:inputHidden id="hiddenDataJSON" value="{{$datas['cvDataJSON']}}" />
            <div>
                <div style="font-size:11px;" styleClass="ckeditor">
                    <div id="content" style="padding-left: 40px;{{isset($datas['profileLocked']) && $datas['profileLocked']?'pointer-events: none':''}}">

                        @if (isset($datas['profileLocked']) && !$datas['profileLocked'])
                        <div class="gaccca-col gaccca-large-size_12-of-12 gaccca-medium-size_12-of-12  gaccca-center" width='100%'>

                            <button class="gaccca-button-save " id='saveResume_top'>Save resume</button>
                            <br /><br /><br />
                        </div>
                        @endif
                        <div id="editor" class="page" style="position:relative;font-size:12px;">
                            <div id='cvData' style="position:relative;">
                                @if($datas['cvDatas']=='')
                                <div class="mainContent container" data-columns="1">
                                    <div class="headline">
                                        <div class="text field" data-scope="general" data-storage="field-general-headline">
                                            <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                <p>Applicant Name</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="column" data-index="0" data-storage="column-column1">
                                        <div class="part  general_job  basic  nohead">
                                            <div>
                                                <table data-mover="1">
                                                    <tbody>
                                                        <tr class="record" data-position="1">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Field:</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>What internship field are you looking for?</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="2">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Timeframe:</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Number of months, starting month</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record selected" data-position="3">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Workload:</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>34-40 hours per week</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="4">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Nationality:</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Please state your nationality.</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="5" personalNote='personalNote'>
                                                            <td class="field" personalNote='personalNote'>
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="personalNoteTitle">
                                                                        <p>Personal Note:</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value" personalNote='personalNote'>
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="personalNoteTitle">
                                                                        <p>Please write a personal note with around 6-10 sentences for the company. This should be a proper text with paragraphs.</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="bottomContainer" data-storage="column-column2">
                                        <div class="part  ausbildung  basic  has-toolbar" data-position="0" data-scope="ausbildung" data-storage="box-ausbildung">
                                            <h3 data-storagepart="headline" class="">
                                                <div class="text field" data-scope="ausbildung" data-storage="field-ausbildung-headline">
                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                        <p>Educational experience:</p>
                                                    </div>
                                                </div>
                                            </h3>
                                            <div>
                                                <table data-mover="1">
                                                    <tbody>
                                                        <tr class="record" data-position="0">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>11/2017 - present</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1 " contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of your degree</strong></p>
                                                                        <ul>
                                                                            <li>list relevant courses</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>University name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="2">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1 " contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>MM/YYYY - MM/YYYY</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1 " contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of your degree</strong></p>
                                                                        <ul>
                                                                            <li>list relevant courses</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>University name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="3">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>MM/YYYY - MM/YYYY</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Study abroad, Name of program</strong></p>
                                                                        <ul>
                                                                            <li>list relevant courses</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>University name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="part  jobs  basic  has-toolbar" data-position="1" data-scope="jobs" data-storage="box-jobs">
                                            <h3 data-storagepart="headline" class="">
                                                <div class="text field" data-scope="jobs" data-storage="field-jobs-headline">
                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                        <p>Practical experience:</p>
                                                    </div>
                                                </div>
                                            </h3>
                                            <div>
                                                <table data-mover="1">
                                                    <tbody>
                                                        <tr class="record" data-position="0">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>MM/YYYY - present</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of position</strong></p>
                                                                        <ul>
                                                                            <li>list relevant tasks and responsibilities</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Company name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="1">
                                                            <td class="field">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>MM/YYYY - MM/YYYY</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of position</strong></p>
                                                                        <ul>
                                                                            <li>list relevant tasks and responsibilities</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>Company name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="part custom" data-storage="box-custom92532" data-scope="custom92532">
                                            <h3 data-storagepart="headline">
                                                <div class="text" data-storage="field-custom92532-headline" placeholder="...">
                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                        <p>Relevant Projects:</p>
                                                    </div>
                                                </div>
                                            </h3>
                                            <div>
                                                <table>
                                                    <tbody>
                                                        <tr class="record" data-position="">
                                                            <td class="field">
                                                                <div class="text" placeholder="...">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>YYYY</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of project</strong></p>
                                                                        <ul>
                                                                            <li>list project details</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>University / Company &nbsp;name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="record" data-position="">
                                                            <td class="field">
                                                                <div class="text" placeholder="...">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>YYYY</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="value">
                                                                <div class="text">
                                                                    <div class="eline row1" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p><strong>Name of project</strong></p>
                                                                        <ul>
                                                                            <li>list project details</li>
                                                                            <li>...</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="eline row2" contenteditable="true" role="textbox" aria-label="Rich Text Editor, main">
                                                                        <p>University / Company &nbsp;name, City, Country</p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                @else

                                {!!$datas['cvDatas']!!}
                                @endif
                            </div>
                            <div style='padding: 1% 3%;display:none;' id='newSectionTemplate'>

                                <table style='width:100%; text-align:left'>
                                    <tr>
                                        <td width='100%' style='vertical-align: text-top;'>
                                            <section>
                                                <p class='skillFont skillHeader'>
                                                    SKILL
                                                </p>
                                                <div class="slideCv">
                                                    <table width='100%'>
                                                        <tr>
                                                            <td width='40%'>
                                                                <div class='skill1 skillName'>
                                                                    @if($datas['skil1Name']=='')
                                                                    Skill 1
                                                                    @else
                                                                    {!!$datas['skil1Name']!!}

                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="rangeCvSlider1"></div>
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </div>

                                                <div class="slideCv">
                                                    <table width='100%'>
                                                        <tr>
                                                            <td width='40%'>
                                                                <div class='skill2 skillName'>
                                                                    @if($datas['skil2Name']=='')
                                                                    Skill 2
                                                                    @else
                                                                    {!!$datas['skil2Name']!!}

                                                                    @endif
                                                                </div>

                                                            </td>
                                                            <td>
                                                                <div id="rangeCvSlider2"></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div class="slideCv">
                                                    <table width='100%'>
                                                        <tr>
                                                            <td width='40%'>
                                                                <div class='skill3 skillName'>
                                                                    @if($datas['skil3Name']=='')
                                                                    Skill 3
                                                                    @else
                                                                    {!!$datas['skil3Name']!!}

                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="rangeCvSlider3"></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div class="slideCv">
                                                    <table width='100%'>
                                                        <tr>
                                                            <td width='40%'>
                                                                <div class='skill4 skillName'>

                                                                    @if($datas['skil4Name']=='')
                                                                    Skill 4
                                                                    @else
                                                                    {!!$datas['skil4Name']!!}

                                                                    @endif

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div id="rangeCvSlider4"></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>


                                            </section>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width='100%' style='vertical-align: text-top;'>
                                            <section>
                                                <div class='skillFont otherInfo1'>

                                                    @if($datas['otherInfo1']=='')
                                                    LANGUAGE
                                                    @else
                                                    {!!$datas['otherInfo1']!!}

                                                    @endif

                                                </div>
                                                <div class='otherInfoDesc1 textHover'>



                                                    @if($datas['otherInfoDesc1']=='')
                                                    Please write a personal note with around 6-10 sentences for the company. This should be a proper text with paragraphs.Please write a personal note with around 6-10 sentences for the company.
                                                    @else
                                                    {!!$datas['otherInfoDesc1']!!}

                                                    @endif





                                                </div>
                                                <div class='skillFont otherInfo2'>



                                                    @if($datas['otherInfo2']=='')
                                                    Hobby &amp; Interest
                                                    @else
                                                    {!!$datas['otherInfo2']!!}

                                                    @endif



                                                </div>
                                                <div class='otherInfoDesc2 textHover'>

                                                    @if($datas['otherInfoDesc2']=='')
                                                    Please write a personal note with around 6-10 sentences for the company. This should be a proper text with paragraphs.Please write a personal note with around 6-10 sentences for the company.
                                                    @else
                                                    {!!$datas['otherInfoDesc2']!!}

                                                    @endif
                                                </div>
                                            </section>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    @if (isset($datas['profileLocked']) && !$datas['profileLocked'])

                    <div class="gaccca-col gaccca-large-size_12-of-12 gaccca-medium-size_12-of-12  gaccca-center" width='100%'>
                        <br /><br /><br />
                        <button class="gaccca-button-save " id='saveResume_bottom'>Save resume</button>

                    </div>
                    @endif



                </div>
            </div>
            <mark class="marker" id="marker" style="display:none;">
                <div class='rightMarkerAddition'></div>
                <div class='leftMarkerAddition'>
                    <i class="fa fa-caret-up"></i>
                    <br />
                    <i class="fa fa-caret-down"></i>
                    <br />
                    <i class="fa fa-caret-left"></i>
                    <br />
                    <i class="fa fa-caret-right"></i>
                </div>
            </mark>
        </div>
    </div>


    <!----->

    <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
        <h2 class="gaccca-h2-padding">Attachments</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <form id="upload_form" method="post">
                <div class="gaccca-form-element gaccca-form-element-margin" id='fileSelector'>
                    <div class="gaccca-form-element__control">
                        <label class="gaccca-file">
                            <input type="file" id="fileIn2" name="filename" onchange='check2(2)' />
                            <input type="hidden" value="" id='nm2' readonly="readonly" />

                            <span class="gaccca-file-custom">Choose file...</span>

                        </label>
                    </div>
                    <label id="progressLabel">No file selected</label>
                    <div class="waitingSearchDiv" id="el_loading" style="background-color: #fbfbfb;display:none; height:200px;opacity:0.75;width:200px;">
                        <div class="waitingHolder" style="top: 300px; width: 300px;">
                            <img class="waitingImage" src="/img/loading.gif" title="Please Wait..." style="width: 40;height:40;" />
                            <span class="waitingDescription">Document is Uploading . . . .</span>
                        </div>
                    </div>
                </div>
                <input id="submit_btn" type="submit" value="Upload" style='display:none' />
            </form>
            <div class="gaccca-form-element gaccca-form-element-margin">
                <table class="gaccca-price-table" id='fileListTable'>
                <tr ><td></td><td></td><td></td></tr>
                    @foreach ($datas['additionalDocList'] as $file)
                    <tr id="{{'fileRow_'.$file['Id']}}">
                        <td>

                            <input type="text" class="{{'myInput'.$file['Id']}}" value="{{$file['File_Name_Not_Encrypted__c']}}" readonly="true" style="border: 0px; width:100%;padding:10px 0px 10px 10px" onblur="remaneItFunction(this.value,'{{$file['Id']}}');return false;" />
                        </td>
                        <td>
                            <a href="javascript: void(0)"><i class="fas fa-pencil-alt" onclick='changeOperation("{{$file['Id']}}");'></i></a>
                            <a href="{{$file['Document_URL__c']}}" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                            <a href="javascript: void(0)"><i class="fas fa-trash" onclick='deleteOperation("{{$file['Id']}}");'></i></a>

                        </td>
                        <td>

                            <a href="javascript: void(0)" class='gaccca-hide' id="{{'loadFileIcn_'.$file['Id']}}"><i class="fas fa-spinner fa-spin"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <h2 class="gaccca-h2-padding">Preview</h2>
        <div class="gaccca-col gaccca-large-size_1-of-1 gaccca-medium-size_1-of-1">
            <div class="gaccca-form-element gaccca-form-element-margin">
                <div class="gaccca-form-element__control">
                    @if (isset($datas['profileLocked']) && !$datas['profileLocked'])

                    <label class="gaccca-form-element__label" for="text-input-id-fn">
                        Select the Template Design <span class="gaccca-text-required" title="required">*</span> </label>
                    <span class="gaccca-radio">
                        <input type="radio" id="templateResume_One" value="One" name="default" />
                        <label class="gaccca-radio__label" for="templateResume_One">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">One</span>
                        </label>

                        <input type="radio" id="templateResume_Two" value="Two" name="default" />
                        <label class="gaccca-radio__label" for="templateResume_Two">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Two</span>
                        </label>


                        <input type="radio" id="templateResume_Three" value="Three" name="default" />
                        <label class="gaccca-radio__label" for="templateResume_Three">
                            <span class="gaccca-radio_faux"></span>
                            <span class="gaccca-padding-right-25">Three</span>
                        </label>


                    </span>
                    @endif
                    @if (isset($datas['app']['Resume_url__c']) && $datas['app']['Resume_url__c']!='')
                    <label class="gaccca-radio__label">
                        <a href="/ApplicantPDFWithVideo" target='_blank'>Preview</a>
                    </label>
                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

<script>
    $(document).ready(function() {
        var resumeableLink = '';
        var previousEnd = '';
        var attachmentUrl='';
        var file_size = '';
        var fileNameUserEnd = '';
        var file_type = '';
        var contactRef = "{{$datas['contID']}}";
        var file_input = $('#fileIn2');
        var submit_btn = $('#submit_btn');
        var upload_form = $('#upload_form');
        var progress_label = $("#progressLabel");
        var chunk_size = 1 * 1024 * 1024;
        var offset = 0;
        var retry = 0;
        file_input.on('change', onFilesSelected);
        upload_form.submit(uploadForm);

        var count = 0

        function remoteUpload(offset, upload_size, content, evt) {
            count++;
            formData={
            applicantId:'{{$datas["applicantId"]}}',
            contactRef:contactRef,
            previousEnd:previousEnd,
            offset:offset,
            upload_size:upload_size,
            content:content,
            resumeableLink:resumeableLink,
            file_size:file_size,
            file_type:file_type,
            fileNameUserEnd:fileNameUserEnd,
            appName:"{{$datas['appName']}}",
            appTime:"{{$datas['appTime']}}",
            fileUrl:attachmentUrl
            }

            console.log('count:' + count);
            console.log('resumeableLink:'+resumeableLink);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: 'applicantResumePlacementAttachment',
                data: formData,
               success: function(data) {
                    console.log(data);
                    resumeableLink = data.resumeLink;
                    attachmentUrl = data.fileUrl;
                    offset += content.length;
                    readSlice(evt);

                },
                error: function(data) {
                    console.log('error');
                    console.log(data);
                }
            });




        }

        function uploadChunk(evt) {
            var upload_size = evt.target.result.length;
            offset += chunk_size;
            remoteUpload(offset, upload_size, evt.target.result, evt);

        }

        function readCallback(evt) {
            if (evt.target.error == null) {
                uploadChunk(evt);
            } else {
                progress_label.html("File read error on disk: " + evt.target.error);
                return;
            }
        }



        function readSlice(e) {
            var files = document.getElementById("fileIn2");
            var file = files.files[0];
            file_type = file.type;
            fileNameUserEnd = file.name;

            document.getElementById('fileSelector').style = 'pointer-events: none';
            //   console.log(fileNameUserEnd);
            file_size = file.size;
            var reader = new FileReader();
            if (offset < file.size) {
                progress_label.html("Uploading: " + (100 * offset / file.size).toFixed(0) + "%");
                //  console.log('chunk_size--'+chunk_size);
                //console.log('offset--'+offset);
                var blob = file.slice(offset, offset + chunk_size);
                //   console.log('blob--'+blob);
                reader.onload = readCallback;
                reader.readAsDataURL(blob);
            } else {
                addAttachment(attachmentUrl,fileNameUserEnd);
                resumeableLink = '';
                attachmentUrl='';
                previousEnd = '';
                file_size = '';
                fileNameUserEnd = '';
                file_type = '';
                chunk_size = 1 * 1024 * 1024; // 1Mbyte Chunk 
                offset = 0;
                retry = 0;
                document.getElementById('fileSelector').style = 'pointer-events: visible';
                document.getElementById('nm2').value = '';
                document.getElementById('fileIn2').value = '';
                progress_label.html("Upload complete");

            }
        }

        function uploadForm(e) {
            e.preventDefault();
            offset = 0;
            readSlice(e);
            progress_label.html("Starting...");

        }

        function onFilesSelected(e) {
            submit_btn.attr('disabled', false);
        }
    });


    function fileUpload2(val) {
        document.getElementById('nm' + val).value = '';
        document.getElementById('fileIn' + val).value = '';
        document.getElementById('fileIn' + val).click();
    }

    function check2(val) {

        var fileInput = document.getElementById('fileIn' + val);
        var filename = fileInput.files[0].name;
        var typeName = fileInput.files[0].type;
        if (typeName != 'image/jpeg' && typeName != 'application/pdf' && typeName != 'image/png' && typeName != 'image/pjpeg') {
            document.getElementById('fileIn' + val).value = '';
            alert('fileType is not correct. Only allows the following types:  jpg, png, pdf!!!!!!');
            return;
        }

        document.getElementById('nm' + val).value = filename;
        document.getElementById('submit_btn').click();

    }
</script>



<script>
    var pageNotLoading = false;
    $(document).ready(function() {
        $('[id^=rangeCvSlider]').asRange({
            step: 1,
            range: false,
            min: 0,
            max: 100,
            onChange: function(instance) {

                cvData();

            }
        });
        $('#rangeCvSlider1').asRange('set', '{{$datas["skil1scale"]}}');
        $('#rangeCvSlider2').asRange('set', '{{$datas["skil2scale"]}}');
        $('#rangeCvSlider3').asRange('set', '{{$datas["skil3scale"]}}');
        $('#rangeCvSlider4').asRange('set', '{{$datas["skil4scale"]}}');

        //alert('{!templateDesign}');
        if ('{{$datas["templateDesign"]}}' != '' && '{{$datas["templateDesign"]}}' != 'Old') {
            document.getElementById('newSectionTemplate').style.display = 'block';
            if (document.getElementById('templateResume_' + '{{$datas["templateDesign"]}}') != null) {
                document.getElementById('templateResume_' + '{{$datas["templateDesign"]}}').checked = true;
            }
        }
        $('[id^="saveResume_"]').click(function() {
            var htmlContent = document.getElementById('hiddenData').value;
            var jsonContent = document.getElementById('hiddenDataJSON').value;
            var formData = {
                htmlContent: htmlContent,
                jsonContent: jsonContent,
                typeStr: 'CVCont'
            };

            saveInformation(formData);

        })


        $('[id^="templateResume_"]').click(function() {
            var formData = {
                templateName: this.value,
                typeStr: 'templateChange'
            };

            saveInformation(formData);
        })


    });

    function addAttachment(nameOfAttachment,fileNameUserEnd) {
        if ('{{$datas["profileLocked"]}}' == 'true' || '{{$datas["profileLocked"]}}' == '1') {
            return
        };
        var formData = {
            fileNameReturn:nameOfAttachment,
            fileNameUserEnd:fileNameUserEnd,
            typeStr: 'updateAttachmentList'
        };

        saveInformation(formData);

    }


    function deleteOperation(doc) {
        if ('{{$datas["profileLocked"]}}' == 'true' || '{{$datas["profileLocked"]}}' == '1') {
            return
        };
        var formData = {
            fileId: doc,
            typeStr: 'fileDelete'
        };

        saveInformation(formData);

    }

    function changeOperation(doc) {
        if ('{{$datas["profileLocked"]}}' == 'true' || '{{$datas["profileLocked"]}}' == '1') {
            return
        }
        var elements = document.getElementsByClassName('myInput' + doc);
        for (var i = 0; i < elements.length; i++) {
            elements[i].removeAttribute('readonly');
            elements[i].focus();
            elements[i].style.background = '#e5e5e5'
        }
        //document.getElementById('apexPg:partForm:updateFile').click(); 

        // deleteFileMethod();
    }

    function remaneItFunction(name, id) {
        if (name.trim().length == 0) {
            return;
        }
        var elements = document.getElementsByClassName('myInput' + id);
        for (var i = 0; i < elements.length; i++) {
            elements[i].style.background = 'none'
        }
        var formData = {
            fileName: name,
            fileId: id,
            typeStr: 'fileNameChange'
        };

        saveInformation(formData);

    }
</script>
@if(isset($datas['profileLocked']) && !$datas['profileLocked'])

<script>
    function saveInformation(formData) {
        formData.applicantId="{{isset($datas['app']['Id'])?$datas['app']['Id']:''}}";
        formData.Contact__c="{{isset($datas['contID'])?$datas['contID']:''}}";
        formData.user="{{isset($_GET['orgidInternal'])?'Yes':'No'}}";
        if (formData.typeStr == 'fileNameChange' || formData.typeStr == 'fileDelete') { //loadFileIcn_
            document.getElementById('loadFileIcn_' + formData.fileId).style.display = 'block';
        } else {
            document.getElementById('loader').style.display = 'block';
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'applicantResumePlacement',
            data: formData,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                data=JSON.parse(data);
                if (formData.typeStr == 'fileNameChange' || formData.typeStr == 'fileDelete') { //loadFileIcn_
                    document.getElementById('loadFileIcn_' + formData.fileId).style.display = 'none';
                } else {
                    document.getElementById('loader').style.display = 'none';
                }

                if (data.status!=undefined && data.status == 'OK') {


                    if (formData.typeStr == 'fileDelete') { //loadFileIcn_
                        document.getElementById('fileRow_' + formData.fileId).innerHTML = '';
                    }

                    if (formData.typeStr == 'updateAttachmentList') {
                        addRow(data.response,formData.fileNameReturn,formData.fileNameUserEnd);
                    }





                } else {

                    onError('Error: Contact to admin');

                }

            },
            error: function(data) {
                if (formData.typeStr == 'fileNameChange' || formData.typeStr == 'fileDelete') { //loadFileIcn_
                    document.getElementById('loadFileIcn_' + formData.fileId).style.display = 'none';
                } else {
                    document.getElementById('loader').style.display = 'none';
                }
                onError('Error: Contact to admin');
                console.log(data);
            }
        });
    }


function addRow(attId,fileNameReturn,fileNameUserEnd){
var row='<tr id="fileRow_'+attId+'">';
row+='<td>';
row+='<input type="text" class="myInput'+attId+'" value="'+fileNameUserEnd+'" readonly="true" style="border: 0px; width:100%;padding:10px 0px 10px 10px" onblur="remaneItFunction(this.value,'+"'"+attId+"'"+');return false;" />';
row+='</td>';
row+='<td>';
row+='<a href="javascript: void(0)"><i class="fas fa-pencil-alt" onclick="changeOperation('+"'"+attId+"'"+');"></i></a>';
row+=' <a href="https://storage.googleapis.com/resume-attachments/'+fileNameReturn+'" target="_blank"><i class="fas fa-external-link-alt"></i></a>';
row+=' <a href="javascript: void(0)"><i class="fas fa-trash" onclick="deleteOperation('+"'"+attId+"'"+');"></i></a>';
row+='</td>';
row+='<td>';

row+=' <a href="javascript: void(0)" class="gaccca-hide" id="loadFileIcn_'+attId+'"><i class="fas fa-spinner fa-spin"></i></a>';
row+='</td>';
row+='</tr>';
$('#fileListTable tr:last').after(row);
}
</script>



@endif
@include('common.footer')


@else
Permission denied. Please contact administrator.
@endif