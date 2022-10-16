<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ms" lang="ms">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Reminder</title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      text-indent: 0;
    }

    h1 {
      color: #FF1616;
      font-family: Verdana, sans-serif;
      font-style: normal;
      font-weight: bold;
      text-decoration: none;
      font-size: 50pt;
    }

    h2 {
      color: #785732;
      font-family: Verdana, sans-serif;
      font-style: normal;
      font-weight: bold;
      text-decoration: none;
      font-size: 20pt;
    }

    p {
      color: #785732;
      font-family: Verdana, sans-serif;
      font-style: normal;
      font-weight: bold;
      text-decoration: none;
      font-size: 12pt;
      margin: 0pt;
    }
  </style>
</head>

<body>
  <img style="width:150px;" float="right;" src="<?= base_url('assets/img/patra.png'); ?>">
  <p style="padding-top: 5pt;padding-left: 93pt;text-indent: 0pt;text-align: center;">
    <span style=" color: #785732; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 30pt;">Reminder</span>
  </p>
  <h1 style="padding-left: 169pt;text-indent: 0pt;line-height: 60pt;text-align: center;"><?php echo $interval ?></h1>
  <h2 style="padding-top: 5pt;padding-left: 169pt;text-indent: 0pt;text-align: center;">HARI LAGI</h2>
  <p style="padding-top: 13pt;padding-left: 183pt;text-indent: 0pt;text-align: center;"><?php echo $tanggal ?></p>
  <p style="text-indent: 0pt;text-align: center;">
    MOBIL TANGKI
    <?php echo $mobil->nopol ?>
    <br />
  </p>
  <p style="padding-left: 115pt;text-indent: 0pt;line-height: 93%;text-align: center;">
    <span style=" color: #785732; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none;">MASA BERLAKU <?php echo $kind ?> MOBIL TANKI <?php echo $mobil->nopol ?> AKAN HABIS / TIDAK BERLAKU. MOHON UNTUK DAPAT SEGERA DILAKUKAN PROSES PERPANJANGAN MASA BERLAKU <?php echo $kind ?>.</span>
  </p>
  <p style="padding-left: 93pt;text-indent: 0pt;line-height: 93%;text-align: center;">
    <span style=" color: #785732; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none;">APABILA SAMPAI TANGGAL TERSEBUT BELUM ADA DOKUMEN TERBARU, MAKA MOBIL TANKI <?php echo $mobil->nopol ?> TIDAK DAPAT DIOPERASIKAN UNTUK PENYALURAN BBM / BBK DARI FUEL TERMINAL REWULU KEPADA CUSTOMER.</span>
  </p>
  <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"></p>
</body>

</html>