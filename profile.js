const image_input = document.querySelector("#image_input"); // Corrected selector for image input
let uploaded_img = ""; // Changed var to let for better variable scoping

image_input.addEventListener("change", function() {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        uploaded_img = reader.result;
        document.querySelector("#display_img").style.backgroundImage = `url(${uploaded_img})`; // Corrected background image URL syntax
    });
    reader.readAsDataURL(this.files[0]); // Changed `this.false` to `this.files` to get the selected file
});


function removeElement(elementId) {
    const elementToRemove = document.getElementById(elementId);
    if (elementToRemove) {
        elementToRemove.remove();
    } else {
        console.error(`Element with id '${elementId}' not found.`);
    }
}