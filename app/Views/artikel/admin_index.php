<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<h2><?= $title; ?></h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Status</th>
    <th>Aksi</th>
    </tr>

<?php foreach ($artikel as $row): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['judul']; ?></td>
    <td><?= $row['status']; ?></td>
   <td>
    <a class="btn btn-primary" href="<?= base_url('/admin/artikel/edit/'.$row['id']); ?>">Ubah</a>
    <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');"
       href="<?= base_url('/admin/artikel/delete/'.$row['id']); ?>">Hapus</a>
</td>
</tr>
<?php endforeach; ?>

</table>
<?= $pager->links(); ?>
<?= $this->endSection() ?>