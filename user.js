const openModal = document.getElementById("openModal")
const modal = document.getElementById("modalcontainer")
const cancel = document.getElementById("cancel")
openModal.addEventListener("click", ()=>{
    modal.style.display = "flex";
})
cancel.addEventListener("click", ()=>{
    openModal.style.display = "none"
})