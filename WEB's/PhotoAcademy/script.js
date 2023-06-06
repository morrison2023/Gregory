if (screen.width <= 508) {
  window.location.href = "http://example.com/too-narrow.html";
}
const reviews = document.querySelectorAll(".review-info");

reviews.forEach((review) => {
  const stars = review.querySelector(".stars");
  const rating = 4; // rating out of 5
  const starString = "★".repeat(rating) + "☆".repeat(5 - rating);
  stars.textContent = starString;
});
$(".open").click(function () {
  var container = $(this).parents(".topic");
  var answer = container.find(".answer");
  var trigger = container.find(".faq-t");

  answer.slideToggle(200);

  if (trigger.hasClass("faq-o")) {
    trigger.removeClass("faq-o");
  } else {
    trigger.addClass("faq-o");
  }

  if (container.hasClass("expanded")) {
    container.removeClass("expanded");
  } else {
    container.addClass("expanded");
  }
});
