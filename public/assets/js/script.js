const drawerIcon = document.querySelector("#js-drawer-icon")
const drawerContent = document.querySelector("#js-drawer-content")
const drawerBody = document.querySelector("#js-drawer-body")

if (drawerIcon) {

  document.querySelector("#js-drawer-icon").addEventListener("click", function (e) {
    e.preventDefault();
    drawerIcon.classList.toggle("is-checked")
    drawerContent.classList.toggle("is-checked")
    drawerBody.classList.toggle("is-checked")
  })
}