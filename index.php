
<?php
$tempdir = "temp/";
if (!file_exists($tempdir))
    mkdir($tempdir);

?>

<html>
<head>
	<title>Qr</title>
<link rel="stylesheet" href="src/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
				<div class="form-cover">
					<form method="post" action="download-pdf.php">
            <div class="form-sizeqr">
              <label>QR Code Level</label>
              <select name="level" class="form-control">
                <option value="L">L - smallest</option>
                <option value="M" selected="">M</option>
                <option value="Q">Q</option>
                <option value="H">H - best</option>
              </select>

              <label>QR Code Size</label>
              <select name="size" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4" selected>4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
						<div class="form-group">
							<label>Url:</label>
							<input type="text" name="url" class="form-control" placeholder="Enter url">
						</div>
						<div class="form-group">
							<textarea name="text" rows="8" cols="40" placeholder="Enter text"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn">
								Donwload
							</button>
						</div>

					</form>
				</div>
		</div>
	</div>
</body>
</html>
