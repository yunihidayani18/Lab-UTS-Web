<?= $this->include('template/header'); ?>

<div class="card">

    <div class="card-header bg-primary text-white">
        <h4>Daftar Artikel</h4>
    </div>

    <div class="card-body">
        <form method="get" class="mb-3">

    <div class="input-group">

        <input type="text"
               name="q"
               value="<?= $q; ?>"
               placeholder="Cari artikel..."
               class="form-control">

        <button class="btn btn-primary" type="submit">
            Cari
        </button>

    </div>

</form>

        <table class="table table-bordered table-striped">

            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php foreach ($artikel as $row): ?>

            <tr>
                <td><?= $row['id']; ?></td>

                <td>
                    <strong><?= $row['judul']; ?></strong><br>
                    <?= substr($row['isi'], 0, 50); ?>
                </td>

                <td><?= $row['status']; ?></td>

                <td>

                    <a class="btn btn-warning btn-sm"
                       href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">
                       Ubah
                    </a>

                    <a class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus data?');"
                       href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">
                       Hapus
                    </a>

                </td>
            </tr>

            <?php endforeach; ?>

            </tbody>

        </table>

        <!-- Pagination -->
        <nav>
            <ul class="pagination">
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
            </ul>
        </nav>

    </div>
</div>

<?= $this->include('template/footer'); ?>

