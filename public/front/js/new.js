document.addEventListener("DOMContentLoaded", function () {
    const aboutVideo = document.getElementById("aboutVideoNew");
    const aboutVideoBtn = document.getElementById("aboutVideoBtnNew");

    aboutVideoBtn.addEventListener("click", function () {
        if (!aboutVideo.paused) {
            aboutVideo.pause(); // Pause the video
            aboutVideo.currentTime = 0; // Reset the video to the beginning
            aboutVideoBtn.style.display = "block"; // Show the button
        } else {
            aboutVideo.play();
            aboutVideoBtn.style.display = "none"; // Hide the button
        }
    });

    aboutVideo.addEventListener("click", function () {
        if (!aboutVideo.paused) {
            aboutVideo.pause(); // Pause the video
            aboutVideo.currentTime = 0; // Reset the video to the beginning
            aboutVideoBtn.style.display = "block"; // Show the button
        }else{
            aboutVideo.play();
            aboutVideoBtn.style.display = "none"; // Hide the button
        }
    })
    // Optional: Show the button again when the video ends
    aboutVideo.addEventListener("ended", function () {
        aboutVideoBtn.style.display = "block";
        aboutVideo.currentTime = 0; // Reset the video to the beginning
    });
});

document.querySelectorAll(".newOurJob").forEach(jobItem => {
    jobItem.addEventListener("click", () => {
        const jobId = jobItem.getAttribute("data-job-id");
        const modal = document.querySelector(`#ourWorkModal_${jobId}`);
        if (modal) {
            modal.classList.remove("hidden");
        }
    });
});

document.querySelectorAll(".newOurJobNew").forEach(jobItem => {
    jobItem.addEventListener("click", () => {
        const jobId = jobItem.getAttribute("data-job-id");
        const modal = document.querySelector(`#ourWorkModal_${jobId}`);
        if (modal) {
            modal.classList.remove("hidden");
        }
    });
});

document.querySelectorAll(".OurNews").forEach(newItem => {
    newItem.addEventListener("click", () => {
        const newId = newItem.getAttribute("data-new-id");
        const modal = document.querySelector(`#ourNewsModal_${newId}`);
        if (modal) {
            modal.classList.remove("hidden");
        }
    });
});

document.querySelectorAll('.modal-map').forEach((buttonsWrapperModal) => {
    buttonsWrapperModal.addEventListener('click', (e) => {
        if (e.target.nodeName === 'BUTTON') {
            const modalId = buttonsWrapperModal.id.replace('modalMap_', '');
            const slidesModal = document.querySelector(`#modalInner_${modalId}`);
            const buttons = Array.from(buttonsWrapperModal.children);
            const totalButtons = buttons.length;
            buttons.forEach((button) => button.classList.remove('active'));
            const buttonIndex = parseInt(e.target.getAttribute('data-index'));
            if (!isNaN(buttonIndex)) {
                const translatePercentage = (buttonIndex / totalButtons) * 100;
                slidesModal.style.transform = `translateX(-${translatePercentage}%)`;
                e.target.classList.add('active');
            }
        }
    });
});

document.querySelectorAll('.modal-map-news').forEach((buttonsWrapperModal) => {
    buttonsWrapperModal.addEventListener('click', (e) => {
        if (e.target.nodeName === 'BUTTON') {
            const modalId = buttonsWrapperModal.id.replace('modalMapNews_', '');
            const slidesModal = document.querySelector(`#modalInnerNews_${modalId}`);
            const buttons = Array.from(buttonsWrapperModal.children);
            const totalButtons = buttons.length;
            buttons.forEach((button) => button.classList.remove('active'));
            const buttonIndex = parseInt(e.target.getAttribute('data-index'));
            if (!isNaN(buttonIndex)) {
                const translatePercentage = (buttonIndex / totalButtons) * 100;
                slidesModal.style.transform = `translateX(-${translatePercentage}%)`;
                e.target.classList.add('active');
            }
        }
    });
});

document.querySelectorAll('.consultation_map').forEach((buttonsWrapperModal) => {
    buttonsWrapperModal.addEventListener('click', (e) => {
        if (e.target.nodeName === 'BUTTON') {
            const id = buttonsWrapperModal.id.replace('modalMapConsultation_', '');
            const slidesModal = document.querySelector(`#innerConsultation_${id} .wrapper .inner`);
            const buttons = Array.from(buttonsWrapperModal.children);
            const totalButtons = buttons.length;

            buttons.forEach((button) => button.classList.remove('active'));
            const buttonIndex = parseInt(e.target.getAttribute('data-index'));
            if (!isNaN(buttonIndex)) {
                const translatePercentage = (buttonIndex / totalButtons) * 100;
                slidesModal.style.transition = 'transform 0.3s ease-in-out'; // Smooth transition
                slidesModal.style.transform = `translateX(-${translatePercentage}%)`;
                e.target.classList.add('active');
            }
        }
    });
});



document.querySelectorAll(".close-modal-btn").forEach(button => {
    button.addEventListener("click", () => {
        const modalId = button.getAttribute("data-modal-id");
        const modal = document.querySelector(`#${modalId}`);
        if (modal) {
            modal.classList.add("hidden");
        }
    });
});

document.querySelectorAll(".overlay").forEach(overlay => {
    overlay.addEventListener("click", () => {
        overlay.parentElement.classList.add("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const playButtons = document.querySelectorAll(".aboutCustomerVideoBtnNew");
    let activeVideo = null; // To keep track of the currently playing video
    playButtons.forEach((button) => {
        button.addEventListener("click", (e) => {
            e.stopPropagation();
            const buttonId = button.getAttribute("button-id");
            const video = document.querySelector(`#aboutCustomerVideo${buttonId}`);
            if (video) {
                video.play();
                activeVideo = video;
                button.style.display = "none";
                video.addEventListener("ended", () => {
                    button.style.display = "block";
                    activeVideo = null; // Clear the active video when it ends
                });
            }
        });
    });
    document.addEventListener("click", () => {
        if (activeVideo) {
            activeVideo.pause();
            const buttonId = activeVideo.id.replace("aboutCustomerVideo", "");
            const relatedButton = document.querySelector(
                `.aboutCustomerVideoBtnNew[button-id="${buttonId}"]`
            );
            if (relatedButton) {
                relatedButton.style.display = "block"; // Show the play button again
            }
            activeVideo = null;
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const hamburgerBtn = document.querySelector(".hamburger-btn");
    const hamburgerModal = document.querySelector(".hamburger-modal");
    const closeModalBtn = document.querySelector(".close-hamburger-modal");
    // Show modal on hamburger button click
    hamburgerBtn.addEventListener("click", () => {
        hamburgerModal.classList.remove("hidden");
    });
    // Hide modal on close button click
    closeModalBtn.addEventListener("click", () => {
        hamburgerModal.classList.add("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.questions-item').forEach((item) => {
        item.addEventListener('click', (e) => {
            if (e.target.classList.contains('questions-item-btn') || e.target.classList.contains('questions-item-title')) {
                const desc = item.querySelector('.questions-item-desc');

                // Use class-based toggling for better CSS control
                desc.classList.toggle('hidden');
            }
        });
    });
});

document.querySelectorAll('.questions-item').forEach((questionsItem) => {
    questionsItem.addEventListener("click", () => {
        const itemDesc = questionsItem.querySelector('p');
        const itemBtn = questionsItem.querySelector('div > button');
        if (questionsItem.classList.contains("questions-item-active")) {
            itemBtn.classList.remove("questions-item-btn-active");
            itemDesc.classList.add("questions-item-desc");
            itemDesc.classList.remove("questions-item-desc-active");
            questionsItem.classList.add("questions-item");
            questionsItem.classList.remove("questions-item-active");
        } else {
            itemBtn.classList.add("questions-item-btn-active");
            itemDesc.classList.add("questions-item-desc-active");
            itemDesc.classList.remove("questions-item-desc");
            questionsItem.classList.add("questions-item-active");
            questionsItem.classList.remove("questions-item");
        }
    });
});

const buttonsWrapper = document.getElementById("buttonsWrapper");
const slides = document.getElementById("slides");
const cards = slides.querySelectorAll(".card");

// Calculate slide width percentage
const slideWidth = 100 / cards.length;

buttonsWrapper.addEventListener("click", (e) => {
    if (e.target.nodeName === "BUTTON") {
        // Remove 'active' class from all buttons
        Array.from(buttonsWrapper.children).forEach((button) =>
            button.classList.remove("active")
        );
        // Add 'active' class to clicked button
        e.target.classList.add("active");
        // Get button index
        const index = e.target.getAttribute("data-index");
        // Update transform style for slides
        slides.style.transform = `translateX(-${index * slideWidth}%)`;
    }
});

