document.addEventListener("DOMContentLoaded", function () {
  function smoothScrollToElement(targetId) {
    var targetElement = document.querySelector(targetId);
    if (targetElement) {
      var targetOffset = targetElement.getBoundingClientRect().top + window.pageYOffset - 62; // offset pro fixní header
      var originalOffset = window.pageYOffset;
      var duration = 800;
      var startTime = null;

      function ease(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
      }

      function scrollToTarget(currentTime) {
        if (startTime === null) startTime = currentTime;
        var progress = currentTime - startTime;
        var scrollY = ease(progress / duration) * (targetOffset - originalOffset) + originalOffset;
        window.scrollTo(0, scrollY);

        if (progress < duration) {
          requestAnimationFrame(scrollToTarget);
        }
      }

      requestAnimationFrame(scrollToTarget);
    } else {
      console.error("Target element not found:", targetId);
    }
  }

  // Plynulý scroll při kliknutí na odkazy
  var smoothScrollLinks = document.querySelectorAll(".smooth-scroll-link");

  smoothScrollLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      var href = this.getAttribute("href");
      var currentPath = window.location.pathname;
      var url = new URL(href, window.location.origin);
      if (url.pathname === currentPath && url.hash) {
        event.preventDefault();
        smoothScrollToElement(url.hash);
        history.pushState(null, null, url.hash); // změní URL bez reloadu
      }
      // pokud je jiná stránka, necháme standardní chování (reload + scroll)
    });
  });

  // Plynulý scroll po načtení stránky, pokud URL obsahuje hash
  if (window.location.hash) {
    // Po malém timeoutu, aby už byl DOM stabilní
    setTimeout(function () {
      smoothScrollToElement(window.location.hash);
    }, 100);
  }
});
