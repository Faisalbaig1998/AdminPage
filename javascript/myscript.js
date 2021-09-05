const expand = () => {
  console.log("you are in expand");
  var value = getComputedStyle(document.getElementById("login-details"));
  console.log(value.backgroundColor);
  if (value.width != "250px") {
    document.getElementById("login-details").style.width = "250px";
    document.getElementById("login-details").style.height = "auto";
    document.getElementById("login-details").style.transition = "all 0.4s";
  } else {
    document.getElementById("login-details").style.width = "0px";
    document.getElementById("login-details").style.height = "0px";
    document.getElementById("login-details").style.transition = "all 0.4s";
  }
};
