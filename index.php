<!DOCTYPE html>
<html>

<head>
  <title>Tugas 3 | no.1</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div id="app">
    <div class="form_user">
      <p>Konversi Panjang</p>
      <div class="input_user">
        <input class="input_user" type="input" v-model="input" placeholder="Masukan angka"> Centimeter
      </div>
      <div>
        <table class="tabel" height="250x">
          <tr>
            <th width="300px">Operasi</th>
            <th width="300px">Hasil</th>
          </tr>
          <tr>
            <td>Kilometer</td>
            <td>{{ input / 100000 }}</td>
          </tr>
          <tr>
            <td>Meter</td>
            <td>{{ input / 100 }}</td>
          </tr>
        </table>
        <div class="footer">
          <span>Created by : dzyan-yan | With Vue.Js</span>
        </div>
      </div>
    </div>
  </div>

  <script src="Vue.min.js"></script>
  <script src="apps.js"></script>
</body>

</html>