<script type="text/javascript">
    var customVariable=[];
    
    if(contIdAccountUserVal!=''){
        customVariable.push({ name: 'Contact Link:', value: 'https://gaccca.lightning.force.com/'+contIdAccountUserVal });
    } 
    if(applicantIdAccountUserVal!=''){
        customVariable.push({ name: 'Applicant Link:', value: 'https://gaccca.lightning.force.com/'+applicantIdAccountUserVal });
    }
    if(applicantNameAccountUserVal!=''){
        customVariable.push({ name: 'Applicant Name:', value: '\n '+applicantNameAccountUserVal });
    }
  
    window.__lc = window.__lc || {};
    window.__lc.license = 9470685;
    window.__lc.params = customVariable;
    (function() {
        var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
        lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>