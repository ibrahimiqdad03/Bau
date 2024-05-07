function changeImage() {
    var imageSelector = document.getElementById("imageSelector");
    var selectedImage = document.getElementById("selectedImage");

    
    var selectedValue = imageSelector.value;

    
    selectedImage.src = selectedValue;

   
}
