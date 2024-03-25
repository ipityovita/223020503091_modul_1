<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Informasi Nama</title>
</head>
<body>
  <h1>Informasi Nama</h1>
  <form action="" method="post">
    <label for="nama">Masukkan Nama:</label>
    <input type="text" id="nama" name="nama">
    <button type="submit">Cari</button>
  </form>

  <?php
    // Array for family member names
    $keluarga = array(
      "Budi",
      "Ana",
      "Citra",
      "Doni dodo",
      "Eko ana budi",
    );

    // Functions for information processing (unchanged)
    function jumlahKata($nama) {
      return str_word_count($nama);
    }

    function jumlahHuruf($nama) {
      return strlen($nama);
    }

    function namaKebalikan($nama) {
      return strrev($nama);
    }

    function jumlahKonsonanVokal($nama) {
      $jumlahKonsonan = 0;
      $jumlahVokal = 0;

      for ($i = 0; $i < strlen($nama); $i++) {
        $huruf = strtolower($nama[$i]);
        if (in_array($huruf, array('a', 'e', 'i', 'o', 'u'))) {
          $jumlahVokal++;
        } else if (ctype_alpha($huruf)) {
          $jumlahKonsonan++;
        }
      }

      return array(
        "konsonan" => $jumlahKonsonan,
        "vokal" => $jumlahVokal
      );
    }

    // Get name from user input (assuming a form with name="nama" and POST method)
    $namaDicari = isset($_POST['nama']) ? $_POST['nama'] : '';

    // Search name in the array
    $indeks = array_search($namaDicari, $keluarga);

    if ($indeks !== false) {
      // Get name using index
      $nama = $keluarga[$indeks];

      // Process and display information
      $jumlahKata = jumlahKata($nama);
      $jumlahHuruf = jumlahHuruf($nama);
      $namaKebalikan = namaKebalikan($nama);
      $jumlahKonsonanVokal = jumlahKonsonanVokal($nama);

      echo "<h2>Informasi Nama " . $nama . "</h2>";
      echo "<ul>";
      echo "<li>Jumlah Kata: " . $jumlahKata . "</li>";
      echo "<li>Jumlah Huruf: " . $jumlahHuruf . "</li>";
      echo "<li>Nama Kebalikan: " . $namaKebalikan . "</li>";
      echo "<li>Jumlah Konsonan: " . $jumlahKonsonanVokal['konsonan'] . "</li>";
      echo "<li>Jumlah Vokal: " . $jumlahKonsonanVokal['vokal'] . "</li>";
      echo "</ul>";
    } else {
      echo "Nama tidak ditemukan.";
    }
  ?>
</body>
</html>
