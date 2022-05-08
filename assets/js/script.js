'use strict';
// element toggle function
const elementToggleFunc = function (elem) {
  elem.classList.toggle("active");
}



// sidebar variables
const sidebar = document.querySelector("[data-sidebar]");
const sidebarBtn = document.querySelector("[data-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });



// testimonials variables
const testimonialsItem = document.querySelectorAll("[data-testimonials-item]");
const modalContainer = document.querySelector("[data-modal-container]");
const modalCloseBtn = document.querySelector("[data-modal-close-btn]");
const overlay = document.querySelector("[data-overlay]");

// modal variable
const modalImg = document.querySelector("[data-modal-img]");
const modalTitle = document.querySelector("[data-modal-title]");
const modalText = document.querySelector("[data-modal-text]");

// modal toggle function
const testimonialsModalFunc = function () {
  modalContainer.classList.toggle("active");
  overlay.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < testimonialsItem.length; i++) {

  testimonialsItem[i].addEventListener("click", function () {

    modalImg.src = this.querySelector("[data-testimonials-avatar]").src;
    modalImg.alt = this.querySelector("[data-testimonials-avatar]").alt;
    modalTitle.innerHTML = this.querySelector("[data-testimonials-title]").innerHTML;
    modalText.innerHTML = this.querySelector("[data-testimonials-text]").innerHTML;

    testimonialsModalFunc();

  });

}
modalCloseBtn.addEventListener("click", testimonialsModalFunc);
overlay.addEventListener("click", testimonialsModalFunc);


/////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
// research variables
const researchItemm = document.querySelectorAll("[data-research-itemm]");
const modalContainerr = document.querySelector("[data-modal-containerr]");
const modalCloseBtnn = document.querySelector("[data-modal-close-btnn]");
const overlayy = document.querySelector("[data-overlayy]");

// modal variable
const modalImgg = document.querySelector("[data-modal-imgg]");
const modalTitlee = document.querySelector("[data-modal-titlee]");
const modalTextt = document.querySelector("[data-modal-textt]");

// modal toggle function
const researchModalFuncc = function () {
  modalContainerr.classList.toggle("active");
  overlayy.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < researchItemm.length; i++) {

  researchItemm[i].addEventListener("click", function () {

    modalImgg.src = this.querySelector("[data-research-avatarr]").src;
    modalImgg.alt = this.querySelector("[data-research-avatarr]").alt;
    modalTitlee.innerHTML = this.querySelector("[data-research-titlee]").innerHTML;
    modalTextt.innerHTML = this.querySelector("[data-research-textt]").innerHTML;

    researchModalFuncc();

  });

}
modalCloseBtnn.addEventListener("click", researchModalFuncc);
overlayy.addEventListener("click", researchModalFuncc);


//////////////////////////////
/////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
// activity variables
const activityItemmm = document.querySelectorAll("[data-activity-itemmm]");
const modalContainerrr = document.querySelector("[data-modal-containerrr]");
const modalCloseBtnnn = document.querySelector("[data-modal-close-btnnn]");
const overlayyy = document.querySelector("[data-overlayyy]");

// modal variable
const modalImggg = document.querySelector("[data-modal-imggg]");
const modalTitleee = document.querySelector("[data-modal-titleee]");
const modalTexttt = document.querySelector("[data-modal-texttt]");

// modal toggle function
const activityModalFunccc = function () {
  modalContainerrr.classList.toggle("active");
  overlayyy.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < activityItemmm.length; i++) {

  activityItemmm[i].addEventListener("click", function () {

    modalImggg.src = this.querySelector("[data-activity-avatarrr]").src;
    modalImggg.alt = this.querySelector("[data-activity-avatarrr]").alt;
    modalTitleee.innerHTML = this.querySelector("[data-activity-titleee]").innerHTML;
    modalTexttt.innerHTML = this.querySelector("[data-activity-texttt]").innerHTML;

    activityModalFunccc();

  });

}
modalCloseBtnnn.addEventListener("click", activityModalFunccc);
overlayyy.addEventListener("click", activityModalFunccc);


//////////////////////////////
/////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
// university variables
const universityItemmmm = document.querySelectorAll("[data-university-itemmmm]");
const modalContainerrrr = document.querySelector("[data-modal-containerrrr]");
const modalCloseBtnnnn = document.querySelector("[data-modal-close-btnnnn]");
const overlayyyy = document.querySelector("[data-overlayyyy]");
const universityImgs = document.querySelector("[data-university-imgs]");


// modal variable
const modalImgggg = document.querySelector("[data-modal-imgggg]");
const modalTitleeee = document.querySelector("[data-modal-titleeee]");
const modalTextttt = document.querySelector("[data-modal-textttt]");
const modalImgs = document.querySelector("[data-modal-imgs]");


// modal toggle function
const universityModalFuncccc = function () {
  modalContainerrrr.classList.toggle("active");
  overlayyyy.classList.toggle("active");
}

// add click event to all modal items
for (let i = 0; i < universityItemmmm.length; i++) {

  universityItemmmm[i].addEventListener("click", function () {

    modalImgggg.src = this.querySelector("[data-university-avatarrrr]").src;
    modalImgggg.alt = this.querySelector("[data-university-avatarrrr]").alt;
    modalTitleeee.innerHTML = this.querySelector("[data-university-titleeee]").innerHTML;
    modalTextttt.innerHTML = this.querySelector("[data-university-textttt]").innerHTML;
    modalImgs.innerHTML = this.querySelector("[data-university-imgs]").innerHTML;
    universityModalFuncccc();
  });

}
modalCloseBtnnnn.addEventListener("click", universityModalFuncccc);
overlayyyy.addEventListener("click", universityModalFuncccc);


//////////////////////////////
// add click event to modal close button


// custom select variables
const select = document.querySelector("[data-select]");
const selectItems = document.querySelectorAll("[data-select-item]");
const selectValue = document.querySelector("[data-selecct-value]");
const filterBtn = document.querySelectorAll("[data-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });

// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);

  });
}

// filter variables
const filterItems = document.querySelectorAll("[data-filter-item]");

const filterFunc = function (selectedValue) {

  for (let i = 0; i < filterItems.length; i++) {

    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }

  }

}

// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];

for (let i = 0; i < filterBtn.length; i++) {

  filterBtn[i].addEventListener("click", function () {

    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);

    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;

  });

}



// contact form variables
const form = document.querySelector("[data-form]");
const formInputs = document.querySelectorAll("[data-form-input]");
const formBtn = document.querySelector("[data-form-btn]");

// add event to all form input field
for (let i = 0; i < formInputs.length; i++) {
  formInputs[i].addEventListener("input", function () {

    // check form validation
    if (form.checkValidity()) {
      formBtn.removeAttribute("disabled");
    } else {
      formBtn.setAttribute("disabled", "");
    }

  });
}



// page navigation variables
const navigationLinks = document.querySelectorAll("[data-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
  navigationLinks[i].addEventListener("click", function () {
    for (let i = 0; i < pages.length; i++) {
      if (this.innerHTML.toLowerCase() === pages[i].dataset.page) {
        pages[i].classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        pages[i].classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    }

  });
}
