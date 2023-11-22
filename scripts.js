$(document).ready(function(){
  $('#storyForm').submit(function(e){
    e.preventDefault();
    
    var formData = $(this).serialize();
    
    $.ajax({
      type: 'POST',
      url: 'save_story.php',
      data: formData,
      success: function(response){
        $('#successMessage').show();
        $('#storyForm')[0].reset();
      }
    });
  });
});
