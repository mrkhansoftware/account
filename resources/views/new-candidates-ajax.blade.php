<div class="gaccca-grid gaccca-wrap" style="max-width: 1440px;margin: auto;">


@foreach (isset($datas)?$datas:[] as $d)
<div class="gaccca-col gaccca-large-size_4-of-12 gaccca-medium-size_6-of-12 gaccca-small-size_1-of-1 ">
    <div class="gaccca-candidate-div">
        <img src="{{isset($d['applicant']['Profile_Image_URL__c'])?$d['applicant']['Profile_Image_URL__c']:''}}" alt="" class="gaccca-candidate-image-center">

        <table>

            <tr>
                <td>{{isset($d['applicant']['Contact__r']['Name'])?$d['applicant']['Contact__r']['Name']:''}} </td>
            </tr>
            <tr>
                <td>{{isset($d['applicant']['Occupational_Field__c'])?$d['applicant']['Occupational_Field__c']:''}}</td>

            </tr>
            <tr>
                <td>Like to start </td>
            </tr>

            <tr>
                <td>Length: 4 Months </td>
            </tr>
        </table>
    </div>
</div>

@endforeach
</div>