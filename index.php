<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SanzkingMY</title>
    <!--CSS only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!--JS only-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <p class="font-monospace">MyPortfolio</p>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Hero section -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="./assets/pp.jpg" alt="Software Development" class="img-fluid rounded-circle" />
                </div>
                <div class="col-md-6 my-auto">
                    <h1>Muhammad <br>Shohibul Faqih</h1>
                    <h5 class="font-monospace">(SanzkinG)</h5>
                    <table class="table table-bordered">
                    	<tbody>
                    		<tr><td class="bg-dark text-light text-center" colspan="2">Data diri</td></tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Nama</td><td class="bg-secondary text-light text-center">Muhammad Shohibul Faqih</td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">NIM</td><td class="bg-secondary text-light text-center">2002114</td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Tingkat pendidikan</td><td class="bg-secondary text-light text-center">S1 MANAGEMENT (SEM 3)</td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Perguruan tinggi</td><td class="bg-secondary text-light text-center">STIE MIFTAHUL HUDA SUBANG</td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Hobi</td><td class="bg-secondary text-light text-center">Rebahan.</td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Drama/Film favorit</td><td class="bg-secondary text-light text-center"><b>Vagabond for Drama</b> & <b>Avanger for Film</b></td>
                    		</tr>
                    		<tr>
                    			<td class="bg-secondary text-light text-center">Zodiak</td><td class="bg-secondary text-light text-center">Sagitarius</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Project Section -->
    <section id="projects">
        <div class="container">
            <div class="row align-items-center projects">
                <div class="col-md-6 mx-auto">
                    <h1 class="text-center">My Project</h1>
                    <p align="justify">
                        Dibawah ini merupakan sekumpulan projek yang saya buat. projek-projek ini semestinya hanya sebuah layanan atau fitur yang memanfaatkan API dalam membuat beberapa fungsi yang berguna dalam pemanfaatannya.
                    </p>
                </div>
            </div>
            <div class="row align-items-center d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvnKvvfk9-LNZakhSWSK5JR5JaEoVwxlOQQA&usqp=CAU" class="card-img-top" alt="Project One">
                        <div class="card-body">
                          <h5 class="card-title">Validate NIM Dikti</h5>
                          <input type="text" placeholder="Masukan NIM/NPM disini" class="form-control mb-3">
                          <input type="button" onclick="alert('Fitur ini masih terkunci!');" class="btn btn-primary" value='Check NIM/NPM!'>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvnKvvfk9-LNZakhSWSK5JR5JaEoVwxlOQQA&usqp=CAU" class="card-img-top" alt="Project One">
                        <div class="card-body">
                          <h5 class="card-title">Youtube MP3</h5>
                          <form action="" method="post">
                          	<input type="text" name="ytlink" placeholder="Masukan Url Video disini" class="form-control mb-3">
                        	  <input type="button" name="ytsub" onclick="alert('Fitur ini masih terkunci!');" class="btn btn-danger" value='Download MP3'>
                          </form>
                          <?php
                          	if(isset($_POST["ytsub"])){
                          		if(empty($_POST["ytlink"])){
                          ?>
                          <script>alert("Url video harus diisi!");</script>
                          <?php
                          		}else{
                          			$ytlink = $_POST["ytlink"];
                          			$ytget = file_get_contents("https://mirip-lolhuman.herokuapp.com/docs/download/ytmp3?url=$ytlink&apikey=Alphabot");
                          			$ytdat = json_decode($ytget, true);
                          			$ytjudul = $ytdat["result"]["title"];
                          			$ytsize = $ytdat["result"]["size_mp3"];
                          			$ytdow = $ytdat["result"]["mp3"];
                          ?>
                          <table class='table table-bordered'>
                          	<tr><td colspan="2">RESULT</td></tr>
                          	<tr><td>Judul</td><td><?php echo $ytjudul; ?></td></tr>
                          	<tr><td>Ukuran MP3</td><td><?php echo $ytsize; ?></td></tr>
                          </table>
                          <div align="center">
                          	<a class="btn btn-danger" href="<?php echo $ytdow; ?>">Lanjut Unduh</a>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Project -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row contact">
                <h1>Hubungi saya</h1>
                <div class="row">
                	<div class="col">
              		  <h5><a href="https://www.facebook.com/mohammad.faqih1933" style="text-decoration: none;font-size: 1em;" class="fa fa-facebook"></a></h5>
                		<h5><a href="https://instagram.com/__faqih.2__" style="text-decoration: none;font-size: 1em;" class="fa fa-instagram text-secondary"></a></h5>
              		  <h5><a href="https://github.com/sanzking" style="text-decoration: none;font-size: 1em;" class="fa fa-github text-dark"></a></h5>
                		<h5><a href="https://wa.me/6285723540943" style="text-decoration: none;font-size: 1em;" class="fa fa-whatsapp text-success"></a></h5>
                		<h5><a href="https://t.me/sanzkingkong" style="text-decoration: none;font-size: 1em;" class="fa fa-telegram text-primary"></a></h5>
                	</div>
                	<div class="col-10">
                		<input type="text" placeholder="Nama depan" class="form-control mb-3">
                		<input type="text" placeholder="Nama belakang" class="form-control mb-3">
                		<input type="text" placeholder="Username IG" class="form-control mb-3">
                		<input type="email" placeholder="Email" class="form-control mb-3">
                		<textarea class="form-control mb-3" placeholder="Message"></textarea>
                		<input type="button" onclick="alert('Fitur ini masih dalam tahap perbaikan');" class="btn btn-danger" value="Kirim saran">
                	</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->
</body>

</html>
