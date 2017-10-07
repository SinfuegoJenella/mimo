function handleBtnClick(event) {
  toggleButton(event.target);
}

function toggleButton(element) {

  var pressed = (element.getAttribute("aria-pressed") === "true");
  element.setAttribute("aria-pressed", !pressed);
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})