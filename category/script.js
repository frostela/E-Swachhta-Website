// script.js

document.addEventListener('DOMContentLoaded', () => {
    // Handle Confirm button click
    const confirmButton = document.querySelector('.btn-success');
    
    if (confirmButton) {
        confirmButton.addEventListener('click', () => {
            // Add custom logic here, e.g., validation or confirmation
            if (confirm('Are you sure you want to confirm your selection?')) {
                // Logic for confirmed action
                alert('Your selection has been confirmed.');
                // You can also add more functionality here, like form submission
            }
        });
    }
    
    // Optional: Custom JavaScript for other interactions
    // Example: Dynamically change category box colors on hover
    const categoryBoxes = document.querySelectorAll('.category-box');
    
    categoryBoxes.forEach(box => {
        box.addEventListener('mouseover', () => {
            box.style.backgroundColor = '#e0f7fa'; // Change color on hover
        });
        box.addEventListener('mouseout', () => {
            box.style.backgroundColor = ''; // Reset color
        });
    });
});
