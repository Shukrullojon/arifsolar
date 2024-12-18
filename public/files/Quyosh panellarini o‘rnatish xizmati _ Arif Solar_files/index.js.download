let aboutVideo = document.querySelector("#aboutVideo");
let aboutVideoPlay = document.querySelector("#aboutVideoBtn");
let aboutCustomerVideo1 = document.querySelector("#aboutCustomerVideo1");
let aboutCustomerVideo2 = document.querySelector("#aboutCustomerVideo2");
let aboutCustomerVideo3 = document.querySelector("#aboutCustomerVideo3");
let aboutCustomerVideo4 = document.querySelector("#aboutCustomerVideo4");
let aboutCustomerVideo5 = document.querySelector("#aboutCustomerVideo5");
let aboutCustomerVideo6 = document.querySelector("#aboutCustomerVideo6");
let aboutCustomerVideoBtn1 = document.querySelector("#aboutCustomerVideoBtn1");
let aboutCustomerVideoBtn2 = document.querySelector("#aboutCustomerVideoBtn2");
let aboutCustomerVideoBtn3 = document.querySelector("#aboutCustomerVideoBtn3");
let aboutCustomerVideoBtn4 = document.querySelector("#aboutCustomerVideoBtn4");
let aboutCustomerVideoBtn5 = document.querySelector("#aboutCustomerVideoBtn5");
let aboutCustomerVideoBtn6 = document.querySelector("#aboutCustomerVideoBtn6");
let ourJobsItem1 = document.querySelector("#ourJobsItem1")
let ourJobsItem2 = document.querySelector("#ourJobsItem2")
let ourJobsItem3 = document.querySelector("#ourJobsItem3")
let ourJobsItem4 = document.querySelector("#ourJobsItem4")
let ourJobsItem5 = document.querySelector("#ourJobsItem5")
let ourJobsItem6 = document.querySelector("#ourJobsItem6")
let ourJobsItem7 = document.querySelector("#ourJobsItem7")
let ourJobsItem8 = document.querySelector("#ourJobsItem8")
let modalOverlay = document.querySelector("#modalOverlay")
let heroBtn = document.querySelector("#hero-form")
let freeTialContactForm = document.querySelector("#freeTialContactForm")
// let activeOurJobsItem = document.querySelector(".our-jobs-item:nth-child(4)")
let ourJobList = document.querySelector(".our-jobs-list")
let newsItemBoxLink1 = document.querySelector("#newsItemBoxLink1")
let newsItemBoxLink2 = document.querySelector("#newsItemBoxLink2")
let newsItemBoxLink3 = document.querySelector("#newsItemBoxLink3")
let newsItemBoxLink4 = document.querySelector("#newsItemBoxLink4")
let newsItemBoxLink5 = document.querySelector("#newsItemBoxLink5")
let newsItemBoxLink6 = document.querySelector("#newsItemBoxLink6")
let headerTopBtn = document.querySelector(".header-top-btn")
let headerTop= document.querySelector("#header-top")

headerTopBtn.addEventListener("click", () =>{
   headerTop.setAttribute("style", "display:none")
})

newsItemBoxLink1.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })
 newsItemBoxLink2.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })
 newsItemBoxLink3.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })
 newsItemBoxLink4.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })
 newsItemBoxLink5.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })
 newsItemBoxLink6.addEventListener("click", () => {
   ourWorkModal.classList.remove("hidden")
 })

heroBtn.addEventListener("submit", (a) => {
//  console.log(a.target);
// a.preventDefault()
 inputName = document.querySelector(".hero-name-input")
 inputTell = document.querySelector(".hero-tel-input")

 const myTimeout = setTimeout(myGreeting, 2000);

function myGreeting() {
   inputName.value = ""
   inputTell.value = "+998"
}
})

freeTialContactForm.addEventListener("submit", () => {

    inputName = document.querySelector(".free-tial-contact-input")
    inputTell = document.querySelector("#free-tial-tell")

    const myTimeout = setTimeout(myGreeting, 2000);

   function myGreeting() {
      inputName.value = ""
      inputTell.value = "+998"
   }
   })

function clickVideo(ClassVideoBtn, activeClassVideoBtn, playPauseVideo, nmeBtn) {
    if(nmeBtn.classList == ClassVideoBtn){
        playPauseVideo.play()
        nmeBtn.classList.add(activeClassVideoBtn)
        nmeBtn.classList.remove(ClassVideoBtn)
     } else if(nmeBtn.classList == activeClassVideoBtn){
        playPauseVideo.pause()
        nmeBtn.classList.add(ClassVideoBtn)
        nmeBtn.classList.remove(activeClassVideoBtn)
     }
}

// function clickVideoBtn(classVideoBtn, activeClassVideoBtn) {
//     if(aboutVideoPlay.classList == classVideoBtn){
//         playVideo()
//         aboutVideoPlay.classList.add(activeClassVideoBtn)
//         aboutVideoPlay.classList.remove(classVideoBtn)
//      } else if(aboutVideoPlay.classList == activeClassVideoBtn){
//         pauseVideo()
//         aboutVideoPlay.classList.add(classVideoBtn)
//            aboutVideoPlay.classList.remove(activeClassVideoBtn)
//      }
// }

aboutVideo.addEventListener("click", (e) => {
    e.preventDefault()
    clickVideo("about-video-btn", "active-about-video-btn",  aboutVideo, aboutVideoPlay)

} )

aboutVideoPlay.addEventListener("click", (e) => {
    e.preventDefault()
    clickVideo("about-video-btn", "active-about-video-btn", aboutVideo, aboutVideoPlay )

} )



// item 1

aboutCustomerVideo1.addEventListener("click", (e) => {
    e.preventDefault()

    if(aboutCustomerVideoBtn2.classList  == "active-about-video-btn") {
        aboutCustomerVideo2.pause()
        aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
     } else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
         aboutCustomerVideo3.pause()
         aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
     } else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1)
     }

} )

aboutCustomerVideoBtn1.addEventListener("click", (e) => {
    e.preventDefault()

    if(aboutCustomerVideoBtn2.classList  == "active-about-video-btn") {
        aboutCustomerVideo2.pause()
        aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
     } else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
         aboutCustomerVideo3.pause()
         aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
     } else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo1, aboutCustomerVideoBtn1)
     }
} )

// item 2

aboutCustomerVideo2.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
     } else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
         aboutCustomerVideo3.pause()
         aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
     } else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2)
     }

} )

aboutCustomerVideoBtn2.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
     } else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
         aboutCustomerVideo3.pause()
         aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
     } else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo2, aboutCustomerVideoBtn2)
     }

} )

// item 3

aboutCustomerVideo3.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
     }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3)
     }

} )

aboutCustomerVideoBtn3.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
     }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo3, aboutCustomerVideoBtn3)
     }

} )

// item 4

aboutCustomerVideo4.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4)
     }

} )

aboutCustomerVideoBtn4.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo4, aboutCustomerVideoBtn4)
     }

} )

// item 5

aboutCustomerVideo5.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5)
     }

} )

aboutCustomerVideoBtn5.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    }else if(aboutCustomerVideoBtn6.classList == "active-about-video-btn"){
        aboutCustomerVideo6.pause()
        aboutCustomerVideoBtn6.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn6.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo5, aboutCustomerVideoBtn5)
     }

} )

// item 6

aboutCustomerVideo6.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6)
     }

} )

aboutCustomerVideoBtn6.addEventListener("click", (e) => {
    e.preventDefault()
    if(aboutCustomerVideoBtn1.classList  == "active-about-video-btn") {
        aboutCustomerVideo1.pause()
        aboutCustomerVideoBtn1.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn1.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
     } else if(aboutCustomerVideoBtn2.classList == "active-about-video-btn"){
         aboutCustomerVideo2.pause()
         aboutCustomerVideoBtn2.classList.add("about-customr-video-play")
         aboutCustomerVideoBtn2.classList.remove("active-about-video-btn")
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
     }else if(aboutCustomerVideoBtn3.classList == "active-about-video-btn"){
        aboutCustomerVideo3.pause()
        aboutCustomerVideoBtn3.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn3.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    }else if(aboutCustomerVideoBtn4.classList == "active-about-video-btn"){
        aboutCustomerVideo4.pause()
        aboutCustomerVideoBtn4.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn4.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    }else if(aboutCustomerVideoBtn5.classList == "active-about-video-btn"){
        aboutCustomerVideo5.pause()
        aboutCustomerVideoBtn5.classList.add("about-customr-video-play")
        aboutCustomerVideoBtn5.classList.remove("active-about-video-btn")
       clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6 )
    } else{
        clickVideo("about-customr-video-play", "active-about-video-btn", aboutCustomerVideo6, aboutCustomerVideoBtn6)
     }

} )


// questions section



// our jobs item

let ourWorkModal = document.querySelector("#ourWorkModal")

ourJobsItem1.addEventListener("click", () => {
   console.log("ishladi");
   ourWorkModal.classList.remove("hidden")
})

ourJobsItem2.addEventListener("click", () => {
   console.log("ishladi");
   ourWorkModal.classList.remove("hidden")
})
ourJobsItem3.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})
ourJobsItem4.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})
ourJobsItem5.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})
ourJobsItem6.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})
ourJobsItem7.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})
ourJobsItem8.addEventListener("click", () => {
   console.log("ishladi");

   ourWorkModal.classList.remove("hidden")
})


modalOverlay.addEventListener("click", () => {
  ourWorkModal.classList.add("hidden")
})

