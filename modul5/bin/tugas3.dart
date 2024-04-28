void main() {
  List<int> angka = [1, 2, 3, 4, 5];

  // Menambah elemen baru
  angka.add(6);
  print('\n3. Setelah menambah 6:');
  print(angka);

  // Mengedit elemen ke-3 menjadi 9
  angka[2] = 9;
  print('\n3. Setelah mengedit elemen ke-3 menjadi 9:');
  print(angka);

  // Menghapus elemen ke-2
  angka.removeAt(1);
  print('\n3. Setelah menghapus elemen ke-2:');
  print(angka);
}