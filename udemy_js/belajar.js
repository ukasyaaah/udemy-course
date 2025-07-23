var mobil1 = ["avanza", "agya", "ayla"];
var mobil2 = ["Fortuner", "Mobilio", "Lambo..ups"];
var motor = ["CB", "GL", "Megapro"];

// Ubah aray jadi string
console.log(mobil1.toString());

console.log(mobil1.join(" "));

// Pindahin ayla ke mobilku
var mobilku = mobil1.pop();
console.log(mobilku);

// push -> menambah
mobil1.push("fortuner");
console.log(mobil1);

// concat -> gabungin  array
var kendaraan = mobil1.concat(mobil2, motor);
console.log(kendaraan);

// map 
// map ga merubah array asli
var nomor1 = [45, 4, 9, 16, 25];
var nomor2 = nomor1.map((val) => val * 2);
console.log(nomor2);
