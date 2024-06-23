<?php
@$page = $_GET['q'];
if (!empty($page)) {
    switch ($page) {

        case 'beranda':
            include './pages/beranda/beranda.php';
            break;

            //data penduduk
        case 'data-penduduk':
            include './pages/data-penduduk/data-penduduk.php';
            break;

            case 'data-tambah':
                include './pages/data-penduduk/data-tambah/data-tambah.php';
                break;
    
            case 'data-edit':
                include './pages/data-penduduk/data-edit/data-edit.php';
                break;

            case 'data-edit-proses':
                include './pages/data-penduduk/data-edit/data-edit-proses.php';
                break;
    
            case 'data-hapus':
                include './pages/data-penduduk/data-hapus/data-hapus.php';
                break;
    
            case 'data-aksi':
                include './pages/data-penduduk/data-aksi/data-aksi.php';
                break;

                //end of data penduduk

            //SURAT MASUK
        case 'data-arsip-masuk':
            include './pages/data-arsip-masuk/data-arsip-masuk.php';
            break;

        case 'arsip_tambah_masuk':
            include './pages/data-arsip-masuk/arsip_tambah_masuk/arsip_tambah_masuk.php';
            break;

        case 'arsip_edit_masuk':
            include './pages/data-arsip-masuk/arsip_edit_masuk/arsip_edit_masuk.php';
            break;

        case 'arsip_hapus_masuk':
            include './pages/data-arsip-masuk/arsip_hapus_masuk/arsip_hapus_masuk.php';
            break;

        case 'arsip_aksi_masuk':
            include './pages/data-arsip-masuk/arsip_aksi_masuk/arsip_aksi_masuk.php';
            break;

        case 'arsip_preview_masuk':
            include './pages/data-arsip-masuk/arsip_preview_masuk/arsip_preview_masuk.php';
            break;

        case 'arsip_download_masuk':
            include './pages/data-arsip-masuk/arsip_download_masuk/arsip_download.php';
            break;


            //SURAT KELUAR
        case 'data-arsip-keluar':
            include './pages/data-arsip-keluar/data-arsip-keluar.php';
            break;

        case 'arsip_aksi_keluar':
            include './pages/data-arsip-keluar/arsip_aksi_keluar/arsip_aksi_keluar.php';
            break;

        case 'arsip_tambah_keluar':
            include './pages/data-arsip-keluar/arsip_tambah_keluar/arsip_tambah_keluar.php';
            break;

        case 'arsip_preview_keluar':
            include './pages/data-arsip-keluar/arsip_preview_keluar/arsip_preview_keluar.php';
            break;

            case 'arsip_download_keluar':
                include './pages/data-arsip-keluar/arsip_download_keluar/arsip_download.php';
                break;
    

            //KATEGORI
        case 'kategori':
            include './pages/kategori/kategori.php';
            break;

            case 'kategori_tambah':
                include './pages/kategori/kategori_tambah/kategori_tambah.php';
                break;
    
            case 'kategori_edit':
                include './pages/kategori/kategori_edit/kategori_edit.php';
                break;
    
            case 'kategori_hapus':
                include './pages/kategori/kategori_hapus/kategori_hapus.php';
                break;
    
            case 'kategori_aksi':
                include './pages/kategori/kategori_aksi/kategori_aksi.php';
                break;
    
            case 'kategori_update':
                include './pages/kategori/kategori_update/kategori_update.php';
                break;
                // end kategori

            //Riwayat Unduh
        case 'riwayat_unduhan':
            include './pages/riwayat_unduhan/riwayat_unduhan.php';
            break;

            //Riwayat Unduh surat keluar
            case 'riwayat_unduhan_skeluar':
                include './pages/riwayat_unduhan_skeluar/riwayat_unduhan.php';
                break;

            //Arsip Preview
        case 'arsip_preview':
            include './pages/riwayat_unduhan/arsip_preview/arsip_preview.php';
            break;

                        //Arsip keluar Preview
        case 'arsip_keluar_preview':
            include './pages/riwayat_unduhan_skeluar/arsip_preview/arsip_preview.php';
            break;


            //PETUGAS EDIT
        case 'petugas_edit':
            include './pages/data_petugas/petugas_edit/petugas_edit.php';
            break;

        case 'petugas_aksi':
            include './pages/data_petugas/petugas_aksi/petugas_aksi.php';
            break;

        case 'data_petugas':
            include './pages/data_petugas/data_petugas.php';
            break;

        case 'petugas_tambah':
            include './pages/data_petugas/petugas_tambah/petugas_tambah.php';
            break;


        case 'petugas_hapus':
            include './pages/data_petugas/petugas_hapus/petugas_hapus.php';
            break;

        case 'petugas_update':
            include './pages/data_petugas/petugas_update/petugas_update.php';
            break;


        case 'data-arsip-keluar-edit':
            include './pages/data-arsip-keluar/arsip-edit.php';
            break;

        case 'data-arsip-keluar-hapus':
            include './pages/data-arsip-keluar/arsip-hapus.php';
            break;

        case 'data-arsip-keluar-preview':
            include './pages/data-arsip-keluar/arsip-preview.php';
            break;

        case 'data-arsip-keluar-update':
            include './pages/data-arsip-keluar/arsip-update.php';
            break;

        case 'data-arsip-keluar-keluar':
            include './pages/data-arsip-keluar-keluar/data-arsip.php';
            break;

        case 'gantipas':
            include './pages/gantipas/gantipas.php';
            break;

        case 'gantipasproses':
            include './pages/gantipas/gantipasproses/gantipasproses.php';
            break;

        case 'load_data_table':
            include './pages/data-arsip/load_data_table/load_data_table.php';
            break;

        case 'tables':
            include './pages/tables/tables.php';
            break;

        case 'logout':
            include './pages/logout/logout.php';
            break;
    }
} else {
    include './pages/beranda/beranda.php';
}