(function ($) {
  $.extend({
    uploadPreview : function (options) {

      // Options + Defaults
      var settings = $.extend({
        input_field: ".image-input",
        preview_box: ".image-preview",
        label_field: ".image-label",
        label_default: "Choose File",
        label_selected: "Change File",
        no_label: false,
        success_callback : null,
      }, options);

      // Check if FileReader is available
      if (window.File && window.FileList && window.FileReader) {
		 
        if (typeof($(settings.input_field)) !== 'undefined' && $(settings.input_field) !== null) {
          $('#image-upload').change(function() {
			
            var files = this.files;
			var length = files.length;
			var allimages = '';
			if (files.length > 5) {
				alert("You can select only 5 images");
				length = 5;
				$('#image-label,#image-preview,#image-upload').hide();
			}else{
				$('#image-label,#image-preview,#image-upload').show();
			}
			
            if (files.length > 0) {
				console.log(files.length);
				for(var i=0;i<length;i++){
              var file = files[i];
              var reader = new FileReader();

              // Load file
              reader.addEventListener("load",function(event) {
                var loadedFile = event.target;

                // Check format
                if (file.type.match('image')) {
                  // Image
				 $('.images-per').show();
				 allimages = '<div class="new-images" id="image-preview" style="background: url('+loadedFile.result+');background-size: cover; background-position: center;"></div>';
				 
				 $('.preview-images').append(allimages);
                  //$(settings.preview_box).css("background-image", "url("+loadedFile.result+")");
                //  $(settings.preview_box).css("background-size", "cover");
                 // $(settings.preview_box).css("background-position", "center center");
                } else if (file.type.match('audio')) {
                  // Audio
                  $(settings.preview_box).html("<audio controls><source src='" + loadedFile.result + "' type='" + file.type + "' />Your browser does not support the audio element.</audio>");
                } else {
                  alert("This file type is not supported yet.");
                }
			  
              });

              if (settings.no_label == false) {
                // Change label
                $(settings.label_field).html(settings.label_selected);
              }

              // Read the file
              reader.readAsDataURL(file);

              // Success callback function call
              if(settings.success_callback) {
                settings.success_callback();
				}}
				
            } else {
              if (settings.no_label == false) {
                // Change label
                $(settings.label_field).html(settings.label_default);
              }

              // Clear background
              $(settings.preview_box).css("background-image", "none");

              // Remove Audio
              $(settings.preview_box + " audio").remove();
            }
          });
        }
      } else {
        alert("You need a browser with file reader support, to use this form properly.");
        return false;
      }
    }
  });
  $(document).ready(function(){
	  var uimages=[];
	  var i=0;
	$('.allimages .new-images').each(function(){
		$(this).find('.closeimg').click(function(){
			uimages=[];
			i=0;
			$(this).parent().remove();
			$('.allimages .new-images').each(function(){
				uimages[i] = $(this).find('#productimg').val();
				i = i+1;
			});
			
			$('#productimg_all').val(uimages);
		});
	});
});
})(jQuery);
