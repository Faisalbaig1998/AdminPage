const expand = () => {
  console.log("you are in expand");
  var value = getComputedStyle(document.getElementById("login-details"));
  let px = parseInt(value.height);
  console.log(px);
  console.log(value.height);
  if (value.display !== "none") {
    document.getElementById("login-details").style.display = "none";
    document.getElementById("login-details").style.transition = "all 0.4s";
  } else {
    document.getElementById("login-details").style.display = "block";
    document.getElementById("login-details").style.transition = "all 0.4s";
  }
};
