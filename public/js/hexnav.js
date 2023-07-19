function scrollToElement(element, duration) {
    const targetPosition = element.getBoundingClientRect().top;
    const startPosition = window.pageYOffset;
    const distance = targetPosition;
    const startTime = performance.now();
  
    function easeInOutQuad(t) {
      return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }
  
    function scroll() {
      const currentTime = performance.now();
      const time = Math.min(1, (currentTime - startTime) / duration);
      const easedTime = easeInOutQuad(time);
      window.scrollTo(0, startPosition + distance * easedTime);
  
      if (time < 1) {
        requestAnimationFrame(scroll);
      }
    }
  
    scroll();
  }
  // Usage
  const button1 = document.getElementById('n1');
  const button2 = document.getElementById('n2');
  const button3 = document.getElementById('n3');
  const button4 = document.getElementById('n4');
  const button5 = document.getElementById('n5');
  const button6 = document.getElementById('n6');
  const button7 = document.getElementById('n7');
  const section1 = document.getElementById('home-section');
  const section2 = document.getElementById('about-section');
  const section3 = document.getElementById('gallary-section');
  const section4 = document.getElementById('event-section');
  const section5 = document.getElementById('club-section');
  const section6 = document.getElementById('faq-section');
  const section7 = document.getElementById('contact-section');
  
  button1.addEventListener('click', () => {
    scrollToElement(section1, 1000); // Scroll to section1 with a duration of 1000ms
  });
  
  button2.addEventListener('click', () => {
    scrollToElement(section2, 1000); // Scroll to section2 with a duration of 1000ms
  });
  button3.addEventListener('click', () => {
    scrollToElement(section3, 1000); // Scroll to section2 with a duration of 1000ms
  });
  button4.addEventListener('click', () => {
    scrollToElement(section4, 1000); // Scroll to section2 with a duration of 1000ms
  });
  button5.addEventListener('click', () => {
    scrollToElement(section5, 1000); // Scroll to section2 with a duration of 1000ms
  });
  button6.addEventListener('click', () => {
    scrollToElement(section6, 1000); // Scroll to section2 with a duration of 1000ms
  });
  button7.addEventListener('click', () => {
    scrollToElement(section7, 1000); // Scroll to section2 with a duration of 1000ms
  });
