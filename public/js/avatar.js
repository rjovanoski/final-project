$(document).ready(function (e) {
  $('#avatar').change(function(){
            
  let reader = new FileReader();
 
  reader.onload = (e) => { 
  
    $('#previewAvatar').attr('src', e.target.result); 
  }

  reader.readAsDataURL(this.files[0]); 
    
  });
    
});