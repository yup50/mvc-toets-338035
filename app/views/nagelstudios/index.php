<?php require_once APPROOT . '/views/includes/header.php'; ?>

<h3><?= $data['title']; ?></h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Naam</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Kosten (miljoen)</th>
            <th>Aantal passagiers</th>
        </tr>
    </thead>
    <tbody>
        <?= $data['dataRows']; ?>
    </tbody>
</table>

<br>
<a href="<?= URLROOT; ?>/homepages/index">Homepage</a>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>