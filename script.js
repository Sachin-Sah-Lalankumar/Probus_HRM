document.addEventListener('DOMContentLoaded', () => {
    const animatedText = document.querySelector('.animated-text');
    let textArray = ['Creating innovative solutions for you', 'Empowering your business', 'Building the future'];
    let textIndex = 0;

    setInterval(() => {
        animatedText.textContent = textArray[textIndex];
        textIndex = (textIndex + 1) % textArray.length;
    }, 3000);
});
const text = document.querySelector('.animated-text-main');
  const textContent = text.textContent;
  text.textContent = '';

  for (let i = 0; i < textContent.length; i++) {
    setTimeout(function() {
      text.textContent += textContent[i];
    }, 100 * i);
  }
