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
      font-size: 187pt;
    }

    h2 {
      color: #785732;
      font-family: Verdana, sans-serif;
      font-style: normal;
      font-weight: bold;
      text-decoration: none;
      font-size: 76pt;
    }

    p {
      color: #785732;
      font-family: Verdana, sans-serif;
      font-style: normal;
      font-weight: bold;
      text-decoration: none;
      font-size: 46pt;
      margin: 0pt;
    }
  </style>
</head>

<body>
  <h1 style="padding-left: 169pt;text-indent: 0pt;line-height: 212pt;text-align: center;"><?php echo $interval ?></h1>
  <h2 style="padding-top: 5pt;padding-left: 169pt;text-indent: 0pt;text-align: center;">HARI</h2>
  <p style="padding-top: 13pt;padding-left: 183pt;text-indent: 0pt;text-align: center;"><?php echo $tanggal ?></p>
  <p style="text-indent: 0pt;text-align: center;">
    <?php echo $mobil->nopol ?>
    <br />
  </p>
  <p style="padding-top: 15pt;padding-left: 93pt;text-indent: 0pt;text-align: center;">
    <span style=" color: #785732; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 92.5pt;">Reminder</span>
  </p>
  <p style="padding-left: 115pt;text-indent: 0pt;line-height: 93%;text-align: center;">
    <span style=" color: #785732; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 39.5pt;">Masa berlaku <?php echo $kind ?> Anda akan habis. Mohon segera lakukan uji <?php echo $kind ?> sebelum masa berlaku habis.</span>
  </p>
  <p style="padding-left: 93pt;text-indent: 0pt;line-height: 43pt;text-align: justify;">
    <span style=" color: #785732; font-family:Calibri, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 39.5pt;">Jika dalam waktu yang telah ditentukan belum dilakukan uji <?php echo $kind ?>, mobil tanki tersebut tidak dapat melakukan operasional di Fuel Terminal Rewulu</span>
  </p>
  <p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"></p>
</body>

</html>