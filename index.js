const gallArrow = document.getElementById("gall-arrow");
const gallArrowHTML =
  '<div class="num m-auto text-center"> <svg id="arrow-up" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" ></g> <g id="SVGRepo_iconCarrier"> <path d="M18.0697 9.57L11.9997 3.5L5.92969 9.57" stroke="#f4d202" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" ></path> <path opacity="0.4" d="M12 20.4999V3.66992" stroke="#f4d202" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" ></path> </g> </svg> <span class="darker"></span> <h1 id="gall-number">1</h1> <div> <span id="counter">1</span>/<span id="gall-totla-img"></span> </div> <svg id="arrow-down" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <g id="SVGRepo_bgCarrier" stroke-width="0"></g> <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" ></g> <g id="SVGRepo_iconCarrier"> <path d="M18.0697 14.4302L11.9997 20.5002L5.92969 14.4302" stroke="#f4d202" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" ></path> <path opacity="0.4" d="M12 3.5V20.33" stroke="#f4d202" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" ></path> </g> </svg> </div>';

gallArrow.innerHTML = gallArrowHTML;

/*
 * TU ZACINA TAZKY KOOD ;D
 */
const gallNum = document.getElementById("gall-number"),
  totalImg = document.getElementById("gall-totla-img"),
  imgSolar = document.getElementById("gall-img-solar"),
  imgPriem = document.getElementById("gall-img-priem"),
  imgByt = document.getElementById("gall-img-byt"),
  imgSiet = document.getElementById("gall-img-siet"),
  counter = document.getElementById("counter");

// Buttons
const button1 = document.getElementById("solar-pan"),
  button2 = document.getElementById("priem-ele"),
  button3 = document.getElementById("byt-ele"),
  button4 = document.getElementById("siet-tech");

// Arrows
const arrUp = document.getElementById("arrow-up"),
  arrDown = document.getElementById("arrow-down");

arrayOfimg = [imgSolar, imgPriem, imgByt, imgSiet];

imgArray1 = ["img/solar/img1.jpg", "img/solar/img2.jpg", "img/solar/img3.jpg"];
imgArray2 = [
  "img/priem/img1.jpg",
  // "img/priem/img2.jpg",
  "img/priem/img3.jpg",
  "img/priem/img4.jpg",
  "img/priem/img5.jpg",
  "img/priem/img6.jpg",
  "img/priem/img7.jpg",
  "img/priem/img8.jpg",
  "img/priem/img9.jpg",
  "img/priem/img10.jpg",
  "img/priem/img11.jpg",
  "img/priem/img12.jpg",
  "img/priem/img13.jpg",
];
imgArray3 = ["img/byt/img1.jpg", "img/byt/img2.jpg", "img/byt/img3.jpg"];
imgArray4 = ["img/siet/img1.jpg", "img/siet/img2.jpg", "img/siet/img3.JPG"];

arrayOfArr = [imgArray1, imgArray2, imgArray3, imgArray4];

let thisImg = arrayOfimg[0];
let thisArr = arrayOfArr[0];
totalImg.innerHTML = thisArr.length;

let i = 1;

if (
  button1.addEventListener("click", () => {
    thisImg = arrayOfimg[0];
    thisArr = arrayOfArr[0];
    totalImg.innerHTML = thisArr.length;
    gallNum.innerHTML = 1;
    counter.innerHTML = 1;
    thisImg.src = thisArr[0];
    i = 1;

    button1.classList.add("active");
    button2.classList.remove("active");
    button3.classList.remove("active");
    button4.classList.remove("active");
  })
);
else if (
  button2.addEventListener("click", () => {
    thisImg = arrayOfimg[1];
    thisArr = arrayOfArr[1];
    totalImg.innerHTML = thisArr.length;
    gallNum.innerHTML = 1;
    counter.innerHTML = 1;
    thisImg.src = thisArr[0];
    i = 1;

    button1.classList.remove("active");
    button2.classList.add("active");
    button3.classList.remove("active");
    button4.classList.remove("active");
  })
);
else if (
  button3.addEventListener("click", () => {
    thisImg = arrayOfimg[2];
    thisArr = arrayOfArr[2];
    totalImg.innerHTML = thisArr.length;
    gallNum.innerHTML = 1;
    counter.innerHTML = 1;
    thisImg.src = thisArr[0];
    i = 1;

    button1.classList.remove("active");
    button2.classList.remove("active");
    button3.classList.add("active");
    button4.classList.remove("active");
  })
);
else if (
  button4.addEventListener("click", () => {
    thisImg = arrayOfimg[3];
    thisArr = arrayOfArr[3];
    totalImg.innerHTML = thisArr.length;
    gallNum.innerHTML = 1;
    counter.innerHTML = 1;
    thisImg.src = thisArr[0];
    i = 1;

    button1.classList.remove("active");
    button2.classList.remove("active");
    button3.classList.remove("active");
    button4.classList.add("active");
  })
);
arrUp.addEventListener("click", function () {
  i++;
  if (thisArr.length >= i) {
    gallNum.innerHTML = i;
    thisImg.src = thisArr[i - 1];
    counter.innerHTML = i;
  } else {
    i = 1;

    gallNum.innerHTML = i;
    thisImg.src = thisArr[i - 1];
    counter.innerHTML = i;
  }
});
arrDown.addEventListener("click", function () {
  i--;
  if (i > 0) {
    gallNum.innerHTML = i;
    thisImg.src = thisArr[i - 1];
    counter.innerHTML = i;
  } else {
    i = thisArr.length;

    gallNum.innerHTML = i;
    thisImg.src = thisArr[i - 1];
    counter.innerHTML = i;
  }
});
