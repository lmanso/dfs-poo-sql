$('#update').on('show.bs.modal', function(e) {
    var button = $(e.relatedTarget) // Button that triggered the modal
    var recipient = button.data('character_id') // Extract info from data-bookid
    var modal = $(this) 
    modal.find('input[name="character_id"]').val(recipient); // Put value from recipient to the input
}); 

