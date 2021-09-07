<div class="gaccca-grid gaccca-wrap" style="max-width: 1440px;margin: auto;">


@foreach (isset($datas)?$datas:[] as $d)
<div class="gaccca-col gaccca-large-size_4-of-12 gaccca-medium-size_6-of-12 gaccca-small-size_1-of-1 ">
    <div class="gaccca-candidate-div">
        <img src="{{isset($d['applicant']['Profile_Image_URL__c'])?$d['applicant']['Profile_Image_URL__c']:''}}" alt="" class="gaccca-candidate-image-center">

        <table>

            <tr>
                <td>{{isset($d['applicant']['Contact__r']['FirstName'])?$d['applicant']['Contact__r']['FirstName']:''}} </td>
            </tr>
            <tr>
                <td>{{isset($d['applicant']['Occupational_Field__c'])?$d['applicant']['Occupational_Field__c']:''}}</td>

            </tr>
            <tr>
                <td>Like to start in: {{isset($d['likeToStart'])?$d['likeToStart']:''}} </td>
            </tr>

            <tr>
                <td>Length: {{isset($d['applicant']['Lengths__c'])?$d['applicant']['Lengths__c']:''}} </td>
            </tr>
            <tr>
                <td>
                @if(isset($d['applicant']['Internship_Type__c']) && $d['applicant']['Internship_Type__c']=='Remote')    
                
                <span class="gaccca-tag-red">Remote</span> 
            @endif
            @if(isset($d['applicant']['Internship_Type__c']) && $d['applicant']['Internship_Type__c']=='On-side')    
                
                 <span class="gaccca-tag-green">On-side</span>
            @endif
            </td>
            </tr>
        </table>
    </div>
</div>

@endforeach
</div>