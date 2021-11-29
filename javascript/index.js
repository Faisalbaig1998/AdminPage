var images = [
  "DSC_6442.JPG",
  "DSC_6443.JPG",
  "DSC_6444.JPG",
  "DSC_6445.JPG",
  "DSC_6447.JPG",
  "DSC_6450.JPG",
];

const next = (images) => {
  let element = document.getElementsByClassName("tags")[0];
};

window.onscroll = function () {
  scrollFunc();
};

function scrollFunc() {
  var elem = document.getElementsByTagName("body")[0];
  var scrollY = elem.scrollTop;
  var scrollX = elem.scrollLeft;
  console.log(scrollY);
  console.log(scrollX);
  document.getElementsByClassName("scrollview")[0].innerHTML = scrollY;
  document.getElementsByClassName("scrollviewx")[0].innerHTML = scrollX;
}
