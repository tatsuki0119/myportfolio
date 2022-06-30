
{

  // 下からフワッと
  function callback(entries, obs) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        return;
      }

      entry.target.classList.add('appear');
      obs.unobserve(entry.target);
    });
  }

  const options = {
    threshold: 0.3,
  };

  const observer = new IntersectionObserver(callback, options);

  const targets = document.querySelectorAll('.animate');

  targets.forEach(target => {
    observer.observe(target);
  });
  // 下からフワッと

  // to-topの挙動
  const toTop = document.getElementById('to-top');
  
  toTop.addEventListener('click', e => {
    e.preventDefault();
    
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });    
  });
  // to-topの挙動

}