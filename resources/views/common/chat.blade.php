<script type="text/javascript">
    var customVariable=[];
    
    if(contId!=''){
        customVariable.push({ name: 'Contact Link:', value: 'https://gaccca.lightning.force.com/'+contId });
    } 
    if(applicantId!=''){
        customVariable.push({ name: 'Applicant Link:', value: 'https://gaccca.lightning.force.com/'+applicantId });
    }
    if(applicantName!=''){
        customVariable.push({ name: 'Applicant Name:', value: '\n '+applicantName });
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