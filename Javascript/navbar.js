function navStatus() {

    var navStatus = document.getElementById('status');
  
    if (navStatus.classList.contains('inactive')) {
    navStatus.style.classList.remove('inactive');
    navStatus.style.classList.add('active');
    } else {
    navStatus.classList.add('inactive');
    }
  }