const navbar = document.querySelector('#navbar')
const navbarToggle = document.querySelector('.mobile-nav-toggle')
const navbarDropdownLinks = document.querySelectorAll('.navbar .dropdown > a')

navbarToggle.addEventListener('click', (e) => {
  navbar.classList.toggle('navbar-mobile')
  navbarToggle.classList.toggle('bi-list')
  navbarToggle.classList.toggle('bi-x')
})

navbarDropdownLinks.addEventListener('click', (e) => {
  if (navbar.classList.contains('navbar-mobile')) {
    e.preventDefault()
    this.nextElementSibling.classList.toggle('dropdown-active')
  }
})