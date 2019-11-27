var backdrop = document.querySelector(".backdrop");
var toggleButton = document.querySelector(".toggle-button");
var mobileNav = document.querySelector(".mobile-nav");
/*var wavesurfer = WaveSurfer.create({
  container: '#waveform',
  waveColor: '#D9DCFF',
  progressColor: '#4353FF',
  cursorColor: 'transparent',
  barWidth: 3,
  barRadius: 3,
  cursorWidth: 0,
  height: 100,
  barGap: 3
});
wavesurfer.load('tozihat.mp3');

document.getElementById("play-button").addEventListener("click", function() {
  wavesurfer.play();
});*/
backdrop.addEventListener("click", function() {
    // mobileNav.style.display = 'none';
    mobileNav.classList.remove("open");
    backdrop.classList.remove("open");
  setTimeout(function() {
    backdrop.style.display = "none";
  }, 200);
});

toggleButton.addEventListener("click", function() {
    // mobileNav.style.display = 'block';
    // backdrop.style.display = 'block';
    mobileNav.classList.add("open");
    backdrop.style.display = "block";
    setTimeout(function() {
      backdrop.classList.add("open");
    }, 10);
});