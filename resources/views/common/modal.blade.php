<div id="gaccca_myModal" class="gaccca-modal_large">

  <!-- Modal content -->
  <div class="gaccca-modal__content">
    <div class="gaccca-modal__header">
      <span class="gaccca-modal__close">&times;</span>
      <h3>Confirm the call</h3>
    </div>
    <div class="gaccca-modal__body">


      <div class="gaccca-form-element ">

        <p id='callTimeInfo'> </p>
      </div>
      <div class="gaccca-form-element">

        <p> Here you can submit your questions in advance for our call (optional):</p>

        <textarea required="" class="gaccca-modal-textarea" id='questionInAdvanced'></textarea>

      </div>
      <div class="gaccca-form-element">
      </div>



    </div>
    <div class="gaccca-modal__footer">
      <button class="gaccca-button-save " id='confirmCallBtn'>confirm the call</button>
      <span style='color: #e21717;font-weight: bold;display:none' id='callBookingError'>
        Another participant has booked this slot in the meantime. Please choose another slot.
      </span>

    </div>
  </div>

</div>
<script>
  var modal = $('#gaccca_myModal')[0];
  // Get the <span> element that closes the modal
  var span = $('.gaccca-modal__close')[0];

  // When the user clicks the button, open the modal 
  // btn.onclick = function() {

  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  // Get the modal
</script>