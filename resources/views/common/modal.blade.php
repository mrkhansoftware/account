
    <div id="gaccca_myModal" class="gaccca-modal_large">

<!-- Modal content -->
<div class="gaccca-modal__content">
  <div class="gaccca-modal__header">
    <span class="gaccca-modal__close">&times;</span>
    <h3>Confirm the call</h3>
  </div>
  <div class="gaccca-modal__body">
      
    
    <div class="gaccca-form-element ">
       
       <p> <strong>Time: </strong> 07:30 PM-08:00 PM [Friday, 8. May] (GMT+05:30) India Standard Time (Asia/Kolkata) </p>
    </div>
    <div class="gaccca-form-element">
      
       <p> Here you can submit your questions in advance for our call (optional):</p> 
        
        <textarea  required="" class="gaccca-modal-textarea"></textarea>
      
    </div>
    <div class="gaccca-form-element">
    </div>



  </div>
   <div class="gaccca-modal__footer">
          <button class="gaccca-button-save ">confirm the call</button>

  </div> 
</div>

</div>
<script>


$('[id^="gaccca_myBtn_"]').click(function() {
  
var modal =   $('#gaccca_myModal')[0];
  
// Get the button that opens the modal
//var btn = $('#gaccca_myBtn')[0];

// Get the <span> element that closes the modal
var span = $('.gaccca-modal__close')[0]; 
  
  // When the user clicks the button, open the modal 
// btn.onclick = function() {
   
//   }
  modal.style.display = "block";
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


});
// Get the modal

</script>