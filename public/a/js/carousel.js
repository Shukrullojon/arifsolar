const prev = document.querySelector("#prev");
const prev2 = document.querySelector("#prev2");
const prev3 = document.querySelector("#prev3");
const next = document.querySelector("#next");
const next2 = document.querySelector("#next2");
const next3 = document.querySelector("#next3");

let carouselVp = document.querySelector("#carousel-vp");
let carouselVp2 = document.querySelector("#carousel-vp2");
let carouselVp3 = document.querySelector("#carousel-vp3");

let cCarouselInner = document.querySelector("#cCarousel-inner");
let cCarouselInner2 = document.querySelector("#cCarousel-inner2");
let cCarouselInner3 = document.querySelector("#cCarousel-inner3");
let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;
let carouselInnerWidth2 = cCarouselInner2.getBoundingClientRect().width;
let carouselInnerWidth3 = cCarouselInner3.getBoundingClientRect().width;

let leftValue = 0;
let leftValue2 = 0;
let leftValue3 = 0;

// Variable used to set the carousel movement value (card's width + gap)
const totalMovementSize =
  parseFloat(
    document.querySelector(".cCarousel-item").getBoundingClientRect().width,
    10
  ) +
  parseFloat(
    window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
    10
  );

prev.addEventListener("click", () => {
  if (!leftValue == 0) {
    leftValue -= -totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }
});

next.addEventListener("click", () => {
  const carouselVpWidth = carouselVp.getBoundingClientRect().width;
  if (carouselInnerWidth - Math.abs(leftValue) >  carouselVpWidth + 2) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }else if(leftValue = 1230 ){
      leftValue = 0;
      cCarouselInner.style.left = leftValue + "px";

  }
});

const mediaQuery510 = window.matchMedia("(max-width: 510px)");
const mediaQuery770 = window.matchMedia("(max-width: 770px)");

mediaQuery510.addEventListener("change", mediaManagement);
mediaQuery770.addEventListener("change", mediaManagement);

let oldViewportWidth = window.innerWidth;

function mediaManagement() {
  const newViewportWidth = window.innerWidth;

  if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
    leftValue += totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue <= -totalMovementSize &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  }
}


// second carousel

const totalMovementSize2 =
  parseFloat(
    document.querySelector(".cCarousel-item2").getBoundingClientRect().width,
    5
  ) +
  parseFloat(
    window.getComputedStyle(cCarouselInner2).getPropertyValue("gap"),
    5
  );


prev2.addEventListener("click", () => {
  if (!leftValue2 == 0) {
    leftValue2 -= -totalMovementSize2;
    cCarouselInner2.style.left = leftValue2 + "px";
  }
});

next2.addEventListener("click", () => {
  const carouselVpWidth = carouselVp2.getBoundingClientRect().width;
  console.log(carouselVpWidth);
  console.log(carouselInnerWidth2 - Math.abs(leftValue2));


  if (carouselInnerWidth2 - Math.abs(leftValue2) >  carouselVpWidth + 2 ) {
    leftValue2 -= totalMovementSize2;
    cCarouselInner2.style.left = leftValue2 + "px";
    console.log();
  }else if(leftValue2 = 608){
      leftValue2 = 0;
      cCarouselInner2.style.left = leftValue2 + "px";

  }
});


mediaQuery510.addEventListener("change", mediaManagement2);
mediaQuery770.addEventListener("change", mediaManagement2);

function mediaManagement2() {
  const newViewportWidth = window.innerWidth;

  if (leftValue2 <= -totalMovementSize2 && oldViewportWidth < newViewportWidth) {
    leftValue2 += totalMovementSize2;
    cCarouselInner2.style.left = leftValue2 + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue2 <= -totalMovementSize2 &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue2 -= totalMovementSize2;
    cCarouselInner2.style.left = leftValue2 + "px";
    oldViewportWidth = newViewportWidth;
  }
}

// thirds carousel


const totalMovementSize3 =
  parseFloat(
    document.querySelector(".cCarousel-item3").getBoundingClientRect().width,
    5
  ) +
  parseFloat(
    window.getComputedStyle(cCarouselInner3).getPropertyValue("gap"),
    5
  );


prev3.addEventListener("click", () => {
  if (!leftValue3 == 0) {
    leftValue3 -= -totalMovementSize3;
    cCarouselInner3.style.left = leftValue3 + "px";
  }
});

next3.addEventListener("click", () => {
  const carouselVpWidth = carouselVp3.getBoundingClientRect().width;
  if (carouselInnerWidth3 - Math.abs(leftValue3) >  carouselVpWidth + 2) {
    leftValue3 -= totalMovementSize3;
    cCarouselInner3.style.left = leftValue3 + "px";
  }else if(leftValue3 = 608){
      leftValue3 = 0;
      cCarouselInner3.style.left = leftValue3 + "px";

  }
});


mediaQuery510.addEventListener("change", mediaManagement3);
mediaQuery770.addEventListener("change", mediaManagement3);

function mediaManagement3() {
  const newViewportWidth = window.innerWidth;

  if (leftValue3 <= -totalMovementSize3 && oldViewportWidth < newViewportWidth) {
    leftValue3 += totalMovementSize3;
    cCarouselInner3.style.left = leftValue3 + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue3 <= -totalMovementSize3 &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue3 -= totalMovementSize3;
    cCarouselInner3.style.left = leftValue3 + "px";
    oldViewportWidth = newViewportWidth;
  }
}

// free tial carousel

const buttonsWrapper = document.querySelector(".map");
const slides = document.querySelector(".inner");

buttonsWrapper.addEventListener("click", e => {
  if (e.target.nodeName === "BUTTON") {
    Array.from(buttonsWrapper.children).forEach(item =>
      item.classList.remove("active")
    );
    if (e.target.classList.contains("first")) {
      slides.style.transform = "translateX(-0%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains("second")) {
      slides.style.transform = "translateX(-33.33333333333333%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains('third')){
      slides.style.transform = 'translatex(-66.6666666667%)';
      e.target.classList.add('active');
    }
  }
});


// modal carousel

const buttonsWrapperModal = document.querySelector(".modal-map");
const slidesModal = document.querySelector(".modal-inner");

buttonsWrapperModal.addEventListener("click", e => {
  if (e.target.nodeName === "BUTTON") {
    Array.from(buttonsWrapperModal.children).forEach(item =>
      item.classList.remove("active")
    );
    if (e.target.classList.contains("first")) {
      slidesModal.style.transform = "translateX(-0%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains("second")) {
      slidesModal.style.transform = "translateX(-33.51333333333333%)";
      e.target.classList.add("active");
    } else if (e.target.classList.contains('third')){
      slidesModal.style.transform = 'translatex(-67.1999999668%)';
      e.target.classList.add('active');
    }
  }
});
