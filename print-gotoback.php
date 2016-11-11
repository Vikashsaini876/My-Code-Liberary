<?php echo "Print page and go to back page instantly
<p><button id="back_button" class="btn btn-info" type="button"><strong>Back</strong></button> <button id="back_button_print" class="btn btn-info" type="button"><strong>Print</strong></button></p>
jquery code for this
$( "#back_button" ).click(function() {
  history.back(-1);
});

$( "#back_button_print" ).click(function() {
  window.print();
});";
?>