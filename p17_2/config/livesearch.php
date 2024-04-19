<?php
require "../function.php";

$keyword = $_GET["keyword"];

$query = "SELECT * FROM saham
            WHERE 
            `ID` LIKE '%$keyword%' OR
            `NAMA PERUSAHAAN` LIKE '%$keyword%'
            ";

$saham = query($query);
?>
<table class="table">
    <thead>
        <tr class="text-uppercase">
            <th scope="col">
                <form action="" method="POST">
                    <button type="submit" class="btn" role="button" name="uSort" value="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                            class="bi bi-sort-alpha-up short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z" />
                            <path
                                d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zm-8.46-.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z" />
                        </svg>
                    </button>
                    <button type="submit" class="btn" role="button" name="dSort" value="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                            class="bi bi-sort-alpha-down-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645z" />
                            <path fill-rule="evenodd"
                                d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371zm1.57-.785L11 9.688h-.047l-.652 2.156z" />
                            <path
                                d="M4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z" />
                        </svg>
                    </button>
                </form>
                ID
            </th>
            <th scope="col">Nama Perusahaan</th>
            <th scope="col">Pemilik Perusahaan</th>
            <th scope="col">Produksi Perusahaan</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col" class="text-center">Edit</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php foreach ($saham as $r): ?>
            <tr>
                <th scope="row">
                    <?= $r["ID"]; ?>
                </th>
                <td>
                    <?= $r["NAMA PERUSAHAAN"]; ?>
                    <!--  -->
                </td>
                <td>
                    <?= $r["PEMILIK PERUSAHAAN"]; ?>
                    <!--  -->
                </td>
                <td>
                    <?= $r["PRODUKSI PERUSAHAAN"]; ?>
                    <!--  -->
                </td>
                <td>
                    <?= $r["NOMOR TELEPON"]; ?>
                </td>
                <td>
                    <a href="ganti.php?id=<?= $r["ID"]; ?>" class="btn btn-primary" data-bs-toggle="tooltip"
                        data-bs-placement="left" data-bs-title="GANTI" style="width: 46%;">GANTI</a> |
                    <a href="hapus.php?id=<?= $r["ID"]; ?>"
                        onclick="return confirm('YAKIN INGIN MENGHAPUS PERMANEN DATA INI?\n- OKE > LANJUT\n- BATAL > BATALKAN')"
                        class="btn btn-danger" style="width: 46%;">HAPUS</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#ShowModal">TAMBAH</a>
            </td>
        </tr>
    </tbody>
</table>