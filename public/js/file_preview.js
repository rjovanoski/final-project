var inputFile = document.getElementById("image");
var previewContainer = document.getElementById("previewContainer");
var previewImage = previewContainer.querySelector(".imageRecipe-preview");
var previewDefaultText = previewContainer.querySelector(".default-text");

inputFile.addEventListener("change", function () {
  var file = this.files[0];

  if (file) {
    var reader = new FileReader();
    previewDefaultText.style.display = "none";
    previewImage.style.display = "block";
    reader.addEventListener("load", function () {
      previewImage.setAttribute("src", this.result);
    });
    reader.readAsDataURL(file);
  }else {
    previewDefaultText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute("src", "");
  }
});