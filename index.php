<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        background-color: #2f4f4f;
        font-family: sans-serif;
      }
      .contact {
        margin: 100px auto;
        width: 500px;
      }
      .contact .row {
        width: 100%;
        display: flex;
        background: #008b8b;
        flex-wrap: wrap;
        justify-content: center;
      }
      .contact .row form {
        width: 100%;
      }
      .contact h3 {
        text-transform: uppercase;
        font-size: 25px;
        color: #fff;
      }
      .contact .row form {
        width: 100%;
      }
      .contact .row form label {
        color: #fff;
      }
      .contact .row form input {
        width: 100%;
      }
      .contact .row form input, textarea {
        background: #2f4f4f;
        color: #fff;
        border: none;
        width: 400px;
        padding: 10px;
        margin-bottom: 10px;
      }
      .contact .row form button {
        background: #2f4f4f;
        color: #fff;
        border: none;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 40px;
      }
    </style>
    <title>Send_whatsapp</title>
  </head>
  <body>
    <section class="contact">
      <div class="container">
        <div class="row">
          <h3>Hubungi saya</h3>
          <div class="col">
            <form action="send.php" method="post" target="_blank">
              <div class="form-group">
                <label for="name">Nama</label><br>
                <input type="name" class="form-control" name="name" placeholder="Silahkan isi nama" />
              </div>
              <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" class="form-control" name="email" placeholder="nama@semailKamu.com." />
              </div>
              <div class="form-group">
                <label for="message">Pesanan</label><br>
                <textarea class="form-control" name="message"placeholder="Produk yang ingin dipesan" rows="3"></textarea>
              </div>
              <!-- setelah pembeli mengisi pemesanan, akan diarahkan ke wa saya untuk informasi lebih lanjut -->
              <input type="hidden" name="nowa" value="6289619636519" />
              <button type="submit" name="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
