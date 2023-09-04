<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h3>Kompetensi Keahlian</h3>
                <?php foreach ($data['blog'] as $blog) : ?>
                    <ul>
                        <li><?= $blog['jurusan']; ?></li>
                        <p><?= $blog['ket']; ?></p>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

<style>
    li {
        font-weight: 700;
    }

    *   {
        box-sizing: border-box;
    }

    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    h5 {
        font-weight: 700;
    }

    table {
        width: 100%;
        border: 1px solid;
    }
</style>