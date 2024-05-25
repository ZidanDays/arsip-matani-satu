<?php
include '../conf/conf.php';

$query = isset($_GET['query']) ? $_GET['query'] : '';
$searchResults = [];

// Menampilkan data tanpa pencarian jika tidak ada query
if (empty($query)) {
    $arsip = mysqli_query($koneksi, "SELECT arsip_keluar.*, kategori.kategori_nama, petugas.petugas_nama FROM arsip_keluar
        LEFT JOIN kategori ON arsip_keluar.arsip_kategori = kategori.kategori_id
        LEFT JOIN petugas ON arsip_keluar.arsip_petugas = petugas.petugas_id
        ORDER BY arsip_keluar.arsip_keluar_id DESC");

    if (!$arsip) {
        die(mysqli_error($koneksi)); // Tampilkan pesan kesalahan
    }

    while ($p = mysqli_fetch_assoc($arsip)) {
        $searchResults[] = $p;
    }
} else {
    // Menampilkan data berdasarkan query pencarian
    $arsip = mysqli_query($koneksi, "SELECT arsip_keluar.*, kategori.kategori_nama, petugas.petugas_nama FROM arsip_keluar
        LEFT JOIN kategori ON arsip_keluar.arsip_kategori = kategori.kategori_id
        LEFT JOIN petugas ON arsip_keluar.arsip_petugas = petugas.petugas_id
        ORDER BY arsip_keluar.arsip_keluar_id DESC");

    if (!$arsip) {
        die(mysqli_error($koneksi)); // Tampilkan pesan kesalahan
    }

    while ($p = mysqli_fetch_assoc($arsip)) {
        $searchResults[] = $p;
    }

    // Fungsi untuk melakukan pencarian sequential search
    function sequentialSearch($array, $query) {
        $results = [];

        foreach ($array as $item) {
            // Cocokkan kata kunci pencarian dengan kolom arsip_kode atau arsip_nama
            if (strpos(strtolower($item['arsip_kode']), strtolower($query)) !== false || 
                strpos(strtolower($item['arsip_nama']), strtolower($query)) !== false) {
                // Hitung similarity dengan algoritma yang sesuai
                $similarity = calculateSimilarity($query, $item['arsip_kode'], $item['arsip_nama']);
                $item['similarity'] = $similarity; // Tambahkan similarity ke dalam item
                $results[] = $item;
            }
        }

        return $results;
    }

    // Fungsi untuk menghitung similarity dengan menggunakan Jaccard similarity
    function calculateSimilarity($query, $kode, $nama) {
        // Pisahkan kata-kata dalam query, kode, dan nama
        $queryWords = explode(' ', strtolower($query));
        $kodeWords = explode(' ', strtolower($kode));
        $namaWords = explode(' ', strtolower($nama));

        // Gabungkan semua kata-kata unik dari kode dan nama
        $combinedWords = array_unique(array_merge($kodeWords, $namaWords));

        // Hitung jumlah kata yang muncul dalam query
        $queryWordCount = count($queryWords);

        // Hitung jumlah kata yang muncul dalam kode dan nama
        $commonWordCount = 0;
        foreach ($combinedWords as $word) {
            if (in_array($word, $queryWords) && (in_array($word, $kodeWords) || in_array($word, $namaWords))) {
                $commonWordCount++;
            }
        }

        // Hitung similarity menggunakan rumus Jaccard similarity
        $similarity = $commonWordCount / ($queryWordCount + count($combinedWords) - $commonWordCount);

        return $similarity;
    }

    // Lakukan pencarian sequential search
    $searchResults = sequentialSearch($searchResults, $query);
}
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-dark text-white me-2">
                    <i class="fa-solid fa-database"></i>
                </span> Data Arsip
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form method="get" action="" id="search-form">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="form-group">
                                    <label>Cari arsip keluar anda</label>
                                    <input type="text" class="form-control-cari" name="query"
                                        value="<?php echo $query; ?>" placeholder="Kata Kunci">
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <br>
                                <button type="submit" class="btn-cari">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <div class="pull-right">
                            <a href="?q=arsip_tambah_keluar" class="btn-upload"><i class="fa-solid fa-upload"
                                    style="padding-bottom: 40px; padding-top: 20px; margin-right:5px"></i>
                                Upload
                                Arsip Keluar Anda</a>
                        </div>
                        <table id="table" class="table table-bordered table-hover table-datatable">
                            <thead>
                                <tr>
                                    <th style="padding: 20px 20px; background-color: #dc3545;
    color: #fff;" width="1%">No</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Waktu Upload</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Arsip</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Kategori</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Petugas</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Keterangan</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Similarity</th>
                                    <th class="text-center" style="background-color: #dc3545;
    color: #fff;">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // MenMenampilkan hasil pencarian atau pesan jika tidak ditemukan
if (!empty($query)) {
    if (!empty($searchResults)) {
    // Tampilkan hasil pencarian
    foreach ($searchResults as $index => $p) {
        $codeSimilarity = similar_text(strtolower($p['arsip_kode']), strtolower($query), $percentCode);
        $nameSimilarity = similar_text(strtolower($p['arsip_nama']), strtolower($query), $percentName);
        $similarity = max($percentCode, $percentName); // Mengambil persentase kemiripan tertinggi
        
    ?>
                                <tr>
                                    <td><?= ($index + 1) ?></td>
                                    <td><?= date('H:i:s  d-m-Y', strtotime($p['arsip_waktu_upload'])) ?></td>
                                    <td><b>KODE</b> : <?= $p['arsip_kode'] ?><br><b>Nama</b> :
                                        <?= $p['arsip_nama'] ?><br><b>Jenis</b> : <?= $p['arsip_jenis'] ?></td>
                                    <td><?= $p['kategori_nama'] ?></td>
                                    <td><?= $p['petugas_nama'] ?></td>
                                    <td><?= $p['arsip_keterangan'] ?></td>
                                    <!-- <td><?= isset($p['similarity']) ? number_format($p['similarity'], 2) : '0.00' ?> -->
                                    <td class="text-center"><?= $similarity ?>%</td>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a target="_blank" class="btn btn-default"
                                                href="?q=arsip_download_keluar&id=<?= $p['arsip_keluar_id'] ?>"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i></a>
                                            <a target="_blank"
                                                href="?q=arsip_preview_keluar&id=<?= $p['arsip_keluar_id'] ?>"
                                                class="btn btn-default"><i class="fa fa-search"></i> Preview</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                     }
                                 } else {
                                 ?>
                                <tr>
                                    <td colspan='8'>Tidak ada hasil yang ditemukan untuk '<?= $query ?>'</td>
                                </tr>
                                <?php
                                     }
                                 } else {
                                     // Menampilkan semua dokumen jika tidak ada query
                                     $no = 1;
                                     foreach ($searchResults as $p) {
                                 ?>
                                <tr>
                                    <td class='text-center'><?= $no++ ?></td>
                                    <td><?= date('H:i:s  d-m-Y', strtotime($p['arsip_waktu_upload'])) ?></td>
                                    <td><b>KODE</b> : <?= $p['arsip_kode'] ?><br><b>Nama</b> :
                                        <?= $p['arsip_nama'] ?><br><b>Jenis</b> : <?= $p['arsip_jenis'] ?></td>
                                    <td><?= $p['kategori_nama'] ?></td>
                                    <td><?= $p['petugas_nama'] ?></td>
                                    <td><?= $p['arsip_keterangan'] ?></td>
                                    <td><?= isset($p['similarity']) ? number_format($p['similarity'], 2) : '0.00' ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a target="_blank" class="btn btn-default"
                                                href="?q=arsip_download_keluar&id=<?= $p['arsip_keluar_id'] ?>"><i
                                                    class="fa-solid fa-cloud-arrow-down"></i> Download</a>
                                            <a target="_blank"
                                                href="?q=arsip_preview_keluar&id=<?= $p['arsip_keluar_id'] ?>"
                                                class="btn btn-default"><i class="fa fa-search"></i> Preview</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                     }
                                 }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- Tempatkan di bagian bawah halaman, sebelum </body> -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Menangkap formulir pencarian
    var searchForm = document.getElementById('search-form');
    // Menambahkan event listener untuk meng-handle submit form
    searchForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Menghentikan pengiriman formulir biasa
        // Mendapatkan nilai input query
        var queryInput = document.querySelector('input[name="query"]');
        var queryValue = queryInput.value;
        // Lakukan validasi apakah query tidak kosong
        if (queryValue.trim() !== '') {
            // Redirect atau lakukan apa yang dibutuhkan dengan query
            window.location.href = '?q=data-arsip-keluar&query=' + encodeURIComponent(queryValue);
        } else {
            // Tambahkan logika atau tampilkan pesan kesalahan jika diperlukan
            alert('Masukkan kata kunci untuk melakukan pencarian.');
        }
    });
});
</script>