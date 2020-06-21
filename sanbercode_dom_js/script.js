var items = [
  ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
  ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
  ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
  ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

//Release 1 Looping


function printItems(barang) {
  let cards = ""
  for (let i = 0; i < barang.length; i++) {
    cards += `
        <div class="col-md-4 col-lg-3 col-sm-6>
          <div class="card" style="width: 18rem;">
            <img src="${barang[i][4]}" style="height: 200px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" id="itemName">${barang[i][1]}</h5>
                <p class="card-text" id="itemDesc">${barang[i][3]}</p>
                <p class="card-text">Rp ${barang[i][2]}</p>
                <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
              </div>
          </div>
        </div>

        `
  }
  let listBarang = document.getElementById("listBarang");
  listBarang.innerHTML = cards
  return cards;
}
printItems(items)

//console.log(cards);




//release 1 search, menangkap event dari form inputan

let formItem = document.getElementById("formItem")
formItem.addEventListener("submit", function (e) {
  e.preventDefault() //mencegah reload

  //dapetin value dari keyword pencarian
  let keyword = document.getElementById("keyword").value


  //filtering array
  var filteredItems = []
  for (var j = 0; j < items.length; j++) {
    // cari di items element ke j 
    if (items[j][1].toLowerCase().includes(keyword.toLowerCase())) {
      filteredItems.push(items[j])
    }
  }
  printItems(filteredItems)
})