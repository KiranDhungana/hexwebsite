const ccwrapper = document.querySelector(".ccwrapper");
const carousels = document.querySelector(".carousels");
const firstscardWidth = carousels.querySelector(".scard").offsetWidth;
const arrowBtns = document.querySelectorAll(".ccwrapper i");
const carouselsChildrens = [...carousels.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of scards that can fit in the carousels at once
let scardPerView = Math.round(carousels.offsetWidth / firstscardWidth);

// Insert copies of the last few scards to beginning of carousels for infinite scrolling
carouselsChildrens.slice(-scardPerView).reverse().forEach(scard => {
    carousels.insertAdjacentHTML("afterbegin", scard.outerHTML);
});

// Insert copies of the first few scards to end of carousels for infinite scrolling
carouselsChildrens.slice(0, scardPerView).forEach(scard => {
    carousels.insertAdjacentHTML("beforeend", scard.outerHTML);
});

// Scroll the carousels at appropriate postition to hide first few duplicate scards on Firefox
carousels.classList.add("no-transition");
carousels.scrollLeft = carousels.offsetWidth;
carousels.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousels left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousels.scrollLeft += btn.id == "left" ? -firstscardWidth : firstscardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousels.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousels
    startX = e.pageX;
    startScrollLeft = carousels.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousels based on the cursor movement
    carousels.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousels.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousels is at the beginning, scroll to the end
    if(carousels.scrollLeft === 0) {
        carousels.classList.add("no-transition");
        carousels.scrollLeft = carousels.scrollWidth - (2 * carousels.offsetWidth);
        carousels.classList.remove("no-transition");
    }
    // If the carousels is at the end, scroll to the beginning
    else if(Math.ceil(carousels.scrollLeft) === carousels.scrollWidth - carousels.offsetWidth) {
        carousels.classList.add("no-transition");
        carousels.scrollLeft = carousels.offsetWidth;
        carousels.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousels
    clearTimeout(timeoutId);
    if(!ccwrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    // if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousels after every 2500 ms
    timeoutId = setTimeout(() => carousels.scrollLeft += firstscardWidth, 1500);
}
autoPlay();

carousels.addEventListener("mousedown", dragStart);
carousels.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousels.addEventListener("scroll", infiniteScroll);
ccwrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
ccwrapper.addEventListener("mouseleave", autoPlay);