<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("includes/header.php"); ?>

<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="<?php echo base_url("formApp/insert") ?>">
				<span class="contact100-form-title">
					Başvuru Formu
				</span>

				<div class="wrap-input100 validate-input" data-validate="Bu Alan Zorunludur.">
					<span class="label-input100">İsminiz</span>
					<input class="input100" type="text" name="name" placeholder="İsminizi Giriniz">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Bu Alan Zorunludur. ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Email adresinizi giriniz.">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Departmanlar</span>
					<div>
						<select class="selection-2" name="service">
							<option>Birim Seçiniz</option>
							<option>Muhabese</option>
							<option>Yazılım Geliştirme</option>
							<option>Proje Yürütücüsü</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Maaş</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Maaş Seçiniz</option>
							<option>5500</option>
							<option>6000</option>
							<option>7500</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Mesaj alanı gereklidir.">
					<span class="label-input100">Mesajınız</span>
					<textarea class="input100" name="message" placeholder="Mesajnızı yazınız."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Formu Gönder
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<?php $this->load->view("includes/footer.php"); ?>


</body>

</html>