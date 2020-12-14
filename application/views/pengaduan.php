<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2>Pengaduan</h2>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Pengaduan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <form action="/pengaduan_status.php">
        <input type="text" id="name" name="tname" placeholder="Isikan nama anda.."> <br /><br />
        <input type="text" id="subjek_aduan" name="subjek_aduan" placeholder="Masukan Subjek yang ingin anda adukan.."><br /><br />
        <textarea id="deskripsi" name="deskripsi" placeholder="Tuliskan penjelasan secara lengkap.." style="height:200px"></textarea><br /><br />
        <label for="bukti_aduan">Bukti Pengaduan</label>
        <input type="file" id="bukti_aduan" name="bukti_aduan"><br /><br />
        <button type="submit" class="btn btn-aduan btn-large">Adukan</button>
    </form>
</div>

</body>
</html>
