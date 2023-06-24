// Filter by input text
function searchFilter() {
    let input, filter, title, notif;
    let i = 0;
    input = document.getElementById("searchText");
    notif = document.querySelector('.notification');
    notif_text = document.querySelector('.notification-text');
    notif.style.display = 'none';
    filter = input.value.toUpperCase();
    const cards = document.querySelectorAll(".angkutan_card");

    cards.forEach(card => {
        title = card.querySelector(".nama_angkutan");
        jurusan = card.querySelector(".jurusan");
        if (title.innerText.toUpperCase().indexOf(filter) > -1 || jurusan.innerText.toUpperCase().indexOf(filter) > -1 ) {
          card.classList.remove("d-none");
            i++;
          } else {
            card.classList.add("d-none");
            i = 0;
        }
    });
    // let dataNone = document.querySelectorAll(".d-none").length;
    // console.log(dataNone)
    // if (dataNone == cards.length) {
    //     notif_text.textContent = `Pencarian "${input.value}" tidak ditemukan`;
    //     notif.style.display = 'block';
    // }

}

searchFilter();